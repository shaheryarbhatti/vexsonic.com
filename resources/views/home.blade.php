<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VexSonic – Innovative Software Solutions</title>
  <meta name="description" content="VexSonic builds websites, mobile apps, and SAP ABAP systems for businesses worldwide." />
  <link rel="icon" type="image/png" href="{{ asset('images/vexsonicfavicon.png') }}" />
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/vexsonicfavicon.png') }}" />
  <link rel="apple-touch-icon" href="{{ asset('images/vexsonicfavicon.png') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXET1DYLT9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XXET1DYLT9');
    </script>
</head>
<body>

<!-- ══════════════════════════════════════
     NAVBAR
══════════════════════════════════════ -->
<nav class="navbar" id="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <span class="logo-text"><span class="logo-vex">vex</span><span class="logo-sonic">sonic</span></span>
      <span class="logo-tagline">INNOVATIVE SOFTWARE SOLUTIONS</span>
    </a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#services">Services</a></li>
      <li><a href="#why-us">Why Us</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#contact" class="btn btn-nav">Get a Quote</a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- ══════════════════════════════════════
     HERO
══════════════════════════════════════ -->
<section class="hero" id="home">
  <div class="hero-bg">
    <canvas id="particleCanvas" class="particle-canvas"></canvas>
    <div class="hero-gradient"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
    <div class="orb orb-4"></div>
    <div class="grid-overlay"></div>
  </div>

  <div class="hero-inner container">

    <!-- LEFT CONTENT -->
    <div class="hero-content">

      <div class="hero-badge reveal">
        <span class="badge-dot"></span>
        <span>Available for New Projects</span>
      </div>

      <h1 class="hero-title reveal">
        We Build<br />
        <span class="typed-line">
          <span class="gradient-text" id="typed-text"></span><span class="cursor-blink">|</span>
        </span>
      </h1>

      <p class="hero-subtitle reveal">
        We turn your ideas into real digital products. From <strong>websites</strong>
        to <strong>mobile apps</strong> and <strong>SAP systems</strong> — we build
        things that work and help your business grow.
      </p>

      <!-- Service pills -->
      <div class="hero-pills reveal">
        <div class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
          Web Development
        </div>
        <div class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
          Mobile Apps
        </div>
        <div class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          SAP ABAP
        </div>
      </div>

      <div class="hero-cta reveal">
        <a href="#services" class="btn btn-primary btn-hero">
          <span>Explore Services</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="#contact" class="btn btn-ghost btn-hero">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
          Let's Talk
        </a>
      </div>

      <!-- Stats row -->
      <div class="hero-stats reveal">
        <div class="stat">
          <div class="stat-num-wrap"><span class="stat-num" data-target="150">0</span><span>+</span></div>
          <p>Projects Done</p>
        </div>
        <div class="stat-divider"></div>
        <div class="stat">
          <div class="stat-num-wrap"><span class="stat-num" data-target="80">0</span><span>+</span></div>
          <p>Happy Clients</p>
        </div>
        <div class="stat-divider"></div>
        <div class="stat">
          <div class="stat-num-wrap"><span class="stat-num" data-target="11">0</span><span>+</span></div>
          <p>Years Experience</p>
        </div>
        <div class="stat-divider"></div>
        <div class="stat">
          <div class="stat-num-wrap"><span class="stat-num" data-target="98">0</span><span>%</span></div>
          <p>Satisfaction Rate</p>
        </div>
      </div>

    </div>

    <!-- RIGHT VISUAL -->
    <div class="hero-visual">

      <!-- Glow behind everything -->
      <div class="hv-glow"></div>

      <!-- Central code editor card -->
      <div class="hv-code-card">
        <div class="hv-code-header">
          <div class="hv-dots">
            <span class="hv-dot hv-red"></span>
            <span class="hv-dot hv-yellow"></span>
            <span class="hv-dot hv-green"></span>
          </div>
          <span class="hv-filename">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            vexsonic.dev
          </span>
          <div class="hv-live-badge">
            <span class="hv-live-dot"></span> Live
          </div>
        </div>
        <div class="hv-code-body">
          <div class="hv-line"><span class="hv-kw">const</span> <span class="hv-var">services</span> <span class="hv-op">=</span> <span class="hv-bracket">{</span></div>
          <div class="hv-line hv-indent"><span class="hv-key">web</span><span class="hv-op">:</span> <span class="hv-str">"Full-Stack Development"</span><span class="hv-op">,</span></div>
          <div class="hv-line hv-indent"><span class="hv-key">mobile</span><span class="hv-op">:</span> <span class="hv-str">"iOS &amp; Android Apps"</span><span class="hv-op">,</span></div>
          <div class="hv-line hv-indent"><span class="hv-key">sap</span><span class="hv-op">:</span> <span class="hv-str">"ABAP &amp; Fiori"</span><span class="hv-op">,</span></div>
          <div class="hv-line hv-indent"><span class="hv-key">quality</span><span class="hv-op">:</span> <span class="hv-num">100</span> <span class="hv-cmt">// always</span></div>
          <div class="hv-line"><span class="hv-bracket">}</span></div>
          <div class="hv-line hv-blank"></div>
          <div class="hv-line"><span class="hv-kw">function</span> <span class="hv-fn">buildYourDream</span><span class="hv-bracket">(</span><span class="hv-param">idea</span><span class="hv-bracket">)</span> <span class="hv-bracket">{</span></div>
          <div class="hv-line hv-indent"><span class="hv-kw">return</span> <span class="hv-var">vexsonic</span><span class="hv-op">.</span><span class="hv-fn">deliver</span><span class="hv-bracket">(</span><span class="hv-param">idea</span><span class="hv-bracket">)</span><span class="hv-op">;</span></div>
          <div class="hv-line"><span class="hv-bracket">}</span></div>
          <div class="hv-cursor-line">
            <span class="hv-cmt">// </span><span class="hv-typing" id="heroTyping"></span><span class="hv-code-cursor">|</span>
          </div>
        </div>
        <!-- Bottom bar -->
        <div class="hv-code-footer">
          <span>JavaScript</span>
          <span>UTF-8</span>
          <span class="hv-footer-status">
            <span class="hv-status-dot"></span> Ready to build
          </span>
        </div>
      </div>

      <!-- Floating service badges -->
      <div class="hv-badge hv-badge-web">
        <div class="hv-badge-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
        </div>
        <div class="hv-badge-info">
          <strong>Web Development</strong>
          <span>Laravel · React · Vue</span>
        </div>
      </div>

      <div class="hv-badge hv-badge-mobile">
        <div class="hv-badge-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <div class="hv-badge-info">
          <strong>Mobile Apps</strong>
          <span>Flutter · React Native</span>
        </div>
      </div>

      <div class="hv-badge hv-badge-sap">
        <div class="hv-badge-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <div class="hv-badge-info">
          <strong>SAP ABAP</strong>
          <span>Fiori · S/4HANA</span>
        </div>
      </div>

      <!-- Stats card -->
      <div class="hv-stats-card">
        <div class="hv-stat-row">
          <span class="hv-stat-num">150<span>+</span></span>
          <span class="hv-stat-label">Projects</span>
        </div>
        <div class="hv-stat-divider"></div>
        <div class="hv-stat-row">
          <span class="hv-stat-num">98<span>%</span></span>
          <span class="hv-stat-label">Satisfaction</span>
        </div>
      </div>

    </div>
  </div>

  <div class="hero-scroll-hint">
    <div class="scroll-mouse"><div class="scroll-wheel"></div></div>
    <span>Scroll to explore</span>
  </div>
