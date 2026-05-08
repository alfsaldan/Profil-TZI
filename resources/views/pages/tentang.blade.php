@extends('layouts.app')
@section('title', 'Tentang Kami - PT. Teknokrat Zamrud Integrasi')

@section('content')

<!-- HERO SECTION -->
<section class="section-padding bg-main">
  <div class="container hero-split">
    <div class="hero-content">
      <div class="tag" style="margin-bottom: 1.5rem; background: #e0f2fe; color: #0284c7;">
        <span class="tag-icon"><i class="ph ph-clock"></i></span> SEJAK MARET 2023
      </div>
      <h1 class="text-primary" style="font-size:clamp(2.2rem, 4vw, 3rem);">Profil<br>PT. Teknokrat Zamrud<br>Integrasi.</h1>
      <p style="font-size: 1rem; color: var(--text-gray); margin-top: 1.5rem; line-height: 1.8;">PT. Teknokrat Zamrud Integrasi merupakan perusahaan yang bergerak di bidang jasa penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur serta Alat Tulis Kantor.</p>
    </div>
    <div class="hero-image-box" style="height:400px; border-radius: 24px;">
      <img src="/images/design/modern_interior_office.png" alt="Office Hallway" style="border-radius: 24px;">
    </div>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="section-padding bg-white">
  <div class="container" style="text-align: center;">
    <h2 class="section-title text-primary" style="font-size: 2rem;">Filosofi Nama</h2>
    
    <div class="grid-3" style="text-align: left; margin-top: 3rem;">
      <div class="card" style="border-radius: 16px; border-color: transparent; box-shadow: var(--shadow-sm); background: #fafafa;">
        <div class="card-icon" style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:12px;"><i class="ph ph-ruler"></i></div>
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:1rem;">Teknokrat</h3>
        <p style="font-size:0.9rem;">Cendekiawan yang menguasai teknik, teknologi, dan teknometrik.</p>
      </div>
      <div class="card" style="border-radius: 16px; border-color: transparent; box-shadow: var(--shadow-sm); background: #fafafa;">
        <div class="card-icon" style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:12px;"><i class="ph ph-diamond"></i></div>
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:1rem;">Zamrud</h3>
        <p style="font-size:0.9rem;">Merujuk kepada wilayah nusantara sebagai zamrud khatulistiwa.</p>
      </div>
      <div class="card" style="border-radius: 16px; border-color: transparent; box-shadow: var(--shadow-sm); background: #fafafa;">
        <div class="card-icon" style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:12px;"><i class="ph ph-link"></i></div>
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:1rem;">Integrasi</h3>
        <p style="font-size:0.9rem;">Kebulatan tekad untuk bersama-sama menjalankan satu visi dan misi.</p>
      </div>
    </div>
  </div>
</section>

<!-- ECOSYSTEMS / TARGET MARKET -->
<section class="section-padding bg-main">
  <div class="container" style="text-align: center;">
    <h2 class="section-title text-primary" style="font-size: 2rem; margin-bottom: 3rem;">Target Market / Klien</h2>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; text-align: left;">
      <!-- Large Card -->
      <div class="card card-image-top card-dark" style="position:relative; height:100%; border-radius:24px;">
        <img src="/images/design/cinematic_office.png" alt="Office" style="height:100%; width:100%; object-fit:cover; border-radius:24px; opacity:0.6;">
        <div style="position:absolute; bottom:0; left:0; width:100%; padding:2rem; background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); border-bottom-left-radius:24px; border-bottom-right-radius:24px;">
          <div class="card-icon" style="background:transparent; color:#fff; width:32px; height:32px; margin-bottom:0.5rem;"><i class="ph ph-buildings"></i></div>
          <h3 style="color:#fff; font-size:1.5rem;">Perkantoran</h3>
          <p style="color:rgba(255,255,255,0.9); font-size:0.9rem;">Fasilitas perkantoran modern dengan infrastruktur terintegrasi.</p>
        </div>
      </div>
      
      <!-- Right Side Grid -->
      <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        <div class="card" style="border-radius: 24px; border: 1px solid var(--primary); display:flex; flex-direction:column; justify-content:center;">
          <div class="card-icon" style="background:#e0f2fe; color:#0284c7; width:40px; height:40px; border-radius:8px; margin-bottom:1rem;"><i class="ph ph-graduation-cap"></i></div>
          <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.5rem;">Sekolah & Perguruan Tinggi</h3>
          <p style="font-size:0.9rem; color:var(--text-gray);">Fasilitas pendidikan cerdas generasi masa depan.</p>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; flex: 1;">
          <div class="card" style="border-radius: 24px; background: #e0f2fe; border:none; display:flex; flex-direction:column; justify-content:center; align-items:flex-start;">
            <div style="font-size:1.5rem; margin-bottom:0.5rem;"><i class="ph ph-hospital"></i></div>
            <h4 style="color:var(--primary); font-size:1rem; margin:0;">Rumah Sakit</h4>
          </div>
          <div class="card" style="border-radius: 24px; background: #e0f2fe; border:none; display:flex; flex-direction:column; justify-content:center; align-items:flex-start;">
            <div style="font-size:1.5rem; margin-bottom:0.5rem;"><i class="ph ph-mosque"></i></div>
            <h4 style="color:var(--primary); font-size:1rem; margin:0;">Rumah Ibadah</h4>
          </div>
        </div>
      </div>
    </div>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; text-align: left; margin-top: 1.5rem;">
      <div class="card" style="border-radius: 24px; display:flex; align-items:center; gap: 1.5rem; border:none; box-shadow:var(--shadow-sm);">
        <div class="card-icon" style="background:transparent; color:#0284c7; width:40px; height:40px; margin:0;"><i class="ph ph-train"></i></div>
        <div>
          <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.25rem;">Ruang Publik & Transportasi</h3>
        </div>
      </div>
      <div class="card" style="border-radius: 24px; display:flex; align-items:center; gap: 1.5rem; border:none; box-shadow:var(--shadow-sm);">
        <div class="card-icon" style="background:transparent; color:#0284c7; width:40px; height:40px; margin:0;"><i class="ph ph-clapperboard"></i></div>
        <div>
          <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.25rem;">Content Creator & Multimedia</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LEADERSHIP -->
