@extends('layouts.app')
@section('title', 'PT. Teknokrat Zamrud Integrasi - Solusi Teknologi & Integrasi Terpadu')
@section('meta_desc', 'Penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur & Alat Tulis Kantor.')

@section('head')
<style>
.hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url("{{ asset('images/hero-bg.png') }}");
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
            fill: #FFFFFF;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.18);
            border-color: #3b82f6;
        }

        .service-card:hover .card-img {
            transform: scale(1.07);
        }

        .card-img {
            transition: transform 0.5s ease;
        }

        .why-card {
            transition: border-color 0.25s, box-shadow 0.25s, transform 0.25s;
        }

        .why-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 8px 30px rgba(59, 130, 246, 0.14);
            transform: translateY(-4px);
        }

        

        

        

        

        

        .read-more {
            transition: gap 0.2s, color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .read-more:hover {
            gap: 10px;
            color: #1d4ed8;
        }

        .feature-row {
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        }

        .feature-row:last-child {
            border-bottom: none;
        }

        .custom-shape-divider-top-1715243168 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1715243168 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 60px;
        }

        .custom-shape-divider-top-1715243168 .shape-fill {
            fill: #FFFFFF;
        }
</style>
@endsection

@section('content')

<!-- ── HERO ── -->
    <section class="hero-bg min-h-[90vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left text -->
                <div data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-400 mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Let's get to work</p>
                    </div>

                    <div class="relative mb-6">
                        <div
                            class="absolute -left-6 top-0 bottom-0 w-1 bg-red-600 rounded-full shadow-[0_0_15px_rgba(220,38,38,0.5)]">
                        </div>
                        <h1
                            class="text-3xl sm:text-4xl md:text-7xl uppercase text-white leading-tight md:leading-[0.9] tracking-tight">
                            Solusi Teknologi <span class="hidden md:inline">&</span> <br class="md:hidden">
                            <span class="text-sky-500">Integrasi</span> <br class="hidden md:block">
                            untuk Kebutuhan Anda
                        </h1>
                    </div>

                    <div class="flex gap-4 mb-10">
                        <div class="w-0.5 bg-slate-700/50 self-stretch"></div>
                        <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                            PT. Teknokrat Zamrud Integrasi - Penyedia dan instalasi produk Elektronika, Kelistrikan,
                            Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur & Alat Tulis Kantor.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-6 mb-12">
                        <a href="{{ route('kontak') }}"
                            class="btn-transition inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-red-900/30">
                            Mulai Sekarang
                            <iconify-icon icon="solar:arrow-right-bold" class="text-sm"></iconify-icon>
                        </a>
                        <!-- <a href="#video"
                            class="flex items-center gap-3 text-white hover:text-sky-400 transition-colors group">
                            <span
                                class="w-12 h-12 rounded-full border-2 border-white/20 group-hover:border-sky-500 flex items-center justify-center transition-all">
                                <iconify-icon icon="solar:play-bold"
                                    class="text-white group-hover:text-sky-500"></iconify-icon>
                            </span>
                            <span class="text-sm font-bold uppercase tracking-widest">Video Intro</span>
                        </a> -->
                    </div>
                </div>

                <!-- Right side (Empty for background image focus) -->
                <div class="hidden md:block relative">
                    <!-- Optional floating badge like in the image -->
                    <div class="absolute -bottom-20 right-0 bg-red-600 text-white rounded-2xl p-5 shadow-2xl flex items-center gap-4"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                            <iconify-icon icon="solar:phone-bold" class="text-white text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest font-medium opacity-80">Hubungi Kapan Saja
                            </p>
                            <p class="text-lg font-bold">0813-7127-3367</p>
                        </div>
                    </div>
                </div>
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

    <!-- ── TENTANG ── -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6 flex flex-col-reverse md:grid md:grid-cols-2 gap-16 items-center">
            <!-- Image collage -->
            <div class="relative" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-2">
                    <img src="{{ asset('images/pasang_ac.png') }}" alt="Modern Office Technology"
                        class="rounded-xl h-52 w-full object-cover col-span-2 shadow-md" />
                    <img src="{{ asset('images/listrik.png') }}" alt="Instalasi Elektronika Kelistrikan"
                        class="rounded-xl h-44 w-full object-cover shadow-md" />
                    <img src="{{ asset('images/cctv.png') }}" alt="Audio Video System"
                        class="rounded-xl h-44 w-full object-cover shadow-md" />
                </div>
            </div>

            <!-- Text -->
            <div data-aos="fade-left">
                <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                    Tentang Kami
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none mb-5">
                    SOLUSI <span class="text-sky-600">INTEGRASI</span> ANDAL UNTUK BISNIS ANDA
                </h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-7">
                    PT. Teknokrat Zamrud Integrasi merupakan perusahaan yang bergerak di bidang jasa penyedia dan
                    instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior,
                    Furnitur serta Alat Tulis Kantor.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 py-6 border-y border-slate-100 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">Tim Ahli
                            <br> Berpengalaman
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:verified-check-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">Kualitas
                            <br> Produk Terjamin
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:shield-check-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">Instalasi
                            <br> Profesional
                        </p>
                    </div>
                </div>

                <a href="{{ route('layanan') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-[#0a1628] hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-widest px-7 py-4 rounded-lg">
                    Lihat Layanan <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ── STATS BAR ── -->
    <section class="relative py-24 overflow-hidden bg-sky-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/bg-image.png') }}" alt="Stats Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-sky-900/85 backdrop-blur-[2px]"></div>
        </div>

        <!-- Decorative Glow -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-500/20 rounded-full blur-[100px] animate-pulse z-0">
        </div>
        <div class="absolute -bottom-24 -left-24 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] z-0">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-0">
                <!-- Stat 1 -->
                <div class="group flex flex-col items-center text-center px-8 transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:calendar-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">2023</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            Tahun Berdiri</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="group flex flex-col items-center text-center px-8 transition-all duration-500 hover:-translate-y-2 md:border-x border-white/10"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:buildings-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">PMDN</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            Status Perusahaan</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="group flex flex-col items-center text-center px-8 transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:map-point-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">RIAU</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            Pusat Operasional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── LAYANAN ── -->
    <section id="layanan" class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div data-aos="fade-right">
                    <div
                        class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                        <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                        Layanan Unggulan Kami
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none">
                        SOLUSI LENGKAP<br /><span class="text-sky-600">SATU ATAP</span>
                    </h2>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed md:max-w-xs" data-aos="fade-left">
                    Kami menyediakan ekosistem solusi lengkap untuk mendukung efisiensi dan estetika ruang kerja maupun
                    komersial Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Card 1: Instalasi Elektronika (Large) -->
                <div class="md:col-span-7 relative group overflow-hidden rounded-xl sm:rounded-[2.5rem] min-h-[260px] md:min-h-[300px]"
                    data-aos="fade-right">
                    <img src="{{ asset('images/elektronik.png') }}" alt="Circuit Board"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628]/95 via-[#0a1628]/40 to-transparent">
                    </div>
                    <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20">
                            <iconify-icon icon="solar:monitor-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-white uppercase mb-3 leading-tight">Instalasi
                            Elektronika</h3>
                        <p class="text-slate-300 text-sm md:text-base max-w-lg leading-relaxed">
                            Pemasangan instalasi elektronika pada bangunan gedung hunian maupun non-hunian, sistem
                            keamanan, dan teknologi informasi.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Instalasi Pendingin (Small) -->
                <div class="md:col-span-5 bg-sky-600 rounded-xl sm:rounded-[2.5rem] p-6 md:p-8 flex flex-col justify-center relative group overflow-hidden min-h-[260px] md:min-h-[300px]"
                    data-aos="fade-left">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-2xl">
                    </div>
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white mb-8 border border-white/10 shadow-lg">
                        <iconify-icon icon="solar:snowflake-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-white uppercase mb-4 leading-tight">Instalasi
                        Pendingin & Ventilasi Udara</h3>
                    <p class="text-sky-100 text-sm md:text-base leading-relaxed">
                        Pemasangan dan perawatan sistem tata udara (AC), lemari pendingin, dan ventilasi untuk bangunan
                        hunian & non-hunian.
                    </p>
                </div>

                <!-- Card 3: Dekorasi Interior (Small) -->
                <div class="md:col-span-5 bg-white border border-slate-100 rounded-xl sm:rounded-[2.5rem] p-6 md:p-8 flex flex-col justify-center shadow-sm relative group overflow-hidden min-h-[260px] md:min-h-[300px]"
                    data-aos="fade-up">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-8 border border-sky-100">
                        <iconify-icon icon="solar:armchair-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-sky-600 uppercase mb-4 leading-tight">Dekorasi
                        Interior</h3>
                    <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                        Pengerjaan dekorasi interior, instalasi furnitur, lantai, dan pelapisan ruangan komersial dengan
                        standar estetika tinggi.
                    </p>
                </div>

                <!-- Card 4: Produk Perdagangan (Large) -->
                <div class="md:col-span-7 relative group overflow-hidden rounded-xl sm:rounded-[2.5rem] min-h-[260px] md:min-h-[300px]"
                    data-aos="fade-up">
                    <img src="{{ asset('images/alat_kantor.png') }}" alt="Tech Office"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                    <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20">
                            <iconify-icon icon="solar:microphone-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-white uppercase mb-3 leading-tight">Produk
                            Perdagangan</h3>
                        <p class="text-slate-300 text-sm md:text-base max-w-lg leading-relaxed">
                            Penyediaan Komputer, Alat Audio Video, Furnitur, dan Alat Tulis Kantor (ATK) lengkap untuk
                            kebutuhan korporat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a index.html
                    class="btn-transition inline-flex items-center gap-2 bg-[#0a1628] hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    Lihat Semua Layanan <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ── WHY US / PROYEK ── -->
    <section id="proyek" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                    Mengapa Pilih Kami
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none mb-6">
                    AHLI TERPERCAYA DALAM<br /><span class="text-sky-600">TEKNOLOGI &amp; INTEGRASI</span>
                </h2>
                <div class="relative rounded-2xl overflow-hidden mb-4 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&auto=format&fit=crop&q=80"
                        alt="Team" class="w-full h-60 object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628]/50 to-transparent"></div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&auto=format&fit=crop&q=80"
                        alt="Meeting" class="rounded-xl h-32 w-full object-cover shadow" />
                    <img src="https://images.unsplash.com/photo-1573496799652-408c2ac9fe98?w=400&auto=format&fit=crop&q=80"
                        alt="Office" class="rounded-xl h-32 w-full object-cover shadow" />
                </div>
            </div>

            <div data-aos="fade-left">
                <p class="text-slate-500 text-sm leading-relaxed mb-8">
                    Teknisi berpengalaman kami memberikan layanan instalasi, perbaikan, dan pemeliharaan IT yang andal
                    untuk menjamin kenyamanan operasional di setiap ruang kerja Anda.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 py-7 border-y border-slate-100 mb-10">
                    <div class="text-center">
                        <p class="text-4xl font-black text-sky-600 leading-none"
                            style="font-family:'Barlow Condensed',sans-serif;">20K</p>
                        <p class="text-slate-500 text-xs mt-1">Kepuasan Pelanggan</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-black text-sky-600 leading-none"
                            style="font-family:'Barlow Condensed',sans-serif;">20K</p>
                        <p class="text-slate-500 text-xs mt-1">Sistem Terpasang</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-black text-sky-600 leading-none"
                            style="font-family:'Barlow Condensed',sans-serif;">25K+</p>
                        <p class="text-slate-500 text-xs mt-1">Teknisi Bersertifikat</p>
                    </div>
                </div>

                <a href="{{ route('kontak') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-7 py-4 rounded-lg shadow-lg shadow-sky-900/30">
                    Pelajari Lebih Lanjut <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ── FEATURE DARK SECTION ── -->
    <section class="py-24 bg-[#0a1628] relative overflow-hidden"
        style="background: radial-gradient(ellipse 60% 60% at 80% 50%, rgba(37,99,235,0.15) 0%, transparent 70%), linear-gradient(rgba(10, 22, 40, 0.85), rgba(10, 22, 40, 0.85)), url("{{ asset('images/ac.png') }}"); background-size: cover; background-position: center;">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-400 mb-3">
                    <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
                    Keunggulan Teknis
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-white leading-none mb-5">
                    MENGAPA MEMILIH <span class="text-sky-400">LAYANAN KAMI?</span>
                </h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-8">
                    Kami menggabungkan keahlian teknis dengan manajemen proyek yang efisien untuk menghadirkan solusi
                    integrasi yang andal, aman, dan berstandar industri.
                </p>
                <a href="{{ route('kontak') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-7 py-4 rounded-lg">
                    Konsultasi Gratis <iconify-icon icon="solar:chat-round-dots-bold"></iconify-icon>
                </a>
            </div>

            <div data-aos="fade-left" class="space-y-0">
                <div class="feature-row flex items-start gap-5 py-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:globus-bold-duotone" class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">Integrasi Ekosistem Penuh</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Solusi satu atap yang mengintegrasikan sistem
                            Elektronika, HVAC, dan Interior secara harmonis.</p>
                    </div>
                </div>
                <div class="feature-row flex items-start gap-5 py-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:diploma-verified-bold-duotone"
                            class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">Kepatuhan KBLI & Standar Resmi</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Seluruh pekerjaan kami didasarkan pada
                            klasifikasi KBLI resmi dan sertifikasi industri yang sah.</p>
                    </div>
                </div>
                <div class="feature-row flex items-start gap-5 pt-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:settings-minimalistic-bold-duotone"
                            class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">Pemeliharaan & Dukungan 24/7</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Layanan purna jual yang sigap untuk memastikan
                            sistem Anda selalu beroperasi tanpa gangguan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── KEUNGGULAN CARDS ── -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-14" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                    Keunggulan Kami
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none">
                    ALASAN MEMILIH <span class="text-sky-600">KAMI</span>
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="why-card bg-white rounded-2xl border border-slate-200 p-7 group hover:border-sky-600 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:globus-bold-duotone"
                            class="text-sky-600 text-2xl group-hover:text-white"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Multi-Disiplin Teknis</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Satu mitra untuk berbagai kebutuhan: Elektronika,
                        HVAC, hingga Interior, memudahkan koordinasi proyek Anda.</p>
                </div>

                <!-- Card 2 -->
                <div class="why-card bg-white rounded-2xl border border-slate-200 p-7 group hover:border-sky-600 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="80">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:diploma-verified-bold-duotone"
                            class="text-sky-600 text-2xl group-hover:text-white"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Sertifikasi KBLI Resmi</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Operasional kami didukung oleh legalitas KBLI yang
                        terdaftar resmi, menjamin kepatuhan pada regulasi industri.</p>
                </div>

                <!-- Card 3 -->
                <div class="why-card bg-white rounded-2xl border border-slate-200 p-7 group hover:border-sky-600 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="160">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone"
                            class="text-sky-600 text-2xl group-hover:text-white"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Tenaga Ahli Terlatih</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Didukung oleh teknisi berpengalaman yang ahli di
                        bidang instalasi teknis dan integrasi sistem modern.</p>
                </div>

                <!-- Card 4 -->
                <div class="why-card bg-white rounded-2xl border border-slate-200 p-7 group hover:border-sky-600 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:map-point-bold-duotone"
                            class="text-sky-600 text-2xl group-hover:text-white"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Basis Operasional Riau</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Berpusat di Pekanbaru, kami memberikan respon
                        cepat dan pemahaman mendalam atas kebutuhan lokal di wilayah Riau.</p>
                </div>

                <!-- Card 5 -->
                <div class="why-card bg-white rounded-2xl border border-slate-200 p-7 group hover:border-sky-600 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="80">
                    <div
                        class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:box-bold-duotone"
                            class="text-sky-600 text-2xl group-hover:text-white"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Material Berkualitas</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Kami hanya menggunakan suku cadang dan material
                        orisinal dari prinsipal ternama untuk menjamin daya tahan instalasi.</p>
                </div>

                <!-- Highlight card -->
                <div class="bg-sky-600 rounded-2xl border border-sky-500 p-7 shadow-xl shadow-sky-900/20"
                    data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center mb-5">
                        <iconify-icon icon="solar:star-fall-bold-duotone" class="text-white text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-white mb-2">Solusi Terpercaya</h3>
                    <p class="text-sky-100 text-sm leading-relaxed mb-6">Berdiri sejak Maret 2023 dengan komitmen penuh
                        pada kualitas, integritas, dan kepuasan setiap mitra kami.</p>
                    <a href="{{ route('kontak') }}"
                        class="inline-flex items-center gap-2 bg-white text-sky-600 hover:bg-sky-50 text-[11px] font-bold uppercase tracking-wider px-6 py-3 rounded-xl transition-all shadow-md">
                        Konsultasi Sekarang <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>

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

    <!-- ── OUR CLIENTS ── -->
    <section class="py-24 bg-slate-50 relative overflow-hidden border-t border-slate-200/60">
        <!-- Background decoration -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-100/50 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-100/50 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-4">
                    <span class="w-8 h-px bg-sky-600"></span>
                    Trust & Collaboration
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-tight">
                    KEPERCAYAAN <span class="text-sky-600">KLIEN KAMI</span>
                </h2>
                <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto mt-4">
                    Kami bangga telah dipercaya oleh berbagai institusi terkemuka di sektor pendidikan, pemerintahan, dan hospitality untuk menghadirkan solusi teknologi terbaik.
                </p>
            </div>

            <!-- Tabs Header -->
            <div class="flex flex-wrap justify-center gap-3 sm:gap-6 mb-12" data-aos="fade-up" data-aos-delay="100">
                <button class="client-tab-btn active flex items-center gap-3 px-6 py-3.5 rounded-2xl border-2 border-sky-600 bg-sky-600 text-white font-bold text-sm transition-all shadow-xl shadow-sky-900/20 hover:-translate-y-1" data-target="edu">
                    <iconify-icon icon="solar:globus-bold-duotone" class="text-xl"></iconify-icon>
                    Pendidikan
                </button>
                <button class="client-tab-btn flex items-center gap-3 px-6 py-3.5 rounded-2xl border-2 border-slate-200 bg-white text-slate-500 font-bold text-sm transition-all hover:bg-slate-50 hover:text-sky-600 hover:border-sky-300 shadow-sm hover:-translate-y-1" data-target="gov">
                    <iconify-icon icon="solar:case-minimalistic-bold-duotone" class="text-xl"></iconify-icon>
                    Pemerintahan
                </button>
                <button class="client-tab-btn flex items-center gap-3 px-6 py-3.5 rounded-2xl border-2 border-slate-200 bg-white text-slate-500 font-bold text-sm transition-all hover:bg-slate-50 hover:text-sky-600 hover:border-sky-300 shadow-sm hover:-translate-y-1" data-target="hosp">
                    <iconify-icon icon="solar:bed-bold-duotone" class="text-xl"></iconify-icon>
                    Hospitality
                </button>
            </div>

            <!-- Tab Contents -->
            <div class="relative min-h-[300px]">
                <!-- Pendidikan -->
                <div id="tab-edu" class="client-tab-content transition-all duration-500 opacity-100 translate-y-0" data-aos="fade-up" data-aos-delay="200">
                    <div id="edu-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6"></div>
                </div>
                <!-- Pemerintahan -->
                <div id="tab-gov" class="client-tab-content hidden transition-all duration-500 opacity-0 translate-y-4">
                    <div id="gov-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6"></div>
                </div>
                <!-- Hospitality -->
                <div id="tab-hosp" class="client-tab-content hidden transition-all duration-500 opacity-0 translate-y-4">
                    <div id="hosp-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA / KONTAK ── -->
    <section id="kontak" class="py-28 bg-[#0a1628] relative"
        style="background-image: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(37,99,235,0.15) 0%, transparent 70%);">
        <!-- Wave Divider Top -->
        <div class="custom-shape-divider-top-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-40.86,82.39-15.3,168.19-14.33,250.45.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="max-w-3xl mx-auto px-6 text-center pt-10" data-aos="fade-up">
            <div
                class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-400 mb-5">
                <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
                Hubungi Kami
                <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-6xl font-black uppercase text-white leading-none mb-5">
                Siap Mengintegrasikan <span class="text-sky-400">Kebutuhan Anda?</span>
            </h2>
            <p class="text-slate-400 text-base max-w-xl mx-auto mb-10">
                Konsultasikan kebutuhan teknologi dan infrastruktur Anda dengan tim ahli kami secara gratis.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="mailto:info@teknozi.com"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-sky-900/50">
                    <iconify-icon icon="solar:letter-bold"></iconify-icon>
                    Kirim Email
                </a>
                <a href="tel:081371273367"
                    class="btn-transition inline-flex items-center gap-2 border-2 border-sky-700 hover:border-sky-400 hover:bg-sky-900/30 text-sky-300 hover:text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    <iconify-icon icon="solar:phone-bold"></iconify-icon>
                    0813-7127-3367
                </a>
            </div>
        </div>
    </section>

    

@endsection

@section('scripts')
<script>
// Swiper Logic
        document.addEventListener('DOMContentLoaded', function () {
            const commonOptions = {
                spaceBetween: 0,
                centeredSlides: false,
                speed: 8000,
                loop: true,
                loopedSlides: 50,
                slidesPerView: 'auto',
                allowTouchMove: false,
            };

            // Initialize all swiper-left instances
            document.querySelectorAll('.swiper-left').forEach(el => {
                new Swiper(el, {
                    ...commonOptions,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                        reverseDirection: true,
                    },
                });
            });

            // Initialize all swiper-right instances
            document.querySelectorAll('.swiper-right').forEach(el => {
                new Swiper(el, {
                    ...commonOptions,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                });
            });
        });

        // Client Logos Data
        const eduClients = [
            { name:"Politeknik Negeri Bengkalis", abbr:"PNB", url:"{{ asset('images/clients/pnb.png') }}" },
            { name:"Politeknik Caltex Riau", abbr:"PCR", url:"{{ asset('images/clients/pcr.png') }}" },
            { name:"Universitas Riau", abbr:"UNRI", url:"{{ asset('images/clients/unri.png') }}" },
            { name:"Universitas Islam Riau", abbr:"UIR", url:"{{ asset('images/clients/uir.png') }}" },
            { name:"UIN Sultan Syarif Kasim", abbr:"UIN", url:"{{ asset('images/clients/uin.png') }}" },
            { name:"Universitas Andalas", abbr:"UNAND", url:"{{ asset('images/clients/unand.png') }}" },
            { name:"Universitas Negeri Padang", abbr:"UNP", url:"{{ asset('images/clients/unp.png') }}" },
            { name:"UNISI Kuantan Singingi", abbr:"UNISI", url:"{{ asset('images/clients/unisi.png') }}" },
            { name:"Univ. Maritim Raja Ali Haji", abbr:"UMRAH", url:"{{ asset('images/clients/umrah.png') }}" },
            { name:"IAIN Sultan Abdurrahman", abbr:"IAIN", url:"{{ asset('images/clients/iain.webp') }}" },
            { name:"Universitas Lancang Kuning", abbr:"UNILAK", url:"{{ asset('images/clients/unilak.png') }}" },
            { name:"Universitas AwalBros", abbr:"UAB", url:"{{ asset('images/clients/uab.png') }}" },
        ];

        const govClients = [
            { name:"Kementrian Pendidikan Tinggi", abbr:"DIKTI", url:"{{ asset('images/clients/dikti.png') }}" },
            { name:"Kementrian Agama", abbr:"KEMENAG", url:"{{ asset('images/clients/kemenag.png') }}" },
            { name:"Kejaksaan Agung", abbr:"KEJAGUNG", url:"{{ asset('images/clients/kejagung.png') }}" },
            { name:"Kejaksaan Tinggi Riau", abbr:"KEJATI", url:"{{ asset('images/clients/kejatiri.png') }}" },
            { name:"Pengadilan Tinggi Kepri", abbr:"PT KEPRI", url:"{{ asset('images/clients/ptkepri.png') }}" },
            { name:"PTA Pekanbaru", abbr:"PTA PKU", url:"{{ asset('images/clients/ptapku.png') }}" },
            { name:"PTA Kepulauan Riau", abbr:"PTA KEPRI", url:"{{ asset('images/clients/ptakepri.png') }}" },
            { name:"Dinas PU Provinsi Riau", abbr:"PUPR RIAU", url:"{{ asset('images/clients/pupr.png') }}" },
            { name:"Dinas PU Kepri", abbr:"PU KEPRI", url:"{{ asset('images/clients/pukepri.png') }}" },
            { name:"Ditjen Pajak", abbr:"DJP", url:"{{ asset('images/clients/djp.svg') }}" },
            { name:"Kementrian Perhubungan", abbr:"KEMENHUB", url:"{{ asset('images/clients/kemenhub.png') }}" },
            { name:"Kementrian BKKBN", abbr:"BKKBN", url:"{{ asset('images/clients/bkkbn.png') }}" },
            { name:"BVP & Produktivitas", abbr:"BVP", url:"{{ asset('images/clients/bvp.webp') }}" },
            { name:"Kementrian Kesehatan", abbr:"KEMENKES", url:"{{ asset('images/clients/kemenkes.png') }}" },
            { name:"Angkasa Pura", abbr:"AP", url:"{{ asset('images/clients/angkasapura.png') }}" },
            { name:"Agrinas Palm Nusantara", abbr:"AGRINAS", url:"{{ asset('images/clients/agrinas.png') }}" },
            { name:"Telkomsel", abbr:"TSEL", url:"{{ asset('images/clients/telkomsel.png') }}" },
        ];

        const hospClients = [
            { name:"Cititel Group", abbr:"CITITEL", url:"{{ asset('images/clients/cititel.webp') }}" },
            { name:"Hotel New Hollywood", abbr:"NEW HWD", url:"{{ asset('images/clients/newhwd.jpg') }}" },
            { name:"Swissbell in Hotel", abbr:"SWISSBELL", url:"{{ asset('images/clients/swissbell.png') }}" },
            { name:"Prime Park Hotel", abbr:"PRIME PARK", url:"{{ asset('images/clients/primepark.png') }}" },
            { name:"Archipelago Hotel Group", abbr:"ARCHIPELAGO", url:"{{ asset('images/clients/archipelago.jpg') }}" },
            { name:"RS AwalBros", abbr:"AWALBROS", url:"{{ asset('images/clients/awalbros.png') }}" },
            { name:"RSIA Andini", abbr:"ANDINI", url:"{{ asset('images/clients/rsia.png') }}" },
            { name:"Aulia Hospital", abbr:"AULIA", url:"{{ asset('images/clients/auliahospital.png') }}" },
            { name:"RS Prima", abbr:"RS PRIMA", url:"{{ asset('images/clients/rsprima.png') }}" },
        ];

        function renderClientGrid(data, containerId) {
            const grid = document.getElementById(containerId);
            if (!grid) return;
            data.forEach(item => {
                const wrap = document.createElement('div');
                wrap.className = 'group flex flex-col items-center justify-between gap-4 p-5 rounded-3xl border border-slate-200/60 bg-white hover:border-sky-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-500 hover:-translate-y-1 h-full';
                wrap.title = item.name;

                const box = document.createElement('div');
                box.className = 'w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center p-2 transition-transform duration-500 group-hover:scale-110';

                if (item.url) {
                    const img = document.createElement('img');
                    img.src = item.url;
                    img.alt = item.name;
                    img.loading = 'lazy';
                    img.className = 'max-w-full max-h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500 opacity-70 group-hover:opacity-100';
                    img.onerror = function() {
                        box.innerHTML = `<span class="text-sm font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                    };
                    box.appendChild(img);
                } else {
                    box.innerHTML = `<span class="text-sm font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                }

                const label = document.createElement('span');
                label.className = 'text-[11px] font-bold text-slate-500 text-center leading-tight group-hover:text-sky-600 transition-colors line-clamp-2 mt-auto';
                label.textContent = item.name;

                wrap.appendChild(box);
                wrap.appendChild(label);
                grid.appendChild(wrap);
            });
        }

        renderClientGrid(eduClients, 'edu-grid');
        renderClientGrid(govClients, 'gov-grid');
        renderClientGrid(hospClients, 'hosp-grid');

        // Client Tabs Logic
        const clientTabs = document.querySelectorAll('.client-tab-btn');
        const clientContents = document.querySelectorAll('.client-tab-content');

        clientTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.target;

                clientTabs.forEach(t => {
                    t.classList.remove('border-sky-600', 'bg-sky-600', 'text-white', 'shadow-xl', 'shadow-sky-900/20', 'active');
                    t.classList.add('border-slate-200', 'bg-white', 'text-slate-500', 'shadow-sm', 'hover:bg-slate-50', 'hover:text-sky-600', 'hover:border-sky-300');
                });
                tab.classList.remove('border-slate-200', 'bg-white', 'text-slate-500', 'shadow-sm', 'hover:bg-slate-50', 'hover:text-sky-600', 'hover:border-sky-300');
                tab.classList.add('border-sky-600', 'bg-sky-600', 'text-white', 'shadow-xl', 'shadow-sky-900/20', 'active');

                clientContents.forEach(content => {
                    if (content.id === `tab-${target}`) {
                        content.classList.remove('hidden');
                        setTimeout(() => {
                            content.classList.remove('opacity-0', 'translate-y-4');
                            content.classList.add('opacity-100', 'translate-y-0');
                        }, 10);
                    } else {
                        content.classList.add('hidden', 'opacity-0', 'translate-y-4');
                        content.classList.remove('opacity-100', 'translate-y-0');
                    }
                });
            });
        });
</script>
@endsection
