@extends('layouts.app')
@section('title', 'PT. Teknokrat Zamrud Integrasi - Solusi Teknologi & Integrasi Terpadu')

@section('content')

<!-- HERO SECTION -->
<section class="section-padding" style="background: linear-gradient(180deg, #f0f7ff 0%, #ffffff 100%);">
  <div class="container hero-split">
    <div class="hero-content">
      <div class="tag" style="margin-bottom: 1.5rem;">
        <span class="tag-icon" style="font-size:1.1rem;"><i class="ph ph-shield-check"></i></span> Status: Usaha Kecil - PMDN • Pekanbaru, Riau
      </div>
      <h1 class="text-primary">Solusi Teknologi &<br>Integrasi Terpadu<br>untuk Kebutuhan Anda</h1>
      <p>PT. Teknokrat Zamrud Integrasi - Penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur & Alat Tulis Kantor.</p>
      <div style="display:flex; gap:1rem; flex-wrap:wrap;">
        <a href="{{ url('/layanan') }}" class="btn-primary">Jelajahi Layanan</a>
        <a href="{{ url('/tentang') }}" class="btn-secondary">Tentang Kami</a>
      </div>
    </div>
    <div class="hero-image-box">
      <img src="/images/design/hero_server_room.png" alt="Server Room">
      <div class="floating-card">
        <div class="fc-icon"><i class="ph ph-calendar-blank"></i></div>
        <div class="fc-text">
          <h5>Maret 2023</h5>
          <p>Berdiri sejak di Pekanbaru</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ABOUT INTRO SECTION -->
<section class="section-padding bg-main">
  <div class="container hero-split">
    <!-- Image Collage -->
    <div style="position:relative; height: 450px;">
      <img src="/images/design/server_rack_cables.png" alt="Servers" style="position:absolute; top:0; left:0; width: 60%; height: 250px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
      <img src="/images/design/cinematic_office.png" alt="Office" style="position:absolute; bottom:0; right:0; width: 60%; height: 250px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md); z-index: 2;">
      <img src="/images/design/hvac_installation.png" alt="HVAC" style="position:absolute; top: 100px; right: 20%; width: 50%; height: 200px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-lg); z-index: 1;">
    </div>
    <!-- Text Content -->
    <div>
      <h2 class="section-title text-primary">Membangun Masa Depan Melalui Integrasi Terpercaya</h2>
      <p class="section-desc" style="margin-bottom: 2rem;">PT. Teknokrat Zamrud Integrasi merupakan perusahaan yang bergerak di bidang jasa penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur serta Alat Tulis Kantor.</p>
      
      <div style="display: flex; flex-direction: column; gap: 1rem;">
        <div style="display: flex; align-items: center; gap: 1rem;">
          <div class="fc-icon" style="width:30px; height:30px; border-radius:50%; background:var(--primary); color:#fff; font-size:1rem;"><i class="ph ph-check"></i></div>
          <span style="font-weight:600; font-size:0.95rem;">Tim Ahli Berpengalaman</span>
        </div>
        <div style="display: flex; align-items: center; gap: 1rem;">
          <div class="fc-icon" style="width:30px; height:30px; border-radius:50%; background:var(--primary); color:#fff; font-size:1rem;"><i class="ph ph-check"></i></div>
          <span style="font-weight:600; font-size:0.95rem;">Kualitas Produk Terjamin</span>
        </div>
        <div style="display: flex; align-items: center; gap: 1rem;">
          <div class="fc-icon" style="width:30px; height:30px; border-radius:50%; background:var(--primary); color:#fff; font-size:1rem;"><i class="ph ph-check"></i></div>
          <span style="font-weight:600; font-size:0.95rem;">Instalasi Profesional & Rapi</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES HIGHLIGHT -->