<section class="section-padding bg-main">
  <div class="container" style="text-align: center;">
    <h2 class="section-title text-primary" style="font-size: 2rem;">Susunan Pengurus</h2>
    
    <div style="display: flex; justify-content: center; gap: 4rem; margin-top: 3rem;">
      <div style="text-align: center;">
        <img src="/images/design/leader_1.png" alt="Direktur" style="width:160px; height:160px; border-radius:50%; object-fit:cover; margin:0 auto 1.5rem; box-shadow:var(--shadow-md);">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.25rem;">Tengku Zulhendra Isa</h3>
        <p style="font-size:0.8rem; font-weight:700; color:var(--text-gray); letter-spacing:1px;">DIREKTUR</p>
      </div>
      <div style="text-align: center;">
        <img src="/images/design/leader_2.png" alt="Komisaris" style="width:160px; height:160px; border-radius:50%; object-fit:cover; margin:0 auto 1.5rem; box-shadow:var(--shadow-md);">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.25rem;">Ismail Abdul Rahman Siregar</h3>
        <p style="font-size:0.8rem; font-weight:700; color:var(--text-gray); letter-spacing:1px;">KOMISARIS</p>
      </div>
    </div>
  </div>
</section>

<!-- COMPLIANCE & REKENING & ALAMAT -->
<section class="section-padding bg-main">
  <div class="container">
    <div class="card card-dark" style="border-radius: 24px; padding: 4rem 3rem; position:relative; overflow:hidden; margin-bottom: 2rem;">
      <div style="position:absolute; right:-50px; top:50%; transform:translateY(-50%); opacity:0.1; font-size:250px;"><i class="ph ph-check"></i></div>
      <h2 style="font-size:2rem; margin-bottom:3rem; position:relative; z-index:2;">Legalitas Perusahaan</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; position:relative; z-index:2;">
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">NIB</p>
          <h4 style="font-size:1.2rem;">0104230012715</h4>
        </div>
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">NPWP</p>
          <h4 style="font-size:1.2rem;">40.442.825.2-211.000</h4>
        </div>
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">Akta Pendirian</p>
          <h4 style="font-size:1.2rem;">No. 41, 29 Maret 2023</h4>
        </div>
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">SK Kemenkumham</p>
          <h4 style="font-size:1.2rem;">AHU-0025685.AH.01.01.TAHUN 2023</h4>
        </div>
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">Berita Negara</p>
          <h4 style="font-size:1.2rem;">No. 027, Terbit 4 April 2023</h4>
        </div>
        <div>
          <p style="font-size:0.75rem; letter-spacing:1px; color:rgba(255,255,255,0.6); margin-bottom:0.5rem; text-transform:uppercase;">PKP (Pengusaha Kena Pajak)</p>
          <span style="display:inline-block; background:rgba(255,255,255,0.1); padding:0.3rem 0.8rem; border-radius:4px; font-size:0.8rem; font-weight:700;">Sejak 7 Maret 2024</span>
        </div>
      </div>
    </div>

    <div class="grid-2">
      <!-- Rekening -->
      <div class="card" style="border-radius: 20px;">
        <h3 class="text-primary" style="margin-bottom: 1.5rem;">Rekening Perusahaan</h3>
        <p style="color:var(--text-gray); margin-bottom: 0.5rem;">Bank BRI Cabang Pekanbaru Lancang Kuning</p>
        <h2 style="font-size: 1.8rem; letter-spacing: 1px;">1079-01-002545-56-9</h2>
        <p style="color:var(--text-gray); margin-top: 0.5rem;">a.n. PT. Teknokrat Zamrud Integrasi</p>
      </div>
      <!-- Alamat -->
      <div class="card" style="border-radius: 20px;">
        <h3 class="text-primary" style="margin-bottom: 1.5rem;">Alamat Kantor</h3>
        <p style="color:var(--text-gray); line-height: 1.8;">Jl. Gunung Bendahara No. 16A,<br>Kel. Pematang Kapau, Kec. Kulim,<br>Kota Pekanbaru, Riau 28289</p>
      </div>
    </div>
  </div>
</section>

@endsection
