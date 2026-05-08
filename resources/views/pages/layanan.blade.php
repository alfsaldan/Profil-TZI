@extends('layouts.app')
@section('title', 'Layanan - PT. Teknokrat Zamrud Integrasi')

@section('content')

<!-- HERO SECTION -->
<section class="section-padding bg-main">
  <div class="container hero-split">
    <div class="hero-content">
      <div class="tag" style="margin-bottom: 1.5rem;">
        <span class="tag-icon"><i class="ph ph-lightning"></i></span> KUALITAS & KEANDALAN
      </div>
      <h1 class="text-primary">Layanan Integrasi<br>Berdasarkan KBLI</h1>
      <p>Layanan spesialis instalasi dan pemeliharaan yang didukung oleh sertifikasi industri dan teknisi berpengalaman.</p>
      
      <div style="display: flex; gap: 2rem; margin-top: 2rem;">
        <div style="display: flex; align-items: center; gap: 1rem;">
          <div class="fc-icon" style="background:var(--bg-white); box-shadow:var(--shadow-sm);"><i class="ph ph-medal"></i></div>
          <div style="line-height:1.2;">
            <h5 style="font-size:0.95rem; margin-bottom:0.1rem;">Sertifikasi Resmi</h5>
            <span style="font-size:0.8rem; color:var(--text-gray);">KBLI Terdaftar</span>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 1rem;">
          <div class="fc-icon" style="background:var(--bg-white); box-shadow:var(--shadow-sm);"><i class="ph ph-link"></i></div>
          <div style="line-height:1.2;">
            <h5 style="font-size:0.95rem; margin-bottom:0.1rem;">Integrasi Penuh</h5>
            <span style="font-size:0.8rem; color:var(--text-gray);">Ekosistem Terpadu</span>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-image-box" style="height:400px; border-radius: 24px;">
      <img src="/images/design/electronics_chip.png" alt="Tech Chip" style="border-radius: 24px;">
    </div>
  </div>
</section>

