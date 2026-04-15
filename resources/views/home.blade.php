@extends('layouts.site')

@section('title', 'Vexsonic | Software Company')
@section('meta_description', 'Vexsonic showcases software projects and accepts demo bookings with visible slot availability.')

@section('content')
    <div class="page-shell">
        <div class="bg-glow glow-left"></div>
        <div class="bg-glow glow-right"></div>

        <header class="topbar">
    <div class="container topbar-inner" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px; padding: 15px 0;">

        <a href="{{ route('home') }}" class="logo-mark" style="flex-shrink: 0;">
            <img src="{{ asset('images/logo.png') }}" alt="Vexsonic Logo" style="height: 40px; width: auto; display: block; object-fit: contain;">
        </a>

        <div class="header-contact-info flex-shrink-0 w-full lg:w-auto order-3 lg:order-2" style="display: flex; gap: 15px; align-items: center; justify-content: center;">
            <a href="mailto:support@vexsonic.com" style="display: flex; align-items: center; gap: 6px; text-decoration: none; color: #17367c; font-weight: 500; font-size: 0.85rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f39221;"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <span>support@vexsonic.com</span>
            </a>
            <a href="tel:+923315146546" style="display: flex; align-items: center; gap: 6px; text-decoration: none; color: #17367c; font-weight: 500; font-size: 0.85rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f39221;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span>+92 331 5146546</span>
            </a>
        </div>

        <button type="button" class="demo-button lg:order-3" data-open-demo style="flex-shrink: 0;">
            Book a Demo
        </button>

    </div>