</section>

<!-- ══════════════════════════════════════
     MARQUEE
══════════════════════════════════════ -->
<div class="marquee-strip">
  <div class="marquee-track">
    <span>Website Development</span><span class="dot">&#9670;</span>
    <span>Mobile Applications</span><span class="dot">&#9670;</span>
    <span>SAP ABAP</span><span class="dot">&#9670;</span>
    <span>UI/UX Design</span><span class="dot">&#9670;</span>
    <span>ERP Integration</span><span class="dot">&#9670;</span>
    <span>API Development</span><span class="dot">&#9670;</span>
    <span>Cloud Solutions</span><span class="dot">&#9670;</span>
    <span>Website Development</span><span class="dot">&#9670;</span>
    <span>Mobile Applications</span><span class="dot">&#9670;</span>
    <span>SAP ABAP</span><span class="dot">&#9670;</span>
    <span>UI/UX Design</span><span class="dot">&#9670;</span>
    <span>ERP Integration</span><span class="dot">&#9670;</span>
    <span>API Development</span><span class="dot">&#9670;</span>
    <span>Cloud Solutions</span><span class="dot">&#9670;</span>
  </div>
</div>

<!-- ══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header">
      <span class="section-tag reveal">Our Services</span>
      <h2 class="section-title reveal">Everything You Need to <span class="gradient-text">Succeed Digitally</span></h2>
      <p class="section-subtitle reveal">Three powerful pillars designed to transform your business from the ground up.</p>
    </div>

    <!-- Service 1 – Web -->
    <div class="service-row reveal-card">
      <div class="service-img">
        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=700&q=80" alt="Website Development" />
        <div class="service-img-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
          Web Dev
        </div>
      </div>
      <div class="service-info">
        <div class="service-num-tag teal">01</div>
        <h3>Website Development</h3>
        <p>We build fast, good-looking websites that fit your business. Whether it's a simple landing page or a full web app — we make sure it looks great and works even better.</p>
        <div class="service-tags">
          <span>React.js</span><span>Next.js</span><span>Vue.js</span><span>Laravel</span><span>Node.js</span>
        </div>
        <ul class="service-features">
          <li><span class="check">&#10003;</span> Fully Responsive & Mobile-First</li>
          <li><span class="check">&#10003;</span> SEO & Core Web Vitals Optimized</li>
          <li><span class="check">&#10003;</span> E-Commerce & CMS Integration</li>
          <li><span class="check">&#10003;</span> Lightning-Fast Load Times</li>
        </ul>
        <a href="#contact" class="btn btn-primary">Get Started <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- Service 2 – Mobile -->
    <div class="service-row reverse reveal-card">
      <div class="service-img">
        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=700&q=80" alt="Mobile App Development" />
        <div class="service-img-badge orange">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
          Mobile
        </div>
      </div>
      <div class="service-info">
        <div class="service-num-tag orange">02</div>
        <h3>Mobile App Development</h3>
        <p>We build mobile apps for iOS and Android that are easy to use and work smoothly. From simple apps to feature-rich platforms — we handle everything from design to launch.</p>
        <div class="service-tags">
          <span>Flutter</span><span>React Native</span><span>iOS</span><span>Android</span><span>Firebase</span>
        </div>
        <ul class="service-features">
          <li><span class="check">&#10003;</span> iOS & Android Native Apps</li>
          <li><span class="check">&#10003;</span> Offline Support & Push Notifications</li>
          <li><span class="check">&#10003;</span> App Store & Play Store Deployment</li>
          <li><span class="check">&#10003;</span> Real-Time & Social Features</li>
        </ul>
        <a href="#contact" class="btn btn-primary">Get Started <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- Service 3 – SAP -->
    <div class="service-row reveal-card">
      <div class="service-img">
        <img src="{{ asset('images/sapabap.png') }}" alt="SAP ABAP Development" />
        <div class="service-img-badge green">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          SAP ABAP
        </div>
      </div>
      <div class="service-info">
        <div class="service-num-tag green">03</div>
        <h3>SAP ABAP Development</h3>
        <p>We work on SAP ABAP development and help businesses get more out of their SAP systems. Whether it's custom reports, system connections, or fixing slow processes — we get it done.</p>
        <div class="service-tags">
          <span>SAP ABAP</span><span>S/4HANA</span><span>Fiori</span><span>BAPI</span><span>RFC</span>
        </div>
        <ul class="service-features">
          <li><span class="check">&#10003;</span> Custom Reports & Smart Forms</li>
          <li><span class="check">&#10003;</span> User Exits & BADIs</li>
          <li><span class="check">&#10003;</span> RFC / BAPI / IDoc Integration</li>
          <li><span class="check">&#10003;</span> SAP S/4HANA & Fiori Apps</li>
        </ul>
        <a href="#contact" class="btn btn-primary">Get Started <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     STATS BANNER
