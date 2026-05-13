@extends('layouts.app')
@section('title', 'Katalog Produk - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Katalog produk PT. Teknokrat Zamrud Integrasi: Elektronika, CCTV, AC, Furnitur, dan lebih.')

@section('head')
<style>
.hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=1600&auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
        }

        .custom-shape-divider-bottom-1715243168 {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1715243168 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }

        .custom-shape-divider-bottom-1715243168 .shape-fill {
            fill: #f8fafc;
        }

        .sidebar-item {
            transition: all 0.3s ease;
        }

        .sidebar-item.active {
            background-color: #e0f2fe;
            color: #0369a1;
        }

        .product-card {
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: #e2e8f0;
        }
</style>
@endsection

@section('content')

<!-- ── PAGE HERO ── -->
    <section class="hero-bg min-h-[40vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Koleksi Produk Terbaik</p>
                </div>
                <h1 class="text-5xl md:text-7xl uppercase text-white leading-tight font-black">
                    KATALOG <span class="text-sky-500">PRODUK</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    Penyedia produk berkualitas tinggi untuk kebutuhan Elektronika, Kelistrikan, IT, hingga Interior
                    dengan standar industri terbaik.
                </p>
            </div>
        </div>

        <!-- Bottom Curve Shape -->
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── MAIN CONTENT ── -->
    <main class="py-20">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12"
                data-aos="fade-up">
                <div>
                    <h2 class="text-2xl font-black text-sky-600 mb-2 uppercase">Katalog Produk Utama</h2>
                    <div class="w-12 h-1 bg-sky-600 rounded-full"></div>
                </div>
                <div class="w-full md:w-80 relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                    </div>
                    <input type="text" id="product-search" placeholder="Cari produk..."
                        class="w-full bg-white border border-slate-200 py-3 pl-10 pr-4 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-sky-100 transition-all">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Sidebar Categories -->
                <aside class="w-full lg:w-72 flex-shrink-0" data-aos="fade-right">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-sky-600 mb-6 ml-2">Kategori (KBLI)
                    </p>
                    <nav class="space-y-2">
                        <button
                            class="filter-btn sidebar-item active w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold transition-all text-left"
                            data-filter="all">
                            <iconify-icon icon="solar:widget-bold-duotone" class="text-xl"></iconify-icon>
                            <span>Semua Produk</span>
                        </button>
                        <button
                            class="filter-btn sidebar-item w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all text-left"
                            data-filter="audio">
                            <iconify-icon icon="solar:volume-loud-linear" class="text-xl"></iconify-icon>
                            <span>Peralatan Audio & Video</span>
                        </button>
                        <button
                            class="filter-btn sidebar-item w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all text-left"
                            data-filter="furnitur">
                            <iconify-icon icon="solar:armchair-linear" class="text-xl"></iconify-icon>
                            <span>Furnitur</span>
                        </button>
                        <button
                            class="filter-btn sidebar-item w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all text-left"
                            data-filter="cctv">
                            <iconify-icon icon="solar:videocamera-record-linear" class="text-xl"></iconify-icon>
                            <span>CCTV & Keamanan</span>
                        </button>
                        <button
                            class="filter-btn sidebar-item w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all text-left"
                            data-filter="ac">
                            <iconify-icon icon="solar:snowflake-linear" class="text-xl"></iconify-icon>
                            <span>Air Conditioner (AC)</span>
                        </button>
                        <button
                            class="filter-btn sidebar-item w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all text-left"
                            data-filter="stationary">
                            <iconify-icon icon="solar:pen-new-square-linear" class="text-xl"></iconify-icon>
                            <span>Stationary</span>
                        </button>
                    </nav>
                </aside>

                <!-- Product Grid -->
                <div class="flex-grow">
                    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                        <!-- Product 1 -->
                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="all" data-aos="fade-up">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=800&auto=format&fit=crop&q=80"
                                    alt="PC Desktop" class="w-full h-full object-cover">
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-sky-600 text-white text-[9px] font-black uppercase tracking-widest px-3 py-1.5 rounded-lg shadow-lg">Featured</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 47411</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">PC Desktop & Laptop</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Perdagangan eceran komputer, peralatan, aksesoris dan perlengkapannya.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=pc-desktop"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="audio" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1545454675-3531b543be5d?w=800&auto=format&fit=crop&q=80"
                                    alt="Audio System" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 47420</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">Sistem Audio & Video</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Radio, Televisi, Video Player, Audio Amplifier, dan Peralatan Stereo.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=audio-system"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="furnitur" data-aos="fade-up" data-aos-delay="200">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&auto=format&fit=crop&q=80"
                                    alt="Office Furniture" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 47591</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">Furnitur Kantor</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Meja & Kursi, Lemari, Rak Buku, Bufet untuk kebutuhan kantor dan komersial.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=office-furniture"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="stationary" data-aos="fade-up">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?w=800&auto=format&fit=crop&q=80"
                                    alt="Stationery" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 47611</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">Stationary</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Penyediaan ATK lengkap untuk perkantoran dan institusi pendidikan dengan kualitas
                                    terbaik.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=stationary"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <!-- Product 5: CCTV -->
                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="cctv" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=800&auto=format&fit=crop&q=80"
                                    alt="CCTV System" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 43213</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">CCTV & Keamanan</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Solusi pengawasan keamanan terpadu dengan teknologi kamera terbaru dan akses remote.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=cctv"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <!-- Product 6: AC -->
                        <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                            data-category="ac" data-aos="fade-up" data-aos-delay="200">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="https://plus.unsplash.com/premium_photo-1679943423706-570c6462f9a4?q=80&w=705&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="AC System" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-sky-500 text-[10px] font-bold mb-2">KBLI 43224</p>
                                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">Air Conditioner (AC)</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-6 flex-grow">
                                    Sistem pendingin udara berkualitas tinggi untuk kenyamanan ruangan hunian dan
                                    kantor.
                                </p>
                                <a href="{{ route('produk-detail') }}??id=ac"
                                    class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

       <!-- ── PRINCIPALS & PARTNERS ── -->
    <section class="py-24 bg-white border-t border-slate-100 overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-6 text-center mb-16 relative z-10">
            <div
                class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-5">
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                Kolaborasi Global & Strategis
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900" data-aos="fade-up">PRINSIPAL <span
                    class="text-sky-600">& MITRA KAMI</span></h2>
            <div class="w-16 h-1 bg-sky-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <style>
            .principals-slider .swiper-wrapper {
                transition-timing-function: linear !important;
            }

            .m-logo {
                height: 45px;
                width: auto;
                max-width: 180px;
                object-fit: contain;
                filter: grayscale(100%) brightness(0.6) opacity(0.5);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .swiper-slide:hover .m-logo {
                filter: grayscale(0%) brightness(1) opacity(1);
                transform: scale(1.1);
            }

            .swiper-wrapper {
                transition-timing-function: linear !important;
            }

            @media (max-width: 768px) {
                .m-logo {
                    height: 30px;
                    max-width: 120px;
                }
            }

            .slider-container::before,
            .slider-container::after {
                content: '';
                position: absolute;
                top: 0;
                width: 150px;
                height: 100%;
                z-index: 10;
                pointer-events: none;
            }

            .slider-container::before {
                left: 0;
                background: linear-gradient(to right, white, transparent);
            }

            .slider-container::after {
                right: 0;
                background: linear-gradient(to left, white, transparent);
            }
        </style>

        <div class="slider-container space-y-12 md:space-y-16">
            <!-- Division 1: Air Conditioning (Moving Right) -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">Air
                    Conditioning Division</p>
                <div class="swiper swiper-left">
                    <div class="swiper-wrapper">
                        <!-- Original -->
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/daikin.jpg') }}" alt="Daikin"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/mitsubishi.svg') }}"
                                alt="Mitsubishi" class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/panasonic.png') }}"
                                alt="Panasonic" class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/samsung.png') }}" alt="Samsung"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/LG.svg') }}" alt="LG"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/carrier.png') }}" alt="Carrier"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/midea.png') }}" alt="Midea"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/haier.png') }}" alt="Haier"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hisense.png') }}" alt="Hisense"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/gree.png') }}" alt="Gree"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/york.png') }}" alt="York"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/trane.png') }}" alt="Trane"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/aqua.png') }}" alt="Aqua"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/polytron.png') }}" alt="Polytron"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <!-- Duplicate -->
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/daikin.jpg') }}" alt="Daikin"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/mitsubishi.svg') }}"
                                alt="Mitsubishi" class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/panasonic.png') }}"
                                alt="Panasonic" class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/samsung.png') }}" alt="Samsung"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/LG.svg') }}" alt="LG"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/carrier.png') }}" alt="Carrier"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/midea.png') }}" alt="Midea"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/haier.png') }}" alt="Haier"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hisense.png') }}" alt="Hisense"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/gree.png') }}" alt="Gree"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/york.png') }}" alt="York"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/trane.png') }}" alt="Trane"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/aqua.png') }}" alt="Aqua"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/polytron.png') }}" alt="Polytron"
                                class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    </div>
                </div>
            </div>

            <!-- Division 2: IT - Electronic (Moving Left) -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">IT -
                    Electronic Division</p>
                <div class="swiper swiper-right">
                    <div class="swiper-wrapper">
                        <!-- Original -->
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/asus.png') }}" alt="Asus"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/acer.png') }}" alt="Acer"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/apple.png') }}" alt="Apple"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/dell.png') }}" alt="Dell"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hp.png') }}" alt="HP"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/lenovo.png') }}" alt="Lenovo"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/msi.png') }}" alt="MSI"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/cisco.png') }}" alt="Cisco"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/epson.png') }}" alt="Epson"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/bosch.png') }}" alt="Bosch"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/brother.png') }}" alt="Brother"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/benq.png') }}" alt="BenQ"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/philips.png') }}" alt="Philips"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/axioo.png') }}" alt="Axioo"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/axis.png') }}" alt="Axis"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/advan.png') }}" alt="Advan"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/ezviz.png') }}" alt="Ezviz"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hikvision.png') }}" alt="Hikvision"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/LG.svg') }}" alt="LG"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/microvision.png') }}" alt="Microvision"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/newline.png') }}" alt="Newline"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/samsung.png') }}" alt="Samsung"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/sennheiser.png') }}" alt="Sennheiser"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/toa.png') }}" alt="TOA"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/viewsonic.png') }}" alt="Viewsonic"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <!-- Duplicate -->
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/asus.png') }}" alt="Asus"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/acer.png') }}" alt="Acer"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/apple.png') }}" alt="Apple"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/dell.png') }}" alt="Dell"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hp.png') }}" alt="HP"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/lenovo.png') }}" alt="Lenovo"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/msi.png') }}" alt="MSI"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/cisco.png') }}" alt="Cisco"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/epson.png') }}" alt="Epson"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/bosch.png') }}" alt="Bosch"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/brother.png') }}" alt="Brother"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/benq.png') }}" alt="BenQ"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/philips.png') }}" alt="Philips"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/axioo.png') }}" alt="Axioo"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/axis.png') }}" alt="Axis"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/advan.png') }}" alt="Advan"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/ezviz.png') }}" alt="Ezviz"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/hikvision.png') }}" alt="Hikvision"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/LG.svg') }}" alt="LG"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/microvision.png') }}" alt="Microvision"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/newline.png') }}" alt="Newline"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/samsung.png') }}" alt="Samsung"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/sennheiser.png') }}" alt="Sennheiser"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/toa.png') }}" alt="TOA"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/viewsonic.png') }}" alt="Viewsonic"
                                class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Division 3: Furniture (Moving Right) -->
        <div class="space-y-4">
            <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">Furniture
                Division</p>
            <div class="swiper swiper-left">
                <div class="swiper-wrapper">
                    <!-- Original -->
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/futura.jpg') }}" alt="Futura"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/chitose.webp') }}" alt="Chitose"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/lion.png') }}" alt="Lion"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/indachi.png') }}" alt="Indachi"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/donati.webp') }}" alt="Donati"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/chairman.webp') }}" alt="Chairman"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/savello.avif') }}" alt="Savello"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/importa.png') }}" alt="Importa"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/expo.png') }}" alt="Expo"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/orbitrend.webp') }}" alt="Orbitrend"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/vip.svg') }}" alt="VIP"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/gresco.webp') }}" alt="Gresco"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/valmont.png') }}" alt="Valmont"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/novin.png') }}" alt="Novin"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <!-- Duplicate -->
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/futura.jpg') }}" alt="Futura"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/chitose.webp') }}" alt="Chitose"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/lion.png') }}" alt="Lion"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/indachi.png') }}" alt="Indachi"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/donati.webp') }}" alt="Donati"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/chairman.webp') }}" alt="Chairman"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/savello.avif') }}" alt="Savello"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/importa.png') }}" alt="Importa"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/expo.png') }}" alt="Expo"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/orbitrend.webp') }}" alt="Orbitrend"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/vip.svg') }}" alt="VIP"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/gresco.webp') }}" alt="Gresco"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/valmont.png') }}" alt="Valmont"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                    <div class="swiper-slide !w-auto px-8"><img src="{{ asset('images/brands/novin.png') }}" alt="Novin"
                            class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                </div>
            </div>
        </div>
        </div>
    </section>

    

