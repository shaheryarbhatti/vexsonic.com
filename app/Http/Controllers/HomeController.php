<?php

namespace App\Http\Controllers;

use App\Models\DemoBooking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $projects = [
            [
                'name' => 'Analytic Solutions',
                'description' => 'Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.',
                'image' => 'images/analytic_solutions_1776190352196.png',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            ],
            [
                'name' => 'Firewall Advance',
                'description' => 'Librarian indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.',
                'image' => 'images/firewall_advance_1776190586558.png',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
            ],
            [
                'name' => 'Risk Management',
                'description' => 'Technic indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.',
                'image' => 'images/risk_management_1776190748774.png',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>',
            ],
        ];

        // Gather PHP Timezones for the dropdown
        $timezones = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

        return view('home', [
            'projects' => $projects,
            'timezones' => $timezones,
            'successMessage' => $request->session()->get('success'),
        ]);
    }

    public function getSlots(Request $request)
    {
        $tz = $request->input('timezone', 'UTC');
        
        $slots = [];
        $businessTz = 'Asia/Karachi';
        $startPkt = Carbon::now($businessTz)->startOfDay();

        for ($i = 0; $i < 21; $i++) {
            $currentDay = $startPkt->copy()->addDays($i);
            
            // Skip weekends (Saturday and Sunday)
            if ($currentDay->isWeekend()) {
                continue;
            }

            $startTime = $currentDay->copy()->setTime(9, 0); // 9 AM PKT
            $endTime = $currentDay->copy()->setTime(17, 0);  // 5 PM PKT

            while ($startTime < $endTime) {
                $slotUtc = $startTime->copy()->utc();
                
                // Keep only future slots
                if ($slotUtc > now()) {
                    $slots[] = $slotUtc;
                }

                $startTime->addMinutes(30);
            }
        }

        // Fetch booked slots from the db
        $bookedUtc = DemoBooking::pluck('scheduled_at')
            ->map(fn($date) => Carbon::parse($date)->utc()->format('Y-m-d H:i:s'))
            ->toArray();

        $response = [];
        foreach ($slots as $utcSlot) {
            $userTime = $utcSlot->copy()->setTimezone($tz);
            $userDateStr = $userTime->format('Y-m-d');
            
            if (!isset($response[$userDateStr])) {
                $response[$userDateStr] = [];
            }

            $isBooked = in_array($utcSlot->format('Y-m-d H:i:s'), $bookedUtc);

            $response[$userDateStr][] = [
                'utc_time' => $utcSlot->format('Y-m-d H:i:s'),
                'user_time' => $userTime->format('h:i A'),
                'is_booked' => $isBooked
            ];
        }

        return response()->json($response);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'timezone' => ['required', 'timezone'],
            'scheduled_at' => ['required', 'date'],
        ]);

        $utcTime = Carbon::parse($validated['scheduled_at'], 'UTC');

        if ($utcTime <= now()) {
            return back()->withErrors(['slot' => 'Cannot book a slot in the past.'])->withInput();
        }

        $exists = DemoBooking::where('scheduled_at', $utcTime->format('Y-m-d H:i:s'))->exists();
        if ($exists) {
            return back()->withErrors(['slot' => 'This slot is already booked.'])->withInput();
        }

        DemoBooking::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'scheduled_at' => $utcTime,
            'timezone' => $validated['timezone'],
        ]);

        return redirect()
            ->route('home')
            ->with('success', 'Your demo request has been booked successfully.');
    }
}