<!-- CORE CATEGORIES -->
<section class="section-padding bg-white">
  <div class="container" style="text-align: center;">
    <h2 class="section-title">3 Layanan Jasa Utama</h2>
    <p class="section-desc" style="margin: 0 auto 3rem;">Kami memberikan pelayanan terbaik berdasarkan standar KBLI yang terdaftar secara resmi.</p>
    
    <div class="grid-3" style="text-align: left;">
      <!-- Electronic -->
      <div class="card" style="border-radius: 16px;">
        <div class="card-icon" style="background:var(--bg-dark); color:#fff; border-radius:50%;"><i class="ph ph-plug"></i></div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
          <h3 style="margin:0;">Instalasi<br>Elektronika</h3>
          <span class="tag" style="background:var(--bg-main); color:var(--text-gray);">KBLI 43213</span>
        </div>
        <p style="margin-bottom: 2rem;">Pemasangan instalasi elektronika pada bangunan gedung hunian maupun non-hunian.</p>
        
        <ul style="list-style:none; padding:0; display:flex; flex-direction:column; gap:0.75rem;">
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-camera"></i></span> Close Circuit TV (CCTV) & Alarm
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-speaker-high"></i></span> Sound System & Comm. Management
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-clock"></i></span> Access Control & Scoring Board
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-airplane"></i></span> Fasilitas Bandara & Telekomunikasi
          </li>
        </ul>
      </div>

      <!-- HVAC -->
      <div class="card" style="border-radius: 16px;">
        <div class="card-icon" style="background:var(--primary); color:#fff; border-radius:50%;"><i class="ph ph-snowflake"></i></div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
          <h3 style="margin:0;">Pendingin &<br>Ventilasi</h3>
          <span class="tag" style="background:var(--bg-main); color:var(--text-gray);">KBLI 43224</span>
        </div>
        <p style="margin-bottom: 2rem;">Pemasangan dan perawatan untuk bangunan hunian & non-hunian.</p>
        
        <ul style="list-style:none; padding:0; display:flex; flex-direction:column; gap:0.75rem;">
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-buildings"></i></span> Air Conditioner (AC)
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-factory"></i></span> Lemari Pendingin
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-wind"></i></span> Ventilasi Udara
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-wrench"></i></span> Pipa, Ducting, Lembaran Logam
          </li>
        </ul>
      </div>

      <!-- Interior -->
      <div class="card" style="border-radius: 16px;">
        <div class="card-icon" style="background:#4b5563; color:#fff; border-radius:50%;"><i class="ph ph-armchair"></i></div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
          <h3 style="margin:0;">Dekorasi<br>Interior</h3>
          <span class="tag" style="background:var(--bg-main); color:var(--text-gray);">KBLI 43304</span>
        </div>
        <p style="margin-bottom: 2rem;">Pengerjaan dekorasi interior bangunan gedung hunian, non-hunian, dan sipil.</p>
        
        <ul style="list-style:none; padding:0; display:flex; flex-direction:column; gap:0.75rem;">
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-ruler"></i></span> Pelapisan dinding, lantai, plafon
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-chair"></i></span> Kusen, jendela, instalasi furnitur
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-paint-brush"></i></span> Wallpaper, cat, keramik, granit
          </li>
          <li style="display:flex; gap:0.75rem; align-items:flex-start; background:var(--bg-main); padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; font-weight:500;">
            <span style="color:var(--primary); font-size:1.1rem;"><i class="ph ph-frame-corners"></i></span> Kaca, cermin, kitchen set
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- PROJECT SHOWCASE -->
<section class="section-padding bg-main">
  <div class="container">
    <div class="grid-2">
      <!-- Left large card -->
      <div class="card card-image-top card-dark" style="position:relative; height:100%; min-height:400px; border-radius:24px;">
        <img src="/images/design/hvac_installation.png" alt="Industrial" style="height:100%; width:100%; object-fit:cover; border-radius:24px; opacity:0.7;">
        <div style="position:absolute; bottom:0; left:0; width:100%; padding:2rem; background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); border-bottom-left-radius:24px; border-bottom-right-radius:24px;">
          <p style="font-size:0.8rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; margin-bottom:0.5rem; color:#fff;">INTEGRASI INDUSTRI</p>
          <h3 style="color:#fff;">Infrastruktur Berkelanjutan</h3>
        </div>
      </div>
      
      <!-- Right side grid -->
      <div style="display:flex; flex-direction:column; gap:2rem;">
        <div class="card card-image-top card-dark" style="position:relative; height:200px; border-radius:24px;">
          <img src="/images/design/modern_interior_office.png" alt="Interior" style="height:100%; width:100%; object-fit:cover; border-radius:24px; opacity:0.8;">
          <div style="position:absolute; bottom:0; left:0; width:100%; padding:1.5rem; background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); border-bottom-left-radius:24px; border-bottom-right-radius:24px;">
            <h3 style="color:#fff;">Interior Komersial</h3>
          </div>
        </div>
        
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem; flex:1;">
          <div class="card" style="background:#0050a8; color:#fff; border:none; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; border-radius:24px;">
            <div style="font-size:2.5rem; margin-bottom:0.5rem;"><i class="ph ph-clock"></i></div>
            <h3 style="color:#fff; font-size:2rem; margin-bottom:0;">99.9%</h3>
            <p style="color:rgba(255,255,255,0.8); font-size:0.9rem;">Uptime Layanan</p>
          </div>
          <div class="card card-blue" style="display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; border-radius:24px;">
            <div style="font-size:2.5rem; margin-bottom:0.5rem;"><i class="ph ph-users"></i></div>
            <h3 style="color:#fff; font-size:2rem; margin-bottom:0;">50+</h3>
            <p style="color:rgba(255,255,255,0.8); font-size:0.9rem;">Teknisi Ahli</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-padding bg-white">
  <div class="container">
    <div class="cta-banner" style="background: var(--primary);">
      <div style="max-width:500px;">
        <h2>Siap memulai proyek Anda?</h2>
        <p style="margin-top:1rem;">Hubungi para ahli kami untuk konsultasi komprehensif dan solusi yang disesuaikan dengan kebutuhan infrastruktur Anda.</p>
      </div>
      <div style="display:flex; gap:1rem;">
        <a href="{{ url('/kontak') }}" class="btn-primary" style="background:#fff; color:var(--text-dark);">Hubungi Kami</a>
        <a href="{{ url('/produk') }}" class="btn-secondary" style="background:transparent; color:#fff; border-color:rgba(255,255,255,0.5);">Lihat Produk</a>
      </div>
    </div>
  </div>
</section>

@endsection
