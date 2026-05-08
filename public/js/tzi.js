document.addEventListener('DOMContentLoaded', () => {

  /* ── NAVBAR SCROLL ── */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  });

  /* ── MOBILE MENU ── */
  const toggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  if (toggle && mobileMenu) {
    toggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
    });
  }

  /* ── SCROLL REVEAL ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger').forEach(el => {
    observer.observe(el);
  });

  /* ── COUNTER ANIMATION ── */
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.counted) {
        entry.target.dataset.counted = true;
        animateCounter(entry.target);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

  function animateCounter(el) {
    const target = parseFloat(el.dataset.target);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const duration = 2000;
    const start = performance.now();
    const isDecimal = String(target).includes('.');

    const step = (timestamp) => {
      const elapsed = timestamp - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = target * eased;
      el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.floor(current).toLocaleString('id-ID')) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  /* ── HERO TYPING EFFECT ── */
  const typingEl = document.getElementById('typingText');
  if (typingEl) {
    const texts = ['Elektronika', 'Kelistrikan', 'Teknologi Informatika', 'Audio Video', 'Furnitur & ATK'];
    let ti = 0, ci = 0, deleting = false;

    function type() {
      const current = texts[ti];
      if (!deleting) {
        typingEl.textContent = current.slice(0, ci + 1);
        ci++;
        if (ci === current.length) { deleting = true; setTimeout(type, 1800); return; }
      } else {
        typingEl.textContent = current.slice(0, ci - 1);
        ci--;
        if (ci === 0) { deleting = false; ti = (ti + 1) % texts.length; }
      }
      setTimeout(type, deleting ? 60 : 100);
    }
    type();
  }

  /* ── SMOOTH SCROLL ── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (mobileMenu) mobileMenu.classList.remove('open');
      }
    });
  });

  /* ── PARTICLE DOTS ── */
  const canvas = document.getElementById('heroParticles');
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let W = canvas.width = window.innerWidth;
    let H = canvas.height = window.innerHeight;
    const particles = Array.from({ length: 60 }, () => ({
      x: Math.random() * W, y: Math.random() * H,
      vx: (Math.random() - 0.5) * 0.4, vy: (Math.random() - 0.5) * 0.4,
      r: Math.random() * 2 + 1, alpha: Math.random() * 0.5 + 0.1
    }));

    window.addEventListener('resize', () => {
      W = canvas.width = window.innerWidth;
      H = canvas.height = window.innerHeight;
    });

    function drawParticles() {
      ctx.clearRect(0, 0, W, H);
      particles.forEach(p => {
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0 || p.x > W) p.vx *= -1;
        if (p.y < 0 || p.y > H) p.vy *= -1;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(0,180,166,${p.alpha})`;
        ctx.fill();
      });
      // draw lines between close particles
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < 120) {
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.strokeStyle = `rgba(0,180,166,${0.15 * (1 - dist/120)})`;
            ctx.lineWidth = 0.8;
            ctx.stroke();
          }
        }
      }
      requestAnimationFrame(drawParticles);
    }
    drawParticles();
  }
});