══════════════════════════════════════ -->
<section class="stats-banner">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal">
        <div class="stat-icon">&#128187;</div>
        <div class="stat-num-big" data-target="150">0</div>
        <div class="stat-plus">+</div>
        <p>Projects Delivered</p>
      </div>
      <div class="stat-item reveal">
        <div class="stat-icon">&#128522;</div>
        <div class="stat-num-big" data-target="80">0</div>
        <div class="stat-plus">+</div>
        <p>Happy Clients</p>
      </div>
      <div class="stat-item reveal">
        <div class="stat-icon">&#9733;</div>
        <div class="stat-num-big" data-target="98">0</div>
        <div class="stat-plus">%</div>
        <p>Satisfaction Rate</p>
      </div>
      <div class="stat-item reveal">
        <div class="stat-icon">&#128197;</div>
        <div class="stat-num-big" data-target="11">0</div>
        <div class="stat-plus">+</div>
        <p>Years Experience</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════
     WHY US
══════════════════════════════════════ -->
<section class="why-us" id="why-us">
  <div class="container">
    <div class="why-inner">
      <div class="why-left">
        <span class="section-tag reveal">Why Choose Us</span>
        <h2 class="section-title reveal">Built on Trust,<br /><span class="gradient-text">Delivered with Excellence</span></h2>
        <p class="why-desc reveal">We don't just write code and disappear. We work with you closely, understand what you need, and build something that actually helps your business.</p>
        <div class="why-features">
          <div class="wf-item reveal">
            <div class="wf-icon-wrap teal-bg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
              <h4>Fast Delivery</h4>
              <p>We work in small steps and keep moving so your project gets done on time.</p>
            </div>
          </div>
          <div class="wf-item reveal">
            <div class="wf-icon-wrap orange-bg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div>
              <h4>Secure &amp; Scalable</h4>
              <p>We build things the right way — secure, clean, and ready to handle more as your business grows.</p>
            </div>
          </div>
          <div class="wf-item reveal">
            <div class="wf-icon-wrap green-bg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <div>
              <h4>24/7 Support</h4>
              <p>Our team is always on-call to keep your systems running smoothly.</p>
            </div>
          </div>
          <div class="wf-item reveal">
            <div class="wf-icon-wrap purple-bg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </div>
            <div>
              <h4>Transparent Process</h4>
              <p>Regular updates, clear communication, and no hidden surprises.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="why-right reveal">
        <div class="why-img-stack">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" alt="Team collaboration" class="why-img-main" />
          <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&q=80" alt="Team meeting" class="why-img-secondary" />
          <div class="why-badge-card">
            <div class="why-badge-icon">&#127942;</div>
            <div>
              <strong>Award Winning</strong>
              <span>Top Dev Agency 2024</span>
            </div>
          </div>
          <div class="why-clients-card">
            <div class="client-avatars">
              <img src="https://i.pravatar.cc/32?img=1" alt="c1" />
              <img src="https://i.pravatar.cc/32?img=2" alt="c2" />
              <img src="https://i.pravatar.cc/32?img=3" alt="c3" />
              <img src="https://i.pravatar.cc/32?img=4" alt="c4" />
            </div>
            <div>
              <strong>80+ Happy Clients</strong>
              <div class="mini-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════ -->
