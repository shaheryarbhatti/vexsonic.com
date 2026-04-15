import './bootstrap';

const modal = document.querySelector('[data-demo-modal]');
const openButtons = document.querySelectorAll('[data-open-demo]');
const closeButtons = document.querySelectorAll('[data-close-demo]');
const dateSelect = document.querySelector('[data-date-select]');
const slotSelect = document.querySelector('[data-slot-select]');
const dayCards = document.querySelectorAll('[data-day-card]');
const scheduleElement = document.getElementById('schedule-data');

let schedule = [];

if (scheduleElement) {
    schedule = JSON.parse(scheduleElement.textContent);
}

const renderSlots = (selectedDate) => {
    if (!slotSelect) {
        return;
    }

    const selectedDay = schedule.find((day) => day.date === selectedDate);
    const availableSlots = selectedDay ? selectedDay.slots.filter((slot) => !slot.is_booked) : [];

    slotSelect.innerHTML = '';

    if (!availableSlots.length) {
        const option = document.createElement('option');
        option.value = '';
        option.textContent = 'No available slot for this day';
        slotSelect.appendChild(option);
        return;
    }

    availableSlots.forEach((slot) => {
        const option = document.createElement('option');
        option.value = slot.time;
        option.textContent = slot.time;
        slotSelect.appendChild(option);
    });
};

const highlightDay = (selectedDate) => {
    dayCards.forEach((card) => {
        card.classList.toggle('is-active', card.dataset.date === selectedDate);
    });
};

const openModal = () => {
    if (!modal) {
        return;
    }

    modal.classList.add('is-open');
    document.body.style.overflow = 'hidden';
};

const closeModal = () => {
    if (!modal) {
        return;
    }

    modal.classList.remove('is-open');
    document.body.style.overflow = '';
};

openButtons.forEach((button) => {
    button.addEventListener('click', openModal);
});

closeButtons.forEach((button) => {
    button.addEventListener('click', closeModal);
});

if (modal) {
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeModal();
    }
});

if (dateSelect) {
    renderSlots(dateSelect.value);
    highlightDay(dateSelect.value);

    dateSelect.addEventListener('change', (event) => {
        renderSlots(event.target.value);
        highlightDay(event.target.value);
    });
}

dayCards.forEach((card) => {
    card.addEventListener('click', () => {
        if (!dateSelect) {
            return;
        }

        dateSelect.value = card.dataset.date;
        renderSlots(card.dataset.date);
        highlightDay(card.dataset.date);
    });
});

const revealItems = document.querySelectorAll('.reveal');

if (revealItems.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    revealItems.forEach((item) => observer.observe(item));
}

if (modal?.classList.contains('is-open')) {
    document.body.style.overflow = 'hidden';
}