<section class="section-padding bg-main">
  <div class="container" style="text-align: center;">
    <h2 class="section-title text-primary">Layanan Unggulan Kami</h2>
    <p class="section-desc" style="margin: 0 auto 3rem;">Kami menyediakan ekosistem solusi lengkap untuk mendukung efisiensi dan estetika ruang kerja maupun komersial Anda.</p>
    
    <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 2rem; text-align: left;">
      <!-- Large Card: Electronics & IT -->
      <div class="card card-image-top card-dark" style="position:relative;">
        <img src="/images/design/electronics_chip.png" alt="Electronics" style="height: 300px; width: 100%; object-fit: cover; opacity: 0.8;">
        <div style="position:absolute; bottom:0; left:0; width:100%; padding:2rem; background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);">
          <div class="card-icon" style="margin-bottom:1rem; background:rgba(255,255,255,0.2);"><i class="ph ph-desktop"></i></div>
          <h3>Instalasi Elektronika</h3>
          <p>Pemasangan instalasi elektronika pada bangunan gedung hunian maupun non-hunian, sistem keamanan, dan teknologi informasi.</p>
        </div>
      </div>
      
      <!-- Right Column -->
      <div style="display: flex; flex-direction: column; gap: 2rem;">
        <!-- Blue Card: HVAC -->
        <div class="card card-blue" style="flex: 1; display:flex; flex-direction:column; justify-content:center;">
          <div class="card-icon" style="margin-bottom:1rem; background:rgba(255,255,255,0.2);"><i class="ph ph-snowflake"></i></div>
          <h3>Instalasi Pendingin & Ventilasi Udara</h3>
          <p>Pemasangan dan perawatan sistem tata udara untuk bangunan hunian & non-hunian.</p>
        </div>
      </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; text-align: left; margin-top: 2rem;">
      <!-- White Card: Interior -->
      <div class="card" style="display:flex; flex-direction:column; justify-content:center;">
        <div class="card-icon" style="margin-bottom:1rem; background:var(--accent); color:var(--primary);"><i class="ph ph-armchair"></i></div>
        <h3 class="text-primary">Dekorasi Interior</h3>
        <p>Pengerjaan dekorasi interior, instalasi furnitur, lantai, dan pelapisan ruangan komersial.</p>
      </div>
      
      <!-- Dark Card: Audio Video -->
      <div class="card card-image-top card-dark" style="position:relative;">
        <img src="/images/design/audio_video_studio.png" alt="Audio Video" style="height: 250px; width: 100%; object-fit: cover; opacity: 0.6;">
        <div style="position:absolute; bottom:0; left:0; width:100%; padding:2rem; background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);">
          <div class="card-icon" style="margin-bottom:1rem; background:rgba(255,255,255,0.2);"><i class="ph ph-microphone-stage"></i></div>
          <h3>Produk Perdagangan</h3>
          <p>Penyediaan Komputer, Alat Audio Video, Furnitur, dan Alat Tulis Kantor (ATK) lengkap.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- STATS BANNER -->
<section style="background-color: var(--primary); color: #fff; padding: 4rem 0;">
  <div class="container grid-4" style="text-align: center;">
    <div>
      <h2 style="font-size:3rem; color:#fff; margin-bottom:0.5rem;">2023</h2>
      <p style="font-size:0.85rem; letter-spacing:1px; opacity:0.9;">TAHUN BERDIRI</p>
    </div>
    <div>
      <h2 style="font-size:3rem; color:#fff; margin-bottom:0.5rem;">PMDN</h2>
      <p style="font-size:0.85rem; letter-spacing:1px; opacity:0.9;">STATUS PERUSAHAAN</p>
    </div>
    <div>
      <h2 style="font-size:3rem; color:#fff; margin-bottom:0.5rem;">Riau</h2>
      <p style="font-size:0.85rem; letter-spacing:1px; opacity:0.9;">PUSAT OPERASIONAL</p>
    </div>
    <div>
      <h2 style="font-size:2rem; color:#fff; margin-bottom:0.5rem; margin-top:0.5rem;">Rp 1.5 M</h2>
      <p style="font-size:0.85rem; letter-spacing:1px; opacity:0.9;">MODAL PERUSAHAAN</p>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="section-padding bg-main">
  <div class="container">
    <div class="cta-banner" style="text-align: center; flex-direction: column; padding: 4rem 2rem;">
      <h2>Siap Mengintegrasikan Kebutuhan Anda?</h2>
      <p style="margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">Konsultasikan kebutuhan teknologi dan infrastruktur Anda dengan tim ahli kami secara gratis.</p>
      <a href="{{ url('/kontak') }}" class="btn-primary" style="color:var(--primary); background:#fff;">Hubungi Kami Sekarang</a>
    </div>
  </div>