@endsection

@section('scripts')
<script>
// Principals Slider
        document.addEventListener('DOMContentLoaded', function () {
            const commonOptions = {
                spaceBetween: 0,
                centeredSlides: true,
                speed: 6000,
                loop: true,
                loopedSlides: 20, // Added for seamless loop
                slidesPerView: 'auto',
                allowTouchMove: false,
            };

            new Swiper('.swiper-left', {
                ...commonOptions,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    reverseDirection: true,
                },
            });

            new Swiper('.swiper-right', {
                ...commonOptions,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
            });
        });

        // Search & Filter Logic
        const searchInput = document.getElementById('product-search');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const productItems = document.querySelectorAll('.product-item');

        function filterProducts() {
            const searchTerm = searchInput.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;

            productItems.forEach(item => {
                const title = item.querySelector('h3').textContent.toLowerCase();
                const desc = item.querySelector('p').textContent.toLowerCase();
                const category = item.dataset.category;

                const matchesSearch = title.includes(searchTerm) || desc.includes(searchTerm);
                const matchesFilter = activeFilter === 'all' || category === activeFilter || category === 'all';

                if (matchesSearch && matchesFilter) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterProducts);

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('active');
                    b.classList.remove('bg-sky-600', 'text-white'); // Fallback remove
                    b.classList.remove('active'); // CSS will handle .active
                });
                btn.classList.add('active');
                filterProducts();
            });
        });
</script>
@endsection
