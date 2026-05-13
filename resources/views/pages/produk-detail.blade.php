@extends('layouts.app')
@section('title', 'Detail Produk - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Detail produk dan informasi lengkap dari PT. Teknokrat Zamrud Integrasi.')

@section('head')
<style>
.hero-bg {
            background: linear-gradient(rgba(10, 22, 40, 0.8), rgba(10, 22, 40, 0.8)),
                url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600&auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
        }

        

        .custom-shape-divider-bottom-1715243168 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;

        }

        .custom-shape-divider-bottom-1715243168 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 60px;
        }

        .custom-shape-divider-bottom-1715243168 .shape-fill {
            fill: #f8fafc;
        }
</style>
@endsection

@section('content')

<!-- ── PAGE HERO ── -->
    <section class="hero-bg min-h-[30vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-16 relative z-10">
            <div data-aos="fade-up">
                <div class="flex items-center gap-2 text-sky-400 mb-4">
                    <a href="{{ route('produk') }}" class="hover:underline">Produk</a>
                    <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xs"></iconify-icon>
                    <span id="breadcrumb-current" class="text-white/60">Detail Produk</span>
                </div>
                <h1 id="product-title" class="text-4xl md:text-6xl uppercase text-white leading-tight font-black">
                    DETAIL <span class="text-sky-500">PRODUK</span>
                </h1>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── CONTENT ── -->
    <main class="py-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Left: Image Gallery -->
                <div data-aos="fade-right">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-slate-200 aspect-[4/3] bg-white">
                        <img id="product-image" src="" alt="Product Image" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right: Details -->
                <div class="space-y-10" data-aos="fade-left">
                    <div>
                        <span id="product-kbli" class="text-[10px] font-black uppercase tracking-widest text-sky-600 bg-sky-50 px-3 py-1 rounded-full mb-4 inline-block">KBLI 00000</span>
                        <h2 id="detail-title" class="text-4xl md:text-5xl font-black text-slate-900 uppercase leading-none mb-6">NAMA PRODUK</h2>
                        <p id="product-description" class="text-slate-600 leading-relaxed text-lg">
                            Deskripsi lengkap produk akan tampil di sini berdasarkan pilihan produk dari katalog.
                        </p>
                    </div>

                    <!-- Brands Involved -->
                    <div id="brand-section" class="pt-8 border-t border-slate-100">
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 mb-6">Brands & Partners</p>
                        <div id="brand-logos" class="flex flex-wrap gap-6 items-center">
                            <!-- Logos will be injected here -->
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a id="wa-link" href="#" target="_blank"
                            class="btn-transition flex-1 flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#128C7E] text-white font-bold uppercase tracking-widest py-5 rounded-2xl shadow-xl shadow-green-500/20">
                            <iconify-icon icon="logos:whatsapp-icon" class="text-2xl"></iconify-icon>
                            Tanya via WhatsApp
                        </a>
                        <a id="mail-link" href="mailto:admin@TeknokratZamrud.com"
                            class="btn-transition flex-1 flex items-center justify-center gap-3 bg-slate-900 hover:bg-slate-800 text-white font-bold uppercase tracking-widest py-5 rounded-2xl shadow-xl shadow-slate-900/20">
                            <iconify-icon icon="solar:letter-bold" class="text-2xl text-sky-400"></iconify-icon>
                            Kirim Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

@endsection

