@extends('layouts.app')
@section('title', 'Product Detail - PT. Teknokrat Zamrud Integrasi')

@section('content')

<!-- BREADCRUMBS & HERO -->
<section class="section-padding bg-main">
  <div class="container">
    <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 2rem;">
      <a href="{{ url('/produk') }}" style="color: var(--text-light);">Products</a> &gt; 
      <a href="#" style="color: var(--text-light);">Enterprise Infrastructure</a> &gt; 
      <span style="color: var(--primary); font-weight: 500;">Titan-X Integrated Server</span>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">
      <!-- Product Images -->
      <div>
        <div style="position: relative; border-radius: 16px; overflow: hidden; margin-bottom: 1rem; background: var(--bg-dark);">
          <span style="position: absolute; top: 1rem; right: 1rem; background: #0ea5e9; color: #fff; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700;">PREMIUM GRADE</span>
          <img src="/images/design/titan_server_main.png" alt="Titan-X Server" style="width: 100%; height: 400px; object-fit: cover;">
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;">
          <img src="/images/design/electronics_chip.png" alt="Detail 1" style="width: 100%; height: 100px; object-fit: cover; border-radius: 8px;">
          <img src="/images/design/server_rack_cables.png" alt="Detail 2" style="width: 100%; height: 100px; object-fit: cover; border-radius: 8px;">
          <img src="/images/design/cinematic_office.png" alt="Detail 3" style="width: 100%; height: 100px; object-fit: cover; border-radius: 8px;">
        </div>
      </div>
      
      <!-- Product Info -->
      <div>
        <div class="tag" style="margin-bottom: 1rem;">
          <span class="tag-icon"><i class="ph ph-check-circle"></i></span> PT. Teknokrat Zamrud Integrasi Original
        </div>
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Titan-X Enterprise<br>Integrated Server</h1>
        <p style="color: var(--text-gray); font-size: 1.1rem; margin-bottom: 2rem;">The pinnacle of server architecture, designed for high-density computing and seamless enterprise integration. Engineered for reliability in mission-critical environments.</p>
        
        <!-- Specs -->
        <div style="background: var(--bg-white); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem; margin-bottom: 2rem;">
          <h4 style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1.5rem;">
            <span style="color: var(--primary); font-size: 1.2rem;"><i class="ph ph-sliders"></i></span> Key Specifications
          </h4>
          <div style="display: flex; flex-direction: column; gap: 1rem;">
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;">
              <span style="color: var(--text-gray); font-size: 0.9rem;">Processor</span>
              <span style="font-weight: 600; font-size: 0.9rem;">Dual Intel® Xeon® Gold 6430</span>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;">
              <span style="color: var(--text-gray); font-size: 0.9rem;">Memory</span>
              <span style="font-weight: 600; font-size: 0.9rem;">512GB DDR5 4800MT/s ECC</span>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;">
              <span style="color: var(--text-gray); font-size: 0.9rem;">Storage</span>
              <span style="font-weight: 600; font-size: 0.9rem;">15.36TB NVMe SSD Enterprise</span>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;">
              <span style="color: var(--text-gray); font-size: 0.9rem;">Connectivity</span>
              <span style="font-weight: 600; font-size: 0.9rem;">4× 25GbE SFP28 Ports</span>
            </div>
            <div style="display: flex; justify-content: space-between;">
              <span style="color: var(--text-gray); font-size: 0.9rem;">Form Factor</span>
              <span style="font-weight: 600; font-size: 0.9rem;">2U Rackmount Integrated</span>
            </div>
          </div>
        </div>
        
        <!-- Actions -->
        <div style="display: flex; gap: 1rem; margin-bottom: 2rem;">
          <a href="{{ url('/kontak') }}" class="btn-primary" style="flex: 1; padding: 1rem; font-size: 1.1rem; background: #0284c7; border: none; justify-content:center; text-align:center;">
            <span style="margin-right: 0.5rem; font-size: 1.2rem;"><i class="ph ph-envelope-simple"></i></span> Minta Penawaran
          </a>
          <a href="https://wa.me/6281371273367" class="btn-secondary" target="_blank" style="flex: 1; padding: 1rem; font-size: 1.1rem; color: #25D366; border-color: #25D366; justify-content:center; text-align:center;">
            <span style="margin-right: 0.5rem; font-size: 1.2rem;"><i class="ph ph-whatsapp-logo"></i></span> Hubungi via WA
          </a>
        </div>
        
        <!-- Warranty -->
        <div style="display: flex; justify-content: space-between; text-align: center;">
          <div>
            <div style="color: #0ea5e9; font-size: 1.5rem; margin-bottom: 0.2rem;"><i class="ph ph-shield-check"></i></div>
            <p style="font-size: 0.75rem; color: var(--text-gray);">3 Year Warranty</p>
          </div>
          <div>
            <div style="color: #0ea5e9; font-size: 1.5rem; margin-bottom: 0.2rem;"><i class="ph ph-headphones"></i></div>
            <p style="font-size: 0.75rem; color: var(--text-gray);">24/7 Tech Support</p>
          </div>
          <div>
            <div style="color: #0ea5e9; font-size: 1.5rem; margin-bottom: 0.2rem;"><i class="ph ph-truck"></i></div>
            <p style="font-size: 0.75rem; color: var(--text-gray);">Secure Delivery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DETAILS TABS -->