</header>

        <main class="container">
            <section class="hero">
                <div class="hero-copy reveal">
                    <span class="hero-kicker">Software company for modern business systems</span>
                    <h1 class="hero-title">
                        <span class="title-line title-line-1">We craft software</span>
                        <span class="title-line title-line-2">that helps companies</span>
                        <span class="title-line title-line-3">run smarter.</span>
                    </h1>
                    <p class="hero-text">Vexsonic presents business software with a clean, confident style. Explore our core products below and book a live demo to discuss a custom system for your company.</p>
                </div>
            </section>

            <section class="projects-grid">
                @foreach ($projects as $project)
                    <article class="new-card-box reveal">
                        <div class="card-image-wrap">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}" class="card-image">
                        </div>
                        <div class="card-stripe">
                            <div class="stripe-icon">
                                {!! $project['icon'] !!}
                            </div>
                            <div class="stripe-title">
                                <h3>{{ $project['name'] }}</h3>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>{{ $project['description'] }}</p>
                            <button type="button" class="card-read-more" data-open-demo>
                                <span>READ MORE</span>
                                <span class="read-more-line"></span>
                            </button>
                        </div>
                    </article>
                @endforeach
            </section>

            @if ($successMessage)
                <section class="flash-success reveal is-visible">
                    {{ $successMessage }}
                </section>
            @endif
        </main>
    </div>

    <div class="modal-shell {{ $errors->any() ? 'is-open' : '' }}" data-demo-modal>
        <div class="modal-backdrop" data-close-demo></div>
        <div class="modal-card">
            <button type="button" class="modal-close" data-close-demo aria-label="Close demo form">×</button>

            <div class="modal-grid">
                <div class="modal-copy">
                    <span class="hero-kicker">Book your live walkthrough</span>
                    <h2>Pick a date from the calendar.</h2>
                    <p>Select your time zone and click on an available date to see 30-minute time slots.</p>

                    <label class="field" style="margin-bottom: 20px;">
                        <span>Your Timezone</span>
                        <select id="tz-select" name="timezone" style="margin-top: 8px; border-radius: 8px; border: 1px solid #ccc; padding: 10px; width: 100%;">
                            @foreach ($timezones as $tz)
                                <option value="{{ $tz }}" {{ $tz === 'UTC' ? 'selected' : '' }}>{{ $tz }}</option>
                            @endforeach
                        </select>
                    </label>

                    <div class="calendar-wrapper" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                            <button type="button" id="prev-month" style="background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #17367c;">&lt;</button>
                            <span id="month-label" style="font-weight: bold; font-size: 1.1rem; color: #17367c;"></span>
                            <button type="button" id="next-month" style="background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #17367c;">&gt;</button>
                        </div>
                        <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 4px; text-align: center; font-weight: bold; font-size: 0.8rem; color: #64748b; margin-bottom: 8px;">
                            <div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
                        </div>
                        <div id="calendar-grid" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 4px; text-align: center;">
                            <!-- Populated by JS -->
                        </div>
                    </div>
                </div>

                <div class="modal-form-wrap">
                    <div id="slots-area" style="background: #f8fafc; border-radius: 12px; padding: 16px; margin-bottom: 20px; border: 1px solid #e2e8f0;">
                        <h3 id="slots-title" style="font-size: 1rem; color: #0f172a; margin-bottom: 12px; font-weight: bold;">Select a date to view slots</h3>
                        <div id="slots-list" style="display: flex; flex-wrap: wrap; gap: 8px; max-height: 180px; overflow-y: auto;">
                            <!-- Populated by JS -->
                        </div>
                    </div>

                    <form method="POST" action="{{ route('book-demo') }}" class="demo-form" id="booking-form">
                        @csrf
                        <input type="hidden" name="timezone" id="hidden-tz" value="UTC">
                        <input type="hidden" name="scheduled_at" id="hidden-scheduled-at" value="">

                        <label class="field">
                            <span>Selected Time Slot</span>
                            <div id="selected-slot-display" style="padding: 12px; background: #edf3fb; border-radius: 8px; color: #17367c; font-weight: bold; border: 1px solid #c2d5f2; min-height: 48px; display: block; font-size: 0.95rem; line-height: 1.5;">
                                No slot selected
                            </div>
                            @error('scheduled_at')
                                <small class="error-text">{{ $message }}</small>
                            @enderror
                            @error('slot')
                                <small class="error-text">{{ $message }}</small>
                            @enderror
                        </label>

                        <label class="field" style="margin-top: 10px;">
                            <span>Full name</span>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required>
                        </label>

                        <label class="field">
                            <span>Email</span>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                        </label>

                        <label class="field">
                            <span>Phone</span>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone" required>
                        </label>

                        <button type="submit" class="submit-button" id="submit-btn" disabled style="opacity: 0.5;">Confirm demo booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const tzSelect = document.getElementById('tz-select');
            const hiddenTz = document.getElementById('hidden-tz');
            const hiddenScheduledAt = document.getElementById('hidden-scheduled-at');
            const grid = document.getElementById('calendar-grid');
            const monthLabel = document.getElementById('month-label');
            const slotsTitle = document.getElementById('slots-title');
            const slotsList = document.getElementById('slots-list');
            const displaySlot = document.getElementById('selected-slot-display');
            const submitBtn = document.getElementById('submit-btn');

            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
            let availableData = {};
            let selectedDateStr = null;

            if (!tzSelect || !grid) return;

            document.getElementById('prev-month').onclick = () => changeMonth(-1);
            document.getElementById('next-month').onclick = () => changeMonth(1);

            function changeMonth(dir) {
                currentMonth += dir;
                if (currentMonth < 0) { currentMonth = 11; currentYear--; }
                else if (currentMonth > 11) { currentMonth = 0; currentYear++; }
                renderCalendarGrid();
            }

            function fetchSlots() {
                const tz = tzSelect.value;
                hiddenTz.value = tz;
                grid.innerHTML = '<div style="grid-column: 1/-1; padding: 20px; color:#17367c;">Loading...</div>';
                slotsList.innerHTML = '';
                slotsTitle.textContent = 'Select a date to view slots';
                hiddenScheduledAt.value = '';
                displaySlot.textContent = 'No slot selected';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.5';

                fetch(`/api/available-slots?timezone=${encodeURIComponent(tz)}`)
                    .then(res => res.json())
                    .then(data => {
                        availableData = data;
                        renderCalendarGrid();
                        // Auto select first available day if it exists
                        const dates = Object.keys(data).sort();
                        if (dates.length > 0) {
                            showSlotsForDate(dates[0]);
                            const dateObj = new Date(dates[0] + 'T00:00:00');
                            currentMonth = dateObj.getMonth();
                            currentYear = dateObj.getFullYear();
                            renderCalendarGrid();
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        grid.innerHTML = '<div style="grid-column: 1/-1; color:red;">Failed to retrieve schedule.</div>';
                    });
            }

            function renderCalendarGrid() {
                grid.innerHTML = '';
                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                monthLabel.textContent = `${monthNames[currentMonth]} ${currentYear}`;

                // blank days
                for (let i = 0; i < firstDay; i++) {
                    const div = document.createElement('div');
                    grid.appendChild(div);
                }

                // actual days
                for (let d = 1; d <= daysInMonth; d++) {
                    const btn = document.createElement('button');
                    btn.type = 'button';

                    const padMonth = String(currentMonth + 1).padStart(2, '0');
                    const padDay = String(d).padStart(2, '0');
                    const fullDate = `${currentYear}-${padMonth}-${padDay}`;

                    btn.textContent = d;
                    btn.style.width = '100%';
                    btn.style.padding = '8px 0';
                    btn.style.border = 'none';
                    btn.style.borderRadius = '8px';
                    btn.style.background = 'transparent';
                    btn.style.fontWeight = 'bold';

                    if (availableData[fullDate] && availableData[fullDate].length > 0) {
                        btn.style.cursor = 'pointer';
                        btn.style.color = '#17367c';
                        btn.style.background = '#f0f9ff';

                        if (fullDate === selectedDateStr) {
                            btn.style.background = '#2563eb';
                            btn.style.color = '#fff';
                        }

                        btn.onclick = () => {
                            showSlotsForDate(fullDate);
                            renderCalendarGrid(); // Re-render to update highlight
                        };

                        btn.onmouseover = () => { if(fullDate !== selectedDateStr) btn.style.background = '#dbeafe'; };
                        btn.onmouseout = () => { if(fullDate !== selectedDateStr) btn.style.background = '#f0f9ff'; };

                    } else {
                        btn.style.color = '#cbd5e1';
                        btn.style.cursor = 'default';
                        btn.disabled = true;
                    }

                    grid.appendChild(btn);
                }
            }

            function showSlotsForDate(dateStr) {
                selectedDateStr = dateStr;
                const slotArray = availableData[dateStr] || [];

                const dayObj = new Date(dateStr + 'T00:00:00');
                const prettyDate = dayObj.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric' });
                slotsTitle.textContent = `Available on ${prettyDate}`;

                slotsList.innerHTML = '';

                if (slotArray.length === 0) {
                    slotsList.innerHTML = '<span style="color:#64748b;">No available slots.</span>';
                    return;
                }

                slotArray.forEach(slot => {
                    const sBtn = document.createElement('button');
                    sBtn.type = 'button';
                    sBtn.className = `slot-pill ${slot.is_booked ? 'is-booked' : 'is-free'}`;
                    sBtn.textContent = slot.user_time;
                    sBtn.style.padding = '8px 16px';
                    sBtn.style.borderRadius = '8px';
                    sBtn.style.border = '1px solid #cbd5e1';
                    sBtn.style.background = 'white';
                    sBtn.style.color = '#17367c';
                    sBtn.style.fontWeight = 'bold';
                    sBtn.style.cursor = 'pointer';

                    if (slot.is_booked) {
                        sBtn.disabled = true;
                        sBtn.style.opacity = '0.4';
                        sBtn.style.cursor = 'not-allowed';
                        sBtn.style.background = '#f1f5f9';
                        sBtn.style.color = '#94a3b8';
                        sBtn.style.textDecoration = 'line-through';
                    } else {
                        sBtn.onclick = () => selectSlot(slot.utc_time, slot.user_time, dateStr, sBtn);
                        sBtn.onmouseover = () => { if(sBtn.style.background !== 'rgb(219, 234, 254)') sBtn.style.background = '#f0f9ff'; sBtn.style.borderColor = '#93c5fd'; };
                        sBtn.onmouseout = () => { if(sBtn.style.background !== 'rgb(219, 234, 254)') sBtn.style.background = 'white'; sBtn.style.borderColor = '#cbd5e1'; };
                    }

                    slotsList.appendChild(sBtn);
                });

                // Clear selected slot when changing date
                hiddenScheduledAt.value = '';
                displaySlot.innerHTML = 'No slot selected';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.5';
            }

            function selectSlot(utc, userTime, dateStr, btnEl) {
                Array.from(slotsList.children).forEach(el => {
                    if(!el.disabled) {
                        el.style.background = 'white';
                        el.style.borderColor = '#cbd5e1';
                        el.style.color = '#17367c';
                    }
                });

                btnEl.style.background = '#dbeafe';
                btnEl.style.borderColor = '#2563eb';
                btnEl.style.color = '#1e3a8a';

                hiddenScheduledAt.value = utc;
                displaySlot.innerHTML = `<span style="font-size:1.05rem;">${dateStr}</span> <span style="margin: 0 4px;">at</span> <strong style="font-size:1.1rem;">${userTime}</strong><br><small style="color:#64748b; font-weight:normal; margin-top: 4px; display: inline-block;">Timezone: ${tzSelect.value}</small>`;
                displaySlot.style.background = '#e0e7ff';
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                submitBtn.style.cursor = 'pointer';
            }

            tzSelect.addEventListener('change', fetchSlots);
            fetchSlots();
        })();
    </script>
@endsection
