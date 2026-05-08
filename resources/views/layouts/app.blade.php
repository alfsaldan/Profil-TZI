<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Teknokrat Zamrud Integrasi')</title>
<meta name="description" content="@yield('meta_desc', 'Integrated Solutions for Modern Infrastructure')">
<link rel="stylesheet" href="/css/tzi.css">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/@phosphor-icons/web"></script>
@yield('head')
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="{{ url('/') }}" class="nav-logo">
      <img src="/images/logo-icon.png" alt="Logo" class="logo-img">
      <span class="logo-text">Teknokrat Zamrud Integrasi</span>
    </a>
    <ul class="nav-links" id="navLinks">
      <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active-nav' : '' }}">BERANDA</a></li>
      <li><a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'active-nav' : '' }}">TENTANG KAMI</a></li>
      <li><a href="{{ url('/layanan') }}" class="{{ request()->is('layanan') ? 'active-nav' : '' }}">LAYANAN</a></li>
      <li><a href="{{ url('/produk') }}" class="{{ request()->is('produk') ? 'active-nav' : '' }}">PRODUK</a></li>
      <li><a href="{{ url('/kontak') }}" class="{{ request()->is('kontak') ? 'active-nav' : '' }}">KONTAK</a></li>
    </ul>
    <div class="nav-actions">
      <a href="{{ url('/kontak') }}" class="btn-primary nav-quote">Minta Penawaran</a>
    </div>
    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div id="mobileMenu" class="mobile-menu">
    <ul>
      <li><a href="{{ url('/') }}">BERANDA</a></li>
      <li><a href="{{ url('/tentang') }}">TENTANG KAMI</a></li>
      <li><a href="{{ url('/layanan') }}">LAYANAN</a></li>
      <li><a href="{{ url('/produk') }}">PRODUK</a></li>
      <li><a href="{{ url('/kontak') }}">KONTAK</a></li>
    </ul>
  </div>
</nav>

<!-- CONTENT -->
<main class="main-content">
@yield('content')
</main>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="{{ url('/') }}" class="nav-logo footer-logo">
          <img src="/images/logo-icon.png" alt="Logo" class="logo-img">
          <span class="logo-text">Teknokrat<br>Zamrud Integrasi</span>
        </a>
        <p class="footer-desc">Leading technical integration and installation specialist based in Pekanbaru.</p>
        <div class="social-links">
          <a href="#" class="social-link"><i class="ph ph-globe"></i></a>
          <a href="#" class="social-link"><i class="ph ph-envelope-simple"></i></a>
          <a href="#" class="social-link"><i class="ph ph-map-pin"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="{{ url('/tentang') }}">About Us</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Our Story</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="{{ url('/layanan') }}">Electronic Installation</a></li>
          <li><a href="{{ url('/layanan') }}">HVAC Systems</a></li>
          <li><a href="{{ url('/layanan') }}">Interior Design</a></li>
          <li><a href="{{ url('/layanan') }}">IT Infrastructure</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Service Status</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© {{ date('Y') }} PT. Teknokrat Zamrud Integrasi. Founded March 2023, Pekanbaru. All rights reserved.</p>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('navToggle');
  const menu = document.getElementById('mobileMenu');
  toggle.addEventListener('click', () => {
    menu.classList.toggle('open');
  });

  window.addEventListener('scroll', () => {
    if(window.scrollY > 50) {
      document.getElementById('navbar').classList.add('scrolled');
    } else {
      document.getElementById('navbar').classList.remove('scrolled');
    }
  });
});
</script>
@yield('scripts')
</body>
</html>
