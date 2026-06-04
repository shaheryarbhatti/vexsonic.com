// ══════════════════════════════════════
// THEME AUTO-ROTATOR — changes every 10s
// ══════════════════════════════════════
const themes = [
  'theme-rose-amber',
  'theme-teal-orange',
  'theme-purple-cyan',
  'theme-emerald-violet',
  'theme-indigo-gold',
  'theme-sky-pink',
  'theme-midnight-blue',
  'theme-carbon-neon',
  'theme-navy-coral',
  'theme-slate-gold',
];

let currentThemeIndex = 0;

function applyTheme(cls) {
  themes.forEach(t => {
    document.body.classList.remove(t);
    document.documentElement.classList.remove(t);
  });
  document.body.classList.add(cls);
  document.documentElement.classList.add(cls);
}

// Start with rose-amber on load
applyTheme(themes[currentThemeIndex]);

// Auto-rotate every 10 seconds
setInterval(() => {
  currentThemeIndex = (currentThemeIndex + 1) % themes.length;
  applyTheme(themes[currentThemeIndex]);
}, 3000);


// ── CODE CARD TYPING ANIMATION ──
window.addEventListener('DOMContentLoaded', () => {
  const el = document.getElementById('heroTyping');
  if (!el) return;
  const lines = [
    'Your idea, our code...',
    'Building your future...',
    'Turning vision to reality...',
    'Let\'s create together...'
  ];
  let li = 0, ci = 0, del = false;
  function codeType() {
    const cur = lines[li];
    if (del) {
      ci--;
      el.textContent = cur.slice(0, ci);
      if (ci === 0) { del = false; li = (li + 1) % lines.length; setTimeout(codeType, 600); return; }
      setTimeout(codeType, 35);
    } else {
      ci++;
      el.textContent = cur.slice(0, ci);
      if (ci === cur.length) { del = true; setTimeout(codeType, 2500); return; }
      setTimeout(codeType, 70);
    }
  }
  setTimeout(codeType, 1500);
});

// ── NAVBAR ──
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 50);
  document.getElementById('scrollTop').classList.toggle('visible', window.scrollY > 500);
});

// ── HAMBURGER ──
document.getElementById('hamburger').addEventListener('click', () => {
  document.getElementById('navLinks').classList.toggle('open');
});
document.querySelectorAll('.nav-links a').forEach(a =>
  a.addEventListener('click', () => document.getElementById('navLinks').classList.remove('open'))
);

// ── TYPED TEXT ──
const phrases = ['Websites.', 'Mobile Apps.', 'SAP Solutions.', 'Digital Products.'];
let phraseIdx = 0, charIdx = 0, deleting = false;
const typedEl = document.getElementById('typed-text');
function typeLoop() {
  const current = phrases[phraseIdx];
  if (deleting) {
    charIdx--;
    typedEl.textContent = current.slice(0, charIdx);
    if (charIdx === 0) { deleting = false; phraseIdx = (phraseIdx + 1) % phrases.length; setTimeout(typeLoop, 500); return; }
    setTimeout(typeLoop, 45);
  } else {
    charIdx++;
    typedEl.textContent = current.slice(0, charIdx);
    if (charIdx === current.length) { deleting = true; setTimeout(typeLoop, 2200); return; }
    setTimeout(typeLoop, 85);
  }
}
setTimeout(typeLoop, 900);

// ── COUNTER ANIMATION ──
function animateCounter(el) {
  const target = parseInt(el.dataset.target);
  if (isNaN(target)) return;
  let current = 0;
  const duration = 1800;
  const step = target / (duration / 16);
  const timer = setInterval(() => {
    current = Math.min(current + step, target);
    el.textContent = Math.floor(current);
    if (current >= target) { el.textContent = target; clearInterval(timer); }
  }, 16);
}

// ── REVEAL OBSERVER ──
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const siblings = el.parentElement ? Array.from(el.parentElement.children) : [];
      const idx = siblings.indexOf(el);
      const delay = el.classList.contains('reveal-card') ? idx * 130 : idx * 70;
      setTimeout(() => el.classList.add('visible'), Math.min(delay, 400));
      revealObserver.unobserve(el);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal, .reveal-card').forEach(el => revealObserver.observe(el));

// ── HERO STATS COUNTER ──
const heroStatsObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('[data-target]').forEach(animateCounter);
      heroStatsObs.unobserve(e.target);
    }
  });
}, { threshold: 0.4 });
document.querySelectorAll('.hero-stats').forEach(el => heroStatsObs.observe(el));

// ── STATS BANNER COUNTER ──
const statBigObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('.stat-num-big').forEach(animateCounter);
      statBigObs.unobserve(e.target);
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.stats-grid').forEach(el => statBigObs.observe(el));

// ── PARTICLE CANVAS ──
const canvas = document.getElementById('particleCanvas');
if (canvas) {
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];

  function resizeCanvas() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', () => { resizeCanvas(); initParticles(); });

  function initParticles() {
    particles = [];
    const count = Math.min(Math.floor((W * H) / 18000), 80);
    const colors = ['rgba(26,122,154,', 'rgba(240,146,28,', 'rgba(26,154,184,'];
    for (let i = 0; i < count; i++) {
      particles.push({
        x: Math.random() * W, y: Math.random() * H,
        r: Math.random() * 1.8 + 0.4,
        vx: (Math.random() - 0.5) * 0.35, vy: (Math.random() - 0.5) * 0.35,
        color: colors[Math.floor(Math.random() * colors.length)],
        alpha: Math.random() * 0.5 + 0.1
      });
    }
  }
  initParticles();

  let mouse = { x: -9999, y: -9999 };
  window.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });

  function draw() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach((p, i) => {
      const dx = p.x - mouse.x, dy = p.y - mouse.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 100 && dist > 0) { p.x += (dx / dist) * 1.5; p.y += (dy / dist) * 1.5; }

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = p.color + p.alpha + ')';
      ctx.fill();

      p.x += p.vx; p.y += p.vy;
      if (p.x < 0) p.x = W; if (p.x > W) p.x = 0;
      if (p.y < 0) p.y = H; if (p.y > H) p.y = 0;

      for (let j = i + 1; j < particles.length; j++) {
        const dx2 = p.x - particles[j].x, dy2 = p.y - particles[j].y;
        const d2 = Math.sqrt(dx2 * dx2 + dy2 * dy2);
        if (d2 < 110) {
          ctx.beginPath();
          ctx.moveTo(p.x, p.y); ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = 'rgba(26,122,154,' + (0.07 * (1 - d2 / 110)) + ')';
          ctx.lineWidth = 0.7; ctx.stroke();
        }
      }
    });
    requestAnimationFrame(draw);
  }
  draw();
}

// ── 3D TILT on cards ──
document.querySelectorAll('.testi-card, .process-card, .work-card, .stat-item').forEach(card => {
  card.addEventListener('mousemove', e => {
    const r = card.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width - 0.5;
    const y = (e.clientY - r.top) / r.height - 0.5;
    card.style.transform = 'translateY(-6px) rotateX(' + (-y * 6) + 'deg) rotateY(' + (x * 6) + 'deg)';
    card.style.transition = 'transform 0.08s ease';
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
    card.style.transition = 'all 0.45s ease';
  });
});

// ── CONTACT FORM loading state ──
const form = document.getElementById('contactForm');
if (form) {
  form.addEventListener('submit', function() {
    const btn = this.querySelector('button[type="submit"]');
    if (btn) {
      btn.disabled = true;
      btn.innerHTML = '<span>Sending...</span>';
    }
  });
}