<section style="background: var(--bg-white); padding-bottom: 5rem;">
  <div class="container">
    <!-- Tabs Header -->
    <div style="display: flex; gap: 2rem; border-bottom: 1px solid var(--border); padding-top: 2rem; margin-bottom: 3rem;">
      <div style="padding-bottom: 1rem; border-bottom: 2px solid var(--primary); color: var(--primary); font-weight: 600; font-size: 1.1rem; cursor: pointer;">Full Description</div>
      <div style="padding-bottom: 1rem; color: var(--text-gray); font-weight: 500; font-size: 1.1rem; cursor: pointer;">Integration Guide</div>
      <div style="padding-bottom: 1rem; color: var(--text-gray); font-weight: 500; font-size: 1.1rem; cursor: pointer;">Documentation</div>
    </div>
    
    <!-- Tab Content -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
      <div>
        <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Modern Server Architecture</h2>
        <p style="color: var(--text-gray); margin-bottom: 2rem; line-height: 1.8;">PT. Teknokrat Zamrud Integrasi memperkenalkan Titan-X sebagai solusi server modular yang dirancang untuk kebutuhan integrasi data tingkat tinggi. Dengan sistem manajemen termal yang dipatenkan dan arsitektur bus PCIe Gen5 yang sangat efisien, server ini memastikan operasional maksimal tanpa hambatan teknis.</p>
        
        <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem;">
          <li style="display: flex; gap: 1rem; align-items: flex-start;">
            <span style="color: var(--primary); font-size: 1.2rem;"><i class="ph ph-check"></i></span>
            <span style="color: var(--text-dark); font-size: 0.95rem;">Advanced AI workload acceleration optimized for modern frameworks.</span>
          </li>
          <li style="display: flex; gap: 1rem; align-items: flex-start;">
            <span style="color: var(--primary); font-size: 1.2rem;"><i class="ph ph-check"></i></span>
            <span style="color: var(--text-dark); font-size: 0.95rem;">Hyper-converged infrastructure ready for instant deployment.</span>
          </li>
          <li style="display: flex; gap: 1rem; align-items: flex-start;">
            <span style="color: var(--primary); font-size: 1.2rem;"><i class="ph ph-check"></i></span>
            <span style="color: var(--text-dark); font-size: 0.95rem;">Integrated security chips with hardware-level encryption.</span>
          </li>
        </ul>
      </div>
      
      <div class="card" style="text-align: center; background: #fafafa; border: none; padding: 4rem 2rem; border-radius: 20px;">
        <div style="width: 64px; height: 64px; background: #e0f2fe; color: #0284c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin: 0 auto 1.5rem;"><i class="ph ph-wrench"></i></div>
        <h3 style="margin-bottom: 1rem;">Custom Configuration?</h3>
        <p style="color: var(--text-gray); font-size: 0.95rem; margin-bottom: 2rem; max-width: 300px; margin-left: auto; margin-right: auto;">Our engineers can customize the Titan-X to fit your specific enterprise ecosystem and workflow requirements.</p>
        <a href="{{ url('/kontak') }}" class="btn-secondary" style="color: var(--primary); border-color: var(--primary);">Talk to an Architect</a>
      </div>
    </div>
  </div>
</section>

@endsection