<section class="testimonials">
  <div class="container">
    <div class="section-header">
      <span class="section-tag reveal">Testimonials</span>
      <h2 class="section-title reveal">What Our <span class="gradient-text">Clients Say</span></h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card reveal-card">
        <div class="testi-quote">&#8220;</div>
        <p>VexSonic built our e-commerce platform from scratch. Sales increased by 40% in the first two months. Their attention to detail and work ethic is unmatched.</p>
        <div class="testi-author">
          <div class="testi-avatar av-teal">AK</div>
          <div><strong>Ahmed Khan</strong><span>CEO, RetailPro</span></div>
          <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>
      <div class="testi-card featured-testi reveal-card">
        <div class="testi-quote">&#8220;</div>
        <p>The SAP work they did saved our team over 200 hours every month. They really know what they're doing and we still work with them today.</p>
        <div class="testi-author">
          <div class="testi-avatar av-orange">SR</div>
          <div><strong>Sara Rauf</strong><span>IT Manager, LogiCorp</span></div>
          <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>
      <div class="testi-card reveal-card">
        <div class="testi-quote">&#8220;</div>
        <p>Our Flutter app launched on time and on budget. The UX is beautiful, the code is clean, and the team was a pleasure to work with throughout the project.</p>
        <div class="testi-author">
          <div class="testi-avatar av-green">ZM</div>
          <div><strong>Zain Malik</strong><span>Founder, HealthTrack</span></div>
          <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     PROCESS
