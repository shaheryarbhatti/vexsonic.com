<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use App\Mail\ContactFormMail;
use App\Mail\CustomerConfirmationMail;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function contact(Request $request): JsonResponse
    {
        // ── Bot Protection 1: Honeypot field ──
        // Bots fill all fields including hidden ones — humans never see this field
        if ($request->filled('website')) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent! We\'ll get back to you within 24 hours.',
            ]);
        }
        // ── Bot Protection 2: Rate Limiting ──
        // Max 3 submissions per IP per 10 minutes
        $key = 'contact-form:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return response()->json([
                'success' => false,
                'message' => "Too many submissions. Please wait {$seconds} seconds before trying again.",
            ], 429);
        }
        RateLimiter::hit($key, 600); // 10 minutes decay

        // ── Validation ──
        $validated = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:255'],
            'email'   => ['required', 'email:rfc,dns', 'max:255'],
            'service' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $submittedAt = now()->format('d M Y, h:i A');

        try {
            // ── Email 1: Notify admin ──
            Mail::to('shaheryarbhatti881@gmail.com')->send(
                new ContactFormMail(
                    clientName:    $validated['name'],
                    clientEmail:   $validated['email'],
                    clientService: $validated['service'] ?? 'Not specified',
                    clientMessage: $validated['message'] ?? '',
                    submittedAt:   $submittedAt,
                )
            );

            // ── Email 2: Confirm to customer ──
            Mail::to($validated['email'])->send(
                new CustomerConfirmationMail(
                    clientName:    $validated['name'],
                    clientService: $validated['service'] ?? 'Not specified',
                    clientMessage: $validated['message'] ?? '',
                    submittedAt:   $submittedAt,
                )
            );

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent! Check your email for confirmation. We\'ll get back to you within 24 hours.',
            ]);

        } catch (\Exception $e) {
            Log::error('Contact email failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again or email us directly at support@vexsonic.com',
            ], 500);
        }
    }
}
