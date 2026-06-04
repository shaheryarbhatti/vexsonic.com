<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function contact(Request $request): RedirectResponse
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'service' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        // TODO: send email / save to DB as needed
        // Mail::to('shaheryarbhatti881@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->route('home')
            ->with('contact_success', 'Your message has been sent! We\'ll get back to you within 24 hours.');
    }
}