══════════════════════════════════════ -->
<section class="process" id="process">
  <div class="container">
    <div class="section-header">
      <span class="section-tag reveal">How We Work</span>
      <h2 class="section-title reveal">Our <span class="gradient-text">Proven Process</span></h2>
      <p class="section-subtitle reveal">A clear, collaborative workflow that keeps you informed at every step.</p>
    </div>
    <div class="process-grid">
      <div class="process-card reveal-card">
        <div class="process-img">
          <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80" alt="Discovery" />
        </div>
        <div class="ps-number-big">01</div>
        <h4>Discovery &amp; Planning</h4>
        <p>We sit down and understand exactly what you need before anything starts. No guessing.</p>
      </div>
      <div class="process-card reveal-card">
        <div class="process-img">
          <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=400&q=80" alt="Design" />
        </div>
        <div class="ps-number-big">02</div>
        <h4>Design &amp; Prototype</h4>
        <p>We show you exactly how it will look and work before we write a single line of code. You approve it, then we build it.</p>
      </div>
      <div class="process-card reveal-card">
        <div class="process-img">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&q=80" alt="Development" />
        </div>
        <div class="ps-number-big">03</div>
        <h4>Development &amp; Testing</h4>
        <p>We write clean code, test everything properly, and keep you updated as we go.</p>
      </div>
      <div class="process-card reveal-card">
        <div class="process-img">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80" alt="Launch" />
        </div>
        <div class="ps-number-big">04</div>
        <h4>Launch &amp; Support</h4>
        <p>We go live with you, make sure everything runs fine, and stay available if anything needs fixing.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     TECH STACK