@section('scripts')
<script>
// Product Data
        const products = {
            'pc-desktop': {
                title: 'PC Desktop & Laptop',
                kbli: 'KBLI 47411',
                description: 'Kami menyediakan berbagai unit komputer desktop (PC) dan laptop untuk kebutuhan bisnis, desain profesional, hingga kebutuhan server. Produk kami didukung oleh brand-brand terpercaya untuk menjamin performa dan durabilitas tinggi.',
                image: 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=800&auto=format&fit=crop&q=80',
                brands: [
                    { name: 'HP', img: '{{ asset("images/brands/hp.png") }}' },
                    { name: 'Dell', img: '{{ asset("images/brands/dell.png") }}' },
                    { name: 'Asus', img: '{{ asset("images/brands/asus.png") }}' },
                    { name: 'Lenovo', img: '{{ asset("images/brands/lenovo.png") }}' },
                    { name: 'Acer', img: '{{ asset("images/brands/acer.png") }}' },
                    { name: 'Apple', img: '{{ asset("images/brands/apple.png") }}' },
                    { name: 'MSI', img: '{{ asset("images/brands/msi.png") }}' },
                    { name: 'Axioo', img: '{{ asset("images/brands/axioo.png") }}' },
                    { name: 'Advan', img: '{{ asset("images/brands/advan.png") }}' }
                ]
            },
            'audio-system': {
                title: 'Sistem Audio & Video',
                kbli: 'KBLI 47420',
                description: 'Solusi perangkat audio visual profesional untuk ruang rapat, auditorium, studio, dan tempat ibadah. Meliputi speaker system, amplifier, mixer, hingga display multimedia berkualitas tinggi.',
                image: 'https://images.unsplash.com/photo-1545454675-3531b543be5d?w=800&auto=format&fit=crop&q=80',
                brands: [
                    { name: 'TOA', img: '{{ asset("images/brands/toa.png") }}' },
                    { name: 'Bosch', img: '{{ asset("images/brands/bosch.png") }}' },
                    { name: 'Sennheiser', img: '{{ asset("images/brands/sennheiser.png") }}' },
                    { name: 'Philips', img: '{{ asset("images/brands/philips.png") }}' },
                    { name: 'LG', img: '{{ asset("images/brands/LG.svg") }}' },
                    { name: 'Samsung', img: '{{ asset("images/brands/samsung.png") }}' }
                ]
            },
            'office-furniture': {
                title: 'Furnitur Kantor',
                kbli: 'KBLI 47591',
                description: 'Layanan penyediaan mebel dan furnitur kantor yang ergonomis dan estetis. Fokus pada kenyamanan kerja dengan produk-produk dari prinsipal furnitur terbaik di Indonesia.',
                image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&auto=format&fit=crop&q=80',
                brands: [
                    { name: 'Futura', img: '{{ asset("images/brands/futura.jpg") }}' },
                    { name: 'Chitose', img: '{{ asset("images/brands/chitose.webp") }}' },
                    { name: 'Lion', img: '{{ asset("images/brands/lion.png") }}' },
                    { name: 'Indachi', img: '{{ asset("images/brands/indachi.png") }}' },
                    { name: 'Donati', img: '{{ asset("images/brands/donati.webp") }}' },
                    { name: 'Chairman', img: '{{ asset("images/brands/chairman.webp") }}' },
                    { name: 'Savello', img: '{{ asset("images/brands/savello.avif") }}' },
                    { name: 'Importa', img: '{{ asset("images/brands/importa.png") }}' },
                    { name: 'Expo', img: '{{ asset("images/brands/expo.png") }}' },
                    { name: 'Orbitrend', img: '{{ asset("images/brands/orbitrend.webp") }}' },
                    { name: 'VIP', img: '{{ asset("images/brands/vip.svg") }}' },
                    { name: 'Gresco', img: '{{ asset("images/brands/gresco.webp") }}' },
                    { name: 'Valmont', img: '{{ asset("images/brands/valmont.png") }}' },
                    { name: 'Novin', img: '{{ asset("images/brands/novin.png") }}' }
                ]
            },
            'stationary': {
                title: 'Stationary',
                kbli: 'KBLI 47611',
                description: 'Penyediaan Alat Tulis Kantor (ATK) secara lengkap dan grosir untuk instansi pemerintah maupun swasta. Kami menjamin ketersediaan stok dan kualitas produk stationary yang unggul.',
                image: 'https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?w=800&auto=format&fit=crop&q=80',
                brands: [
                    { name: 'Epson', img: '{{ asset("images/brands/epson.png") }}' },
                    { name: 'Brother', img: '{{ asset("images/brands/brother.png") }}' },
                    { name: 'HP', img: '{{ asset("images/brands/hp.png") }}' }
                ]
            },
            'cctv': {
                title: 'CCTV & Keamanan',
                kbli: 'KBLI 43213',
                description: 'Sistem pengawasan keamanan (CCTV) modern dengan integrasi jaringan. Kami menyediakan kamera IP, DVR/NVR, hingga sistem monitoring terpadu untuk keamanan aset Anda selama 24/7.',
                image: 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=800&auto=format&fit=crop&q=80',
                brands: [
                    { name: 'Hikvision', img: '{{ asset("images/brands/hikvision.png") }}' },
                    { name: 'Ezviz', img: '{{ asset("images/brands/ezviz.png") }}' },
                    { name: 'Bosch', img: '{{ asset("images/brands/bosch.png") }}' },
                    { name: 'Cisco', img: '{{ asset("images/brands/cisco.png") }}' }
                ]
            },
            'ac': {
                title: 'Air Conditioner (AC)',
                kbli: 'KBLI 43224',
                description: 'Unit pendingin udara (AC) untuk berbagai skala ruangan. Mulai dari AC Split untuk hunian, hingga sistem AC Central/VRF untuk gedung perkantoran dan fasilitas industri.',
                image: 'https://plus.unsplash.com/premium_photo-1679943423706-570c6462f9a4?q=80&w=705&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                brands: [
                    { name: 'Daikin', img: '{{ asset("images/brands/daikin.jpg") }}' },
                    { name: 'Mitsubishi', img: '{{ asset("images/brands/mitsubishi.svg") }}' },
                    { name: 'Panasonic', img: '{{ asset("images/brands/panasonic.png") }}' },
                    { name: 'Samsung', img: '{{ asset("images/brands/samsung.png") }}' },
                    { name: 'LG', img: '{{ asset("images/brands/LG.svg") }}' },
                    { name: 'Carrier', img: '{{ asset("images/brands/carrier.png") }}' },
                    { name: 'Midea', img: '{{ asset("images/brands/midea.png") }}' },
                    { name: 'Haier', img: '{{ asset("images/brands/haier.png") }}' },
                    { name: 'Hisense', img: '{{ asset("images/brands/hisense.png") }}' },
                    { name: 'Gree', img: '{{ asset("images/brands/gree.png") }}' },
                    { name: 'York', img: '{{ asset("images/brands/york.png") }}' },
                    { name: 'Trane', img: '{{ asset("images/brands/trane.png") }}' },
                    { name: 'Aqua', img: '{{ asset("images/brands/aqua.png") }}' },
                    { name: 'Polytron', img: '{{ asset("images/brands/polytron.png") }}' }
                ]
            }
        };

        // Load Product Detail
        function loadDetail() {
            const params = new URLSearchParams(window.location.search);
            const id = params.get('id');
            const product = products[id] || products['pc-desktop'];

            document.getElementById('breadcrumb-current').textContent = product.title;
            document.getElementById('detail-title').textContent = product.title;
            document.getElementById('product-kbli').textContent = product.kbli;
            document.getElementById('product-description').textContent = product.description;
            document.getElementById('product-image').src = product.image;
            document.getElementById('product-image').alt = product.title;
            
            // WhatsApp Link
            const waMsg = encodeURIComponent(`Halo, saya tertarik dengan produk ${product.title}. Bisa minta informasi lebih lanjut?`);
            document.getElementById('wa-link').href = `https://wa.me/6281371273367?text=${waMsg}`;

            // Brand Logos
            const brandContainer = document.getElementById('brand-logos');
            brandContainer.innerHTML = '';
            product.brands.forEach(brand => {
                const brandEl = document.createElement('div');
                brandEl.className = 'w-24 h-12 md:w-28 md:h-14 bg-white border border-slate-200 rounded-lg flex items-center justify-center p-2 shadow-sm hover:border-sky-300 transition-colors';
                
                const imgEl = document.createElement('img');
                imgEl.src = brand.img;
                imgEl.alt = brand.name;
                imgEl.title = brand.name;
                imgEl.className = 'max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300';
                
                brandEl.appendChild(imgEl);
                brandContainer.appendChild(brandEl);
            });
        }

        window.onload = loadDetail;
</script>
@endsection
