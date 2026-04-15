@extends('layouts.site')

@section('title', 'Admin Dashboard | Vexsonic')

@section('content')
<div class="page-shell" style="padding: 40px;">
    <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
        <h1 style="font-family: var(--font-display); font-size: 2.5rem; color: #17367c;">Demo Bookings Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background: #e11d48; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: bold; cursor: pointer;">Logout</button>
        </form>
    </header>

    <div style="background: white; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); overflow: hidden;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                <tr>
                    <th style="padding: 16px 20px; color: #475569;">Client</th>
                    <th style="padding: 16px 20px; color: #475569;">Contact</th>
                    <th style="padding: 16px 20px; color: #475569;">Customer Timezone</th>
                    <th style="padding: 16px 20px; color: #475569;">Schedule (Customer Time)</th>
                    <th style="padding: 16px 20px; color: #475569; background: #e0f2fe;">Schedule (Pakistan Time)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 16px 20px;">
                            <strong>{{ $booking->full_name }}</strong>
                        </td>
                        <td style="padding: 16px 20px; color: #64748b;">
                            {{ $booking->email }}<br>
                            {{ $booking->phone }}
                        </td>
                        <td style="padding: 16px 20px;">
                            <span style="background: #f1f5f9; padding: 4px 8px; border-radius: 4px; font-size: 0.85rem;">{{ $booking->timezone }}</span>
                        </td>
                        <td style="padding: 16px 20px; color: #0f172a; font-weight: bold;">
                            {{ \Carbon\Carbon::parse($booking->scheduled_at)->setTimezone($booking->timezone)->format('M d, Y h:i A') }}
                        </td>
                        <td style="padding: 16px 20px; background: #f0f9ff; color: #0369a1; font-weight: bold;">
                            {{ \Carbon\Carbon::parse($booking->scheduled_at)->setTimezone('Asia/Karachi')->format('M d, Y h:i A') }} (PKT)
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 40px; text-align: center; color: #64748b;">No demo bookings found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