══════════════════════════════════════ -->
<section class="tech-stack">
  <div class="container">
    <div class="section-header">
      <span class="section-tag reveal">Technologies</span>
      <h2 class="section-title reveal">Powered by <span class="gradient-text">Modern Tech</span></h2>
      <p class="section-subtitle reveal">We use the right tools for the job — modern, well-tested, and trusted by developers worldwide.</p>
    </div>
    <div class="tech-grid">
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#61dafb">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M12 9.861A2.139 2.139 0 1 0 12 14.14A2.139 2.139 0 1 0 12 9.861zM6.008 16.255l-.472-.12C2.018 15.246 0 13.737 0 11.996s2.018-3.25 5.536-4.139l.472-.12.12.472c.329 1.279.nail.679 1.198 1.07l.347.35-.35.347c-.379.373-.58.86-.58 1.372 0 .51.2 1 .58 1.374l.35.346-.347.35c-.352.347-.552.688-.598 1.056l-.12.476zm.888-5.15c-2.926.697-4.691 1.86-4.691 2.891 0 1.029 1.765 2.194 4.691 2.891l.34-1.367c-1.2-.277-2.254-.68-3.096-1.183l-.497-.29.502-.282c.85-.503 1.901-.904 3.096-1.18z"/></svg>
        </div>
        <span>React</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#fff">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M11.572 0c-.176 0-.31.001-.358.007a19.76 19.76 0 0 1-.364.033C7.443.346 4.25 2.185 2.228 5.012a11.875 11.875 0 0 0-2.119 5.243c-.096.659-.108.854-.108 1.747s.012 1.089.108 1.748c.652 4.506 3.859 8.292 8.209 9.695.779.25 1.6.422 2.534.525.363.04 1.935.04 2.299 0 1.611-.178 2.977-.577 4.323-1.264.207-.106.247-.134.219-.158-.02-.013-.9-1.193-1.955-2.62l-1.919-2.592-2.404-3.558a338.739 338.739 0 0 0-2.422-3.556c-.009-.002-.018 1.579-.023 3.51-.007 3.38-.01 3.515-.052 3.595a.426.426 0 0 1-.206.214c-.075.037-.14.044-.495.044H7.81l-.108-.068a.438.438 0 0 1-.157-.171l-.05-.106.006-4.703.007-4.705.072-.092a.645.645 0 0 1 .174-.143c.096-.047.134-.051.54-.051.478 0 .558.018.682.154.035.038 1.337 1.999 2.895 4.361a10760.433 10760.433 0 0 0 4.735 7.17l1.9 2.879.096-.063a12.317 12.317 0 0 0 2.466-2.163 11.944 11.944 0 0 0 2.824-6.134c.096-.66.108-.854.108-1.748 0-.893-.012-1.088-.108-1.747-.652-4.506-3.859-8.292-8.208-9.695a12.597 12.597 0 0 0-2.499-.523A33.119 33.119 0 0 0 11.573 0z"/></svg>
        </div>
        <span>Next.js</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#54c5f8">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M14.314 0L2.3 12 6 15.7 21.684 0h-7.37zm.014 11.072L7.857 17.53l6.47 6.47H21.7L15.47 17.5l6.46-6.428h-7.6zM0 13.116l4.214 4.214L0 21.544v-8.428z"/></svg>
        </div>
        <span>Flutter</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#61dafb">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M12 9.861A2.139 2.139 0 1 0 12 14.14A2.139 2.139 0 1 0 12 9.861zM6.008 16.255l-.472-.12C2.018 15.246 0 13.737 0 11.996s2.018-3.25 5.536-4.139l.472-.12.12.472c.329 1.279.679 2.477 1.07 3.486l.347.35-.35.347c-.379.373-.58.86-.58 1.372 0 .51.2 1 .58 1.374l.35.346-.347.35c-.352.347-.552.688-.598 1.056l-.12.476z"/></svg>
        </div>
        <span>React Native</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#339933">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M11.998 24C5.377 24 0 18.623 0 12S5.377 0 11.998 0C18.623 0 24 5.377 24 12s-5.377 12-12.002 12zM6.539 10.699c.391-.006.759.211.95.562l.02.04c.182.317.182.706.003 1.025l-.023.043c-.168.297-.428.5-.72.583v1.285c0 .082-.067.149-.149.149H5.754a.149.149 0 0 1-.149-.149v-1.285c-.531-.149-.893-.665-.841-1.211.051-.546.499-.967 1.048-.967a.38.38 0 0 1 .727-.075z"/></svg>
        </div>
        <span>Node.js</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#f0921c">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M23.954 10.208l-.998-.085C22.83 9.036 20.61 0 12 0 5.373 0 0 5.373 0 12c0 6.626 5.373 12 12 12 4.473 0 8.466-2.44 10.627-6.127l-1.154-.56C19.57 20.23 15.98 22.5 12 22.5 6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5c6.61 0 9.008 7.014 9.456 8.208z"/></svg>
        </div>
        <span>SAP ABAP</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#ff2d20">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M23.642 5.43a.364.364 0 0 1 .014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 0 1-.188.326L9.93 23.949a.316.316 0 0 1-.066.027.347.347 0 0 1-.066.02.368.368 0 0 1-.087 0 .32.32 0 0 1-.086-.02.38.38 0 0 1-.065-.027L.714 18.755a.376.376 0 0 1-.188-.326V2.565a.382.382 0 0 1 .014-.1.377.377 0 0 1 .04-.093.419.419 0 0 1 .024-.045l.058-.045.013-.018L4.947.045a.378.378 0 0 1 .378 0l4.273 2.47a.389.389 0 0 1 .06.045l.011.016.058.045a.4.4 0 0 1 .025.046.435.435 0 0 1 .038.092z"/></svg>
        </div>
        <span>Laravel</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#007acc">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M1.125 0C.502 0 0 .502 0 1.125v21.75C0 23.498.502 24 1.125 24h21.75c.623 0 1.125-.502 1.125-1.125V1.125C24 .502 23.498 0 22.875 0zm17.363 9.75c.612 0 1.154.037 1.627.111a6.38 6.38 0 0 1 1.306.34v2.458a3.95 3.95 0 0 0-.643-.361 5.093 5.093 0 0 0-.717-.26 5.453 5.453 0 0 0-1.426-.2c-.3 0-.573.028-.819.086a2.1 2.1 0 0 0-.623.242c-.17.104-.3.229-.393.374a.888.888 0 0 0-.14.49c0 .196.053.373.156.529.104.156.252.304.443.444s.423.276.696.41c.273.135.582.274.926.416.47.197.892.407 1.266.628.374.222.695.473.963.753.268.279.472.598.614.957.142.359.214.776.214 1.253 0 .657-.125 1.21-.373 1.656a3.033 3.033 0 0 1-1.012 1.085 4.38 4.38 0 0 1-1.487.596c-.566.12-1.163.18-1.79.18a9.916 9.916 0 0 1-1.84-.164 5.544 5.544 0 0 1-1.512-.493v-2.63a5.033 5.033 0 0 0 3.237 1.2c.333 0 .624-.03.872-.09.249-.06.456-.144.623-.25.166-.108.29-.234.373-.38a1.023 1.023 0 0 0-.074-1.089 2.12 2.12 0 0 0-.537-.5 5.597 5.597 0 0 0-.807-.444 27.72 27.72 0 0 0-1.007-.436c-.918-.383-1.602-.852-2.053-1.405-.45-.553-.676-1.222-.676-2.005 0-.614.123-1.141.369-1.582.246-.441.58-.804 1.004-1.089a4.494 4.494 0 0 1 1.47-.629 7.536 7.536 0 0 1 1.77-.201zm-15.113.188h9.563v2.166H9.506v9.646H6.789v-9.646H3.375z"/></svg>
        </div>
        <span>TypeScript</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#47a248">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M17.193 9.555c-1.264-5.58-4.252-7.514-4.573-8.421-.235-.396-.504-.57-.574-.737-.555-1.667-.084-2.369.516-3.347l.318-.475a.424.424 0 0 0-.476-.63c-.408.117-.867.36-1.27.765-.604.584-1.167 1.405-1.52 2.387-.522 1.409-.603 2.803-.484 3.786.01.092-.04.163-.117.174-.026.005-.055.004-.085-.005-.49-.146-1.195-.635-1.527-1.22-.148-.259-.272-.633-.35-1.035a4.78 4.78 0 0 1-.04-.617.13.13 0 0 0-.215-.1 3.498 3.498 0 0 0-.418.554c-.558.965-.832 2.147-.796 3.412.037 1.218.353 2.36.912 3.275.536.881 1.278 1.536 2.056 1.828"/></svg>
        </div>
        <span>MongoDB</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#4169e1">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M23.111 0H.888A.888.888 0 0 0 0 .888v22.224A.888.888 0 0 0 .888 24h22.224A.888.888 0 0 0 24 23.112V.888A.888.888 0 0 0 23.111 0zm-5.943 18.126c-.325.3-.83.3-1.155 0L12 14.196 7.988 18.13a.817.817 0 0 1-1.155-.028.816.816 0 0 1 .028-1.155L10.87 12 6.86 7.986a.817.817 0 0 1 1.183-1.128L12 10.862l4.014-3.975a.817.817 0 0 1 1.127 1.183L13.128 12l4.013 3.986a.82.82 0 0 1-.028 1.155"/></svg>
        </div>
        <span>PostgreSQL</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#ff9900">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M.015 12.003c0 .469.029.886.086 1.249l6.45-5.443a6.65 6.65 0 0 0-.068.961c0 1.618.514 3.11 1.384 4.316L1.6 17.77C.594 16.202.015 14.172.015 12.003zm23.973 0c0 2.139-.56 4.14-1.542 5.687l-6.241-4.68a6.64 6.64 0 0 0 1.385-4.316c0-.337-.024-.668-.07-.992l6.396-5.398c.045.462.072.942.072 1.699zM12 5.338c-1.658 0-3.184.557-4.4 1.482L1.518 2.265C3.418.853 5.714 0 8.206 0c2.473 0 4.754.837 6.648 2.221l-6.098 5.148A6.658 6.658 0 0 0 12 5.338zm.012 13.324a6.639 6.639 0 0 0 4.372-1.645l6.24 4.679a12.017 12.017 0 0 1-10.61 2.289 11.97 11.97 0 0 1-6.168-3.927l6.166-5.2v3.804z"/></svg>
        </div>
        <span>AWS</span>
      </div>
      <div class="tech-card reveal">
        <div class="tech-icon" style="color:#2496ed">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor"><path d="M13.983 11.078h2.119a.186.186 0 0 0 .186-.185V9.006a.186.186 0 0 0-.186-.186h-2.119a.185.185 0 0 0-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 0 0 .186-.186V3.574a.186.186 0 0 0-.186-.185h-2.118a.185.185 0 0 0-.185.185v1.888c0 .103.082.185.185.186m0 2.716h2.118a.187.187 0 0 0 .186-.186V6.29a.186.186 0 0 0-.186-.185h-2.118a.185.185 0 0 0-.185.185v1.887c0 .102.082.185.185.186"/></svg>
        </div>
        <span>Docker</span>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CTA BANNER
