@extends('layouts.app')
@section('title', 'Produk - PT. Teknokrat Zamrud Integrasi')

@section('content')

<!-- HEADER SECTION -->
<section class="section-padding bg-main" style="padding-bottom: 2rem;">
  <div class="container" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 2rem;">
    <div style="max-width: 600px;">
      <h1 class="text-primary" style="font-size: 2.5rem; margin-bottom: 1rem;">Katalog Produk Utama</h1>
      <p style="color: var(--text-gray); font-size: 0.95rem;">Telusuri pilihan peralatan berkinerja tinggi, furnitur ergonomis, dan pasokan profesional kami yang dikurasi khusus untuk perusahaan modern.</p>
    </div>
    <div style="flex: 1; max-width: 350px;">
      <div style="position: relative;">
        <span style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--text-light);"><i class="ph ph-magnifying-glass"></i></span>
        <input type="text" placeholder="Cari produk..." style="width: 100%; padding: 0.8rem 1rem 0.8rem 2.5rem; border: 1px solid var(--border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 0.95rem; background: var(--bg-main);">
      </div>
    </div>
  </div>
</section>

<!-- PRODUCTS LAYOUT -->
<section class="section-padding bg-main" style="padding-top: 1rem;">
  <div class="container" style="display: grid; grid-template-columns: 250px 1fr; gap: 3rem;">
    
    <!-- SIDEBAR -->
    <aside>
      <div style="margin-bottom: 2rem;">
        <h4 style="font-size: 0.8rem; letter-spacing: 1px; color: var(--primary); text-transform: uppercase; margin-bottom: 1rem;">KATEGORI (KBLI)</h4>
        <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.5rem;">
          <li>
            <a href="#" style="display: flex; align-items: center; gap: 1rem; padding: 0.8rem 1rem; background: #e0f2fe; color: #0284c7; border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
              <span style="font-size:1.2rem;"><i class="ph ph-desktop"></i></span> Komputer & Perlengkapan
            </a>
          </li>
          <li>
            <a href="#" style="display: flex; align-items: center; gap: 1rem; padding: 0.8rem 1rem; color: var(--text-gray); border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
              <span style="font-size:1.2rem;"><i class="ph ph-speaker-high"></i></span> Peralatan Audio & Video
            </a>
          </li>
          <li>
            <a href="#" style="display: flex; align-items: center; gap: 1rem; padding: 0.8rem 1rem; color: var(--text-gray); border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
              <span style="font-size:1.2rem;"><i class="ph ph-armchair"></i></span> Furnitur
            </a>
          </li>
          <li>
            <a href="#" style="display: flex; align-items: center; gap: 1rem; padding: 0.8rem 1rem; color: var(--text-gray); border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
              <span style="font-size:1.2rem;"><i class="ph ph-pencil-line"></i></span> Alat Tulis & Gambar
            </a>
          </li>
          <li>
            <a href="#" style="display: flex; align-items: center; gap: 1rem; padding: 0.8rem 1rem; color: var(--text-gray); border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
              <span style="font-size:1.2rem;"><i class="ph ph-handshake"></i></span> Agen / Perdagangan Kontrak
            </a>
          </li>
        </ul>
      </div>
      
    </aside>

    <!-- GRID -->
    <div>
      <div class="grid-3" style="gap: 1.5rem;">
        
        <!-- Laptop -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden; position:relative;">
          <a href="{{ url('/produk-detail') }}">
            <span style="position:absolute; top:1rem; left:1rem; background:var(--secondary); color:#fff; font-size:0.65rem; padding:0.2rem 0.6rem; border-radius:4px; font-weight:700; z-index:10;">FEATURED</span>
            <img src="/images/design/laptop_precision.png" alt="Laptop" style="width:100%; height:200px; object-fit:cover;">
          </a>
          <div style="padding:1.5rem;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47411</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;"><a href="{{ url('/produk-detail') }}">PC Desktop & Laptop</a></h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Perdagangan eceran komputer, peralatan, aksesoris dan perlengkapannya.</p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <a href="{{ url('/produk-detail') }}" style="font-size:0.85rem; color:var(--primary); font-weight:600;">Lihat Detail &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Amp -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden;">
          <img src="/images/design/amplifier_audio.png" alt="Amp" style="width:100%; height:200px; object-fit:cover;">
          <div style="padding:1.5rem;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47420</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;">Sistem Audio & Video</h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Radio, Televisi, Video Player, Audio Amplifier, dan Peralatan Stereo.</p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <a href="#" style="font-size:0.85rem; color:var(--primary); font-weight:600;">Lihat Detail &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Chair -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden;">
          <img src="/images/design/ergonomic_chair.png" alt="Chair" style="width:100%; height:200px; object-fit:cover;">
          <div style="padding:1.5rem;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47591</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;">Furnitur Kantor</h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Meja & Kursi, Lemari, Rak Buku, Bufet untuk kebutuhan kantor dan komersial.</p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <a href="#" style="font-size:0.85rem; color:var(--primary); font-weight:600;">Lihat Detail &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Stationery -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden;">
          <img src="/images/design/stationery_tools.png" alt="Tools" style="width:100%; height:200px; object-fit:cover;">
          <div style="padding:1.5rem;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47611</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;">Alat Tulis & Gambar</h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Pensil, pulpen, papan tulis, kertas, penggaris, dan alat gambar lengkap.</p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <a href="#" style="font-size:0.85rem; color:var(--primary); font-weight:600;">Lihat Detail &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Server -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden;">
          <a href="{{ url('/produk-detail') }}">
            <img src="/images/design/titan_server_main.png" alt="Server" style="width:100%; height:200px; object-fit:cover;">
          </a>
          <div style="padding:1.5rem;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47411</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;"><a href="{{ url('/produk-detail') }}">Server Enterprise</a></h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Perangkat infrastruktur jaringan, switch, router, dan server data center.</p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <a href="{{ url('/produk-detail') }}" style="font-size:0.85rem; color:var(--primary); font-weight:600;">Lihat Detail &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Agent Services -->
        <div class="card" style="padding:0; border-radius:12px; overflow:hidden; background:#e0f2fe; border:none; display:flex; flex-direction:column;">
          <div style="height:200px; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:1rem;">
            <div style="font-size:3rem; color:#0284c7;"><i class="ph ph-handshake"></i></div>
            <div style="font-size:0.9rem; color:var(--text-gray); font-weight:500;">Agen Makelar</div>
          </div>
          <div style="padding:1.5rem; background:var(--bg-white); flex:1; display:flex; flex-direction:column;">
            <p style="font-size:0.7rem; color:var(--primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem; font-weight:600;">KBLI 47920</p>
            <h4 style="margin-bottom:0.5rem; font-size:1.1rem;">Perdagangan Atas Dasar Kontrak</h4>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-bottom:1.5rem; line-height:1.5;">Menerima komisi dari perdagangan eceran atas nama pihak lain.</p>
            <div style="margin-top:auto;">
              <a href="{{ url('/kontak') }}" class="btn-primary" style="width:100%; font-size:0.85rem;">Konsultasi</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section style="padding: 2rem 0 5rem; background: var(--bg-main);">
  <div class="container">
    <div class="cta-banner" style="margin:0;">
      <div>
        <h2>Solusi Pengadaan Kustom</h2>
        <p style="margin-top:0.5rem;">Mencari peralatan spesifik atau layanan kontrak berskala besar?<br>Tim kami siap membantu menyusun penawaran terbaik untuk organisasi Anda.</p>
      </div>
      <div>
        <a href="{{ url('/kontak') }}" class="btn-primary" style="background:#fff; color:var(--text-dark);">Hubungi Agen Kami</a>
      </div>
    </div>
  </div>
</section>

@endsection