</section>


<!-- PRINCIPALS SECTION -->
<section class="section-padding bg-white" style="padding: 4rem 0; border-bottom: 1px solid var(--border); overflow: hidden;">
  <div class="container" style="text-align: center;">
    <p style="font-size: 0.85rem; font-weight: 700; color: var(--text-gray); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 2rem;">Our Principals & Partners</p>
  </div>
    
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .principals-slider {
      width: 100%;
      padding: 1.5rem 0;
    }
    
    .principals-slider .swiper-wrapper {
      transition-timing-function: linear !important; /* Smooth continuous slide */
    }

    .principals-slider .swiper-slide {
      width: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0 3rem;
    }

    .m-logo {
      height: 45px;
      object-fit: contain;
      filter: grayscale(100%);
      opacity: 0.6;
      transition: all 0.3s ease;
      user-select: none; /* Prevent selection while dragging */
      pointer-events: none; /* Let swiper handle touch */
    }

    /* Allow pointer events on slide to trigger hover */
    .principals-slider .swiper-slide {
      cursor: grab;
    }
    .principals-slider .swiper-slide:active {
      cursor: grabbing;
    }

    .principals-slider .swiper-slide:hover .m-logo {
      filter: grayscale(0%);
      opacity: 1;
      transform: scale(1.1);
    }
  </style>

  <!-- Row 1: Moving Left -->
  <div class="swiper principals-slider swiper-left">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Dell_Logo.svg" alt="Dell" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/ASUS_Logo.svg" alt="ASUS" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Cisco_logo_blue_2016.svg" alt="CISCO" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Acer_2011.svg" alt="Acer" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/HP_logo_2012.svg" alt="HP" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Lenovo_Global_Corporate_Logo.png" alt="Lenovo" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/MSI_Logo.svg" alt="MSI" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Fujitsu-Logo.svg" alt="Fujitsu" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Panasonic_logo_blue.svg" alt="Panasonic" class="m-logo"></div>
      <!-- Duplicates for initial fill -->
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Dell_Logo.svg" alt="Dell" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/ASUS_Logo.svg" alt="ASUS" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Cisco_logo_blue_2016.svg" alt="CISCO" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Acer_2011.svg" alt="Acer" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/HP_logo_2012.svg" alt="HP" class="m-logo"></div>
    </div>
  </div>

  <!-- Row 2: Moving Right -->
  <div class="swiper principals-slider swiper-right">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Daikin_Industries_logo.svg" alt="Daikin" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/LG_logo_(2015).svg" alt="LG" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Samsung_Logo.svg" alt="Samsung" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Sharp_logo.svg" alt="Sharp" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Toshiba_logo.svg" alt="Toshiba" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Carrier_Corporation_logo.svg" alt="Carrier" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Mitsubishi_logo.svg" alt="Mitsubishi" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Sony_logo.svg" alt="Sony" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Sennheiser_logo.svg" alt="Sennheiser" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Apple_logo_black.svg" alt="Apple" class="m-logo"></div>
      <!-- Duplicates for initial fill -->
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Daikin_Industries_logo.svg" alt="Daikin" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/LG_logo_(2015).svg" alt="LG" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Samsung_Logo.svg" alt="Samsung" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Sharp_logo.svg" alt="Sharp" class="m-logo"></div>
      <div class="swiper-slide"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Toshiba_logo.svg" alt="Toshiba" class="m-logo"></div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const commonOptions = {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 6000,
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: true,
        grabCursor: true,
      };

      // Top Row (Moves Right as requested)
      new Swiper('.swiper-left', {
        ...commonOptions,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
          reverseDirection: true, // Moves Right
        },
      });

      // Bottom Row (Moves Left as requested)
      new Swiper('.swiper-right', {
        ...commonOptions,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
      });
    });
  </script>
</section>

@endsection