══════════════════════════════════════ -->
<section class="cta-banner">
  <div class="cta-bg">
    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1600&q=80" alt="Team working" />
    <div class="cta-overlay"></div>
  </div>
  <div class="container cta-inner reveal">
    <h2>Ready to Build Your <span class="gradient-text">Next Big Thing?</span></h2>
    <p>Join 80+ satisfied clients who trusted VexSonic to bring their vision to life.</p>
    <div class="cta-btns">
      <a href="#contact" class="btn btn-primary btn-lg">Start Your Project</a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CONTACT
══════════════════════════════════════ -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-inner">
      <div class="contact-left">
        <span class="section-tag reveal">Get In Touch</span>
        <h2 class="section-title reveal">Let's Build <span class="gradient-text">Together</span></h2>
        <p class="reveal">Tell us about your project and we'll get back to you within 24 hours with a free consultation and project roadmap.</p>
        <div class="contact-info">
          <div class="ci-item reveal">
            <div class="ci-icon-wrap teal-bg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div><strong>Email Us</strong><span>support@vexsonic.com</span></div>
          </div>
          <div class="ci-item reveal">
            <div class="ci-icon-wrap orange-bg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div><strong>Location</strong><span>Pakistan — Remote Worldwide</span></div>
          </div>
          <div class="ci-item reveal">
            <div class="ci-icon-wrap green-bg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div><strong>Response Time</strong><span>Within 24 Hours</span></div>
          </div>
        </div>
      </div>

      <div class="contact-right reveal">
        <div class="contact-form-wrap">
          <h3>Send Us a Message</h3>
          <p>Free consultation. No commitments.</p>
          <form class="contact-form" id="contactForm" action="{{ route('contact.store') }}" method="POST">
            @csrf
            {{-- Honeypot: bots fill this, humans don't --}}
            <input type="text" name="website" value="" style="display:none !important;position:absolute;left:-9999px;" tabindex="-1" autocomplete="off" />
            <div class="form-row">
              <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="name" placeholder="John Doe" required />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="john@example.com" required />
              </div>
            </div>
            <div class="form-group">
              <label>Service Needed</label>
              <select name="service">
                <option value="">Select a service...</option>
                <option>Website Development</option>
                <option>Mobile App Development</option>
                <option>SAP ABAP Development</option>
                <option>Multiple Services</option>
              </select>
            </div>
            <div class="form-group">
              <label>Project Details</label>
              <textarea name="message" placeholder="Tell us about your project, goals, and timeline..." rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-full">
              <span>Send Message</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </button>
            <div class="form-success" id="formSuccess"></div>
            <div class="form-error"   id="formError"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     FOOTER
══════════════════════════════════════ -->
<footer class="footer">
  <!-- Glow accent top -->
  <div class="footer-glow"></div>

  <div class="container">

    <!-- Top section: brand + links -->
    <div class="footer-top">
      <!-- Brand col -->
      <div class="footer-brand">
        <a href="#home" class="logo footer-logo">
          <span class="logo-text"><span class="logo-vex">vex</span><span class="logo-sonic">sonic</span></span>
        </a>
        <p class="footer-tagline">INNOVATIVE SOFTWARE SOLUTIONS</p>
        <p class="footer-desc">We build websites, mobile apps, and SAP systems that actually work for your business. Simple as that.</p>
        <!-- Social -->
        <div class="footer-social">
          <a href="#" class="fs-btn" title="LinkedIn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="#" class="fs-btn" title="GitHub">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
          </a>
          <a href="#" class="fs-btn" title="Twitter">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg>
          </a>
        </div>
      </div>

      <!-- Nav cols -->
      <div class="footer-nav">
        <div class="fn-col">
          <h5>Services</h5>
          <ul>
            <li><a href="#services">Website Development</a></li>
            <li><a href="#services">Mobile App Development</a></li>
            <li><a href="#services">SAP ABAP</a></li>
          </ul>
        </div>
        <div class="fn-col">
          <h5>Company</h5>
          <ul>
            <li><a href="#why-us">About Us</a></li>
            <li><a href="#process">Our Process</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="fn-col">
          <h5>Technologies</h5>
          <ul>
            <li><a href="#">React &amp; Next.js</a></li>
            <li><a href="#">Flutter &amp; React Native</a></li>
            <li><a href="#">SAP S/4HANA</a></li>
            <li><a href="#">Node.js &amp; Laravel</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Contact strip -->
    <div class="footer-contact-strip">
      <div class="fcs-item">
        <div class="fcs-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <span>support@vexsonic.com</span>
      </div>
      <div class="fcs-item">
        <div class="fcs-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <span>Pakistan — Remote Worldwide</span>
      </div>
      <div class="fcs-item">
        <div class="fcs-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <span>Response within 24 Hours</span>
      </div>
      <a href="#contact" class="btn btn-primary btn-footer-cta">Get a Free Quote</a>
    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <p>&#169; {{ date('Y') }} <span class="fb-brand"><span class="logo-vex">vex</span><span class="logo-sonic">sonic</span></span>. All rights reserved.</p>
      <p class="fb-right">Crafted with &#10084;&#65039; in Pakistan &nbsp;|&nbsp; Serving clients worldwide</p>
    </div>

  </div>
</footer>

<a href="#home" class="scroll-top" id="scrollTop">&#8679;</a>

<script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>
