@extends('layouts.app')
@section('title', 'Tentang Kami - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Profil dan informasi perusahaan PT. Teknokrat Zamrud Integrasi - Spesialis integrasi teknis berbasis di Pekanbaru, Riau.')

@section('head')
    <style>
        .hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url("{{ asset('images/hero/tentang.png') }}");
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
    </style>
@endsection

@section('content')

    <!-- ── PAGE HERO ── -->
    <section class="hero-bg min-h-[40vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Profil Perusahaan</p>
                </div>
                <h1 class="text-4xl md:text-7xl uppercase text-white leading-tight font-black">
                    TENTANG <span class="text-sky-500">KAMI</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    Mengenal lebih dekat PT Teknokrat Zamrud Integrasi sebagai mitra terpercaya solusi teknologi dan
                    integrasi sistem.
                </p>
            </div>
        </div>

        <!-- Bottom Curve Shape -->
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── PROFIL PERUSAHAAN ── -->
    <section class="py-24 bg-white overflow-hidden">
        <div>
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center mb-24">
                <div data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-[0.2em] text-sky-600 mb-4 bg-sky-50 px-3 py-1 rounded-full">
                        <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                        Sejak Maret 2023
                    </div>
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5">
                        <img class="w-20 md:w-28" src="{{ asset('images/logo/logo-dark.png') }}" alt="Teknokrat Zamrud Integrasi Logo">
                        <h2
                            class="text-3xl md:text-4xl font-black uppercase text-slate-900 mb-6 leading-tight text-center sm:text-left">
                            PROFIL <br>
                            <span class="text-sky-600">PT. TEKNOKRAT ZAMRUD INTEGRASI</span>
                        </h2>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        PT Teknokrat Zamrud Integrasi adalah penyedia solusi
                        terintegrasi yang mengkhususkan diri dalam sistem
                        HVAC, teknologi informasi dan elektronik, serta solusi
                        furniture untuk sektor komersial, institusional, dan
                        pemerintahan.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Dengan komitmen terhadap kualitas, inovasi, dan layanan yang andal, kami memberikan solusi
                        menyeluruh mulai dari pengadaan produk dan instalasi sistem hingga pemeliharaan dan dukungan
                        teknis.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Melayani lembaga pendidikan, instansi pemerintah,
                        fasilitas kesehatan, perhotelan, dan perusahaan swasta, kami berkomitmen untuk menciptakan
                        lingkungan yang efisien, modern, dan siap menghadapi masa depan.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-6 border-t border-slate-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:cpu-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">TECHNOLOGY</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:layers-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">INTEGRATION</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:verified-check-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">SOLUTION</span>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl">
                        <img src="assets/img/kantor-teknokrat-zamrud.png" alt="Office Hallway"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- ── FILOSOFI NAMA ── -->
            <div class="mb-24 max-w-6xl mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-black uppercase text-slate-900 mb-2">FILOSOFI <span
                            class="text-sky-600">NAMA</span></h2>
                    <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="0">
                        <h3
                            class="text-xl md:text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Teknokrat</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Cendekiawan yang menguasai teknik,
                            teknologi,
                            dan teknometrik.</p>
                    </div>
                    <div class="bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3
                            class="text-xl md:text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Zamrud</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Merujuk kepada wilayah nusantara sebagai
                            zamrud khatulistiwa.</p>
                    </div>
                    <div class="bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="200">
                        <h3
                            class="text-xl md:text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Integrasi</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Kebulatan tekad untuk bersama-sama
                            menjalankan
                            satu visi dan misi.</p>
                    </div>
                </div>
            </div>

            <!-- ── VISION, MISSION & CORE VALUES ── -->
            <div class="mb-24 max-w-6xl mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-4">
                        VISION, <span class="text-sky-600">MISSION</span> & <br class="hidden md:block">
                        <span class="text-sky-600">CORE VALUES</span>
                    </h2>
                    <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                </div>

                <!-- Vision Section -->
                <div class="relative bg-slate-50 rounded-[2.5rem] overflow-hidden border border-slate-100 mb-12 shadow-sm"
                    data-aos="fade-up">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="p-8 md:p-16">
                            <div class="flex items-center gap-4 mb-6">
                                <div
                                    class="w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl bg-sky-600 flex items-center justify-center text-white shadow-xl shadow-sky-900/20 shrink-0">
                                    <iconify-icon icon="solar:telescope-bold-duotone"
                                        class="text-2xl md:text-4xl"></iconify-icon>
                                </div>
                                <div class="w-0.5 h-10 md:h-12 bg-sky-600"></div>
                                <h3 class="text-2xl md:text-3xl font-black uppercase text-slate-900">Vision</h3>
                            </div>
                            <p class="text-slate-600 text-base md:text-lg leading-relaxed">
                                Menjadi mitra solusi terintegrasi yang terpercaya dalam bidang HVAC, teknologi,
                                elektronik, dan solusi workspace untuk mendukung lingkungan kerja modern yang efisien
                                dan berkelanjutan.
                            </p>
                        </div>
                        <div class="h-64 md:h-full relative overflow-hidden">
                            <img src="assets/img/vision.png" alt="Modern Building"
                                class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-sky-900/20"></div>
                        </div>
                    </div>
                </div>

                <!-- Mission Section -->
                <div class="mb-16">
                    <h3 class="text-2xl font-black uppercase text-slate-900 mb-8 flex items-center gap-3"
                        data-aos="fade-right">
                        <span class="w-8 h-0.5 bg-sky-600"></span> Mission
                    </h3>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Mission 1 -->
                        <div class="bg-[#0a1628]/95 p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group"
                            data-aos="fade-up">
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all">
                                <iconify-icon icon="solar:box-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed">Menyediakan produk dan solusi
                                berkualitas dari brand terpercaya.</p>
                        </div>
                        <!-- Mission 2 -->
                        <div class="bg-[#0a1628]/95 p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group"
                            data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all">
                                <iconify-icon icon="solar:settings-minimalistic-bold-duotone"
                                    class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed">Memberikan layanan profesional
                                mulai dari konsultasi, pengadaan, instalasi, hingga dukungan teknis.</p>
                        </div>
                        <!-- Mission 3 -->
                        <div class="bg-[#0a1628]/95 p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group"
                            data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all">
                                <iconify-icon icon="solar:handshake-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed">Membangun hubungan kerja sama
                                jangka panjang melalui pelayanan yang responsif dan terpercaya.</p>
                        </div>
                        <!-- Mission 4 -->
                        <div class="bg-[#0a1628]/95 p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group"
                            data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all">
                                <iconify-icon icon="solar:lightbulb-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed">Menghadirkan solusi inovatif
                                yang sesuai dengan kebutuhan sektor komersial, institusi, dan pemerintahan.</p>
                        </div>
                    </div>
                </div>

                <!-- Core Values Section -->
                <div class="mb-16">
                    <h3 class="text-2xl font-black uppercase text-slate-900 mb-8 flex items-center gap-3"
                        data-aos="fade-right">
                        <span class="w-8 h-0.5 bg-sky-600"></span> Core Values
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                        <!-- Value 1 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="0">
                            <div
                                class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:shield-check-bold-duotone"
                                    class="text-2xl md:text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-[12px] md:text-sm font-black uppercase text-slate-900 mb-2">Integrity</h4>
                            <p class="text-[10px] md:text-[11px] text-slate-500 leading-tight">Menjaga kepercayaan
                                melalui kejujuran
                                dan profesionalisme.</p>
                        </div>
                        <!-- Value 2 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="100">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:medal-star-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Quality</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">Mengutamakan kualitas produk, layanan,
                                dan hasil kerja.</p>
                        </div>
                        <!-- Value 3 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="200">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:lightbulb-minimalistic-bold-duotone"
                                    class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Innovation</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">Terus menghadirkan solusi yang relevan
                                dan modern.</p>
                        </div>
                        <!-- Value 4 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="300">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:verified-check-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Reliability</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">Menjadi partner yang dapat diandalkan
                                dalam setiap project.</p>
                        </div>
                        <!-- Value 5 -->
                        <div class="text-center group col-span-2 md:col-span-1" data-aos="zoom-in" data-aos-delay="400">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                    class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Collaboration</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">Membangun kerja sama yang kuat dengan
                                klien dan partner.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ── TARGET MARKET ── -->
    <section class="hero-bg bg-[#0a1628] py-24">
        <div class="max-w-6xl mx-auto px-6" data-aos="fade-up">

            <div class="text-center mb-16">
                <div class="text-[10px] font-bold uppercase tracking-[0.25em] text-sky-400 mb-4">
                    Target Market
                </div>

                <h2 class="text-3xl md:text-5xl font-black uppercase text-white leading-tight">
                    SEKTOR LAYANAN & KLIEN
                </h2>

                <p class="max-w-3xl mx-auto mt-5 text-sm md:text-base text-slate-300 leading-relaxed">
                    Solusi layanan untuk berbagai sektor seperti pendidikan, pemerintahan, kesehatan,
                    hospitality, corporate, dan residential.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3">

                <div class="text-center px-8 py-10 border-b border-r border-blue-400/30">
                    <iconify-icon icon="solar:square-academic-cap-bold-duotone"
                        class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Education</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Solusi untuk universitas, sekolah, kampus, dan institusi pendidikan modern.
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-b lg:border-r border-blue-400/30">
                    <iconify-icon icon="solar:shield-user-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Government</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Dukungan solusi untuk instansi pemerintah, lembaga publik, dan proyek institusional.
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-b sm:border-r lg:border-r-0 border-blue-400/30">
                    <iconify-icon icon="solar:hospital-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Healthcare</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Sistem dan infrastruktur pendukung untuk rumah sakit dan fasilitas kesehatan.
                    </p>
                </div>

                <div class="text-center px-8 py-10 lg:border-r border-blue-400/30">
                    <iconify-icon icon="solar:buildings-2-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Hospitality</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Solusi kenyamanan dan operasional untuk hotel dan hospitality.
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-t sm:border-t-0 sm:border-r border-blue-400/30">
                    <iconify-icon icon="solar:city-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Corporate</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Infrastruktur modern untuk kantor, commercial workspace, dan enterprise environment.
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-t lg:border-t-0 border-blue-400/30">
                    <iconify-icon icon="solar:home-2-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">Residential</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Solusi untuk kebutuhan residential premium dan private property.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <!-- ── LEGAL & CORPORATE IDENTITY ── -->
        <div class="max-w-7xl mx-auto px-6 mt-24 mb-24">
            <div class="relative rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-2xl">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="assets/img/bg-logo.png" alt="Law Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            LEGAL & <br>
                            <span class="text-sky-500">CORPORATE IDENTITY</span>
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Legal
                                Establishment of the Company</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                PT Teknokrat Zamrud Integrasi merupakan badan usaha resmi berbentuk Perseroan
                                Terbatas yang didirikan secara sah berdasarkan akta notaris dan telah memperoleh
                                pengesahan dari Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <div class="grid lg:grid-cols-3 gap-10">
                        <!-- Column 1: Akta -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    01
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Akta Pendirian <br>
                                    <span class="text-sky-400 text-[10px] font-bold">Perseroan Terbatas</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('assets/img/surat/akta.jpg')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="assets/img/surat/akta.jpg" alt="Akta PT TZI"
                                        class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div class="grid grid-cols-1 gap-3 mt-auto">
                                    <div
                                        class="flex items-center gap-4 bg-white p-4 rounded-xl border border-slate-100 hover:border-sky-200 hover:bg-sky-50/30 transition-all duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 flex-shrink-0">
                                            <iconify-icon icon="solar:document-bold-duotone" class="text-xl"></iconify-icon>
                                        </div>
                                        <div>
                                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider">Nomor
                                                Akta</p>
                                            <p class="text-sm font-black text-slate-900">41</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center gap-4 bg-white p-4 rounded-xl border border-slate-100 hover:border-sky-200 hover:bg-sky-50/30 transition-all duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 flex-shrink-0">
                                            <iconify-icon icon="solar:calendar-bold-duotone" class="text-xl"></iconify-icon>
                                        </div>
                                        <div>
                                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider">Tanggal
                                                Pendirian</p>
                                            <p class="text-sm font-black text-slate-900">29 Maret 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: SK Pengesahan -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    02
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">SK Pengesahan <br>
                                    <span class="text-sky-400 text-[10px] font-bold">Kemenkumham RI</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('assets/img/surat/sk-pengesahan.jpg')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="assets/img/surat/sk-pengesahan.jpg" alt="SK Kemenkumham"
                                        class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div
                                    class="flex items-center gap-4 bg-sky-50/50 p-5 rounded-2xl border border-sky-100 hover:border-sky-300 transition-all duration-300 mt-auto">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-sky-900/20">
                                        <iconify-icon icon="solar:verified-check-bold-duotone"
                                            class="text-2xl"></iconify-icon>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-[9px] text-sky-600 uppercase font-black tracking-widest mb-1">Nomor
                                            SK Pengesahan</p>
                                        <p class="text-[11px] font-black text-slate-900 break-all leading-tight">
                                            AHU-0025685.AH.01.01.TAHUN 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3: Lampiran & Summary -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    03
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Lampiran SK <br>
                                    <span class="text-sky-400 text-[10px] font-bold">Detail Perseroan</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('assets/img/surat/lampiran-sk.jpg')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="assets/img/surat/lampiran-sk.jpg" alt="Lampiran SK"
                                        class="w-full h-full object-contain bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div
                                    class="bg-slate-900 rounded-2xl p-6 text-white shadow-xl relative overflow-hidden group mt-auto">
                                    <div
                                        class="absolute top-0 right-0 w-24 h-24 bg-sky-600/10 rounded-full blur-2xl -mr-12 -mt-12 transition-all group-hover:bg-sky-600/20">
                                    </div>
                                    <h5
                                        class="text-[10px] font-black uppercase tracking-[0.2em] text-sky-400 mb-5 flex items-center gap-2">
                                        <iconify-icon icon="solar:shield-check-bold-duotone"
                                            class="text-base"></iconify-icon>
                                        Status Legalitas
                                    </h5>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between border-b border-white/10 pb-2">
                                            <span class="text-[10px] font-bold uppercase text-slate-400">Verifikasi</span>
                                            <span
                                                class="text-[10px] font-black bg-sky-500/20 text-sky-400 px-2 py-0.5 rounded-full border border-sky-500/30">VALID
                                                & AKTIF</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-[10px] font-bold uppercase text-slate-400">Terdaftar
                                                Sejak</span>
                                            <span class="text-xs font-black">Maret 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── PUBLIC REGISTRATION & BUSINESS LICENSE ── -->
            <div class="relative rounded-[2.5rem] overflow-hidden bg-white border border-slate-200 shadow-2xl mt-16">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2070&auto=format&fit=crop"
                            alt="Business License Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            PUBLIC REGISTRATION & <br>
                            <span class="text-sky-500">BUSINESS LICENSE</span>
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Business
                                Registration & Licensing</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Legalitas operasional perusahaan telah terdaftar secara resmi
                                melalui sistem OSS, dengan ruang lingkup usaha yang relevan
                                untuk pengadaan, instalasi, perdagangan, dan solusi teknis
                                multi-industri.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <!-- Top Row: BNRI & NIB (Grid 1 and 2) -->
                    <div class="grid lg:grid-cols-2 gap-10 mb-12">
                        <!-- Column 1: BNRI -->
                        <div class="space-y-6" data-aos="fade-up">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    01</div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Berita Negara <br>
                                    <span class="text-sky-400 text-[10px]">Republik Indonesia</span>
                                </h4>
                            </div>
                            <div onclick="openModal('assets/img/surat/berita-acara.jpg')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="assets/img/surat/berita-acara.jpg" alt="Berita Negara RI"
                                    onerror="this.src='assets/img/surat/akta.jpg'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>

                        <!-- Column 2: NIB -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    02</div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Nomor Induk
                                    Berusaha <br> <span class="text-sky-400 text-[10px]">(NIB)</span></h4>
                            </div>
                            <div onclick="openModal('assets/img/surat/nib.jpg')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="assets/img/surat/nib.jpg" alt="NIB"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Row: Lampiran NIB (Landscape style with 3 grids) -->
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                03</div>
                            <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Lampiran NIB / KBLI
                                <br> <span class="text-sky-400 text-[10px]">Daftar Klasifikasi Baku Lapangan
                                    Usaha</span>
                            </h4>
                        </div>

                        <!-- Landscape Container -->
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-2 sm:p-6 shadow-sm">
                            <div class="rounded-xl border border-slate-200 shadow-sm bg-white overflow-hidden w-full">
                                <table
                                    class="w-full table-fixed break-words text-left border-collapse text-[7px] sm:text-[9px] md:text-[11px] lg:text-xs">
                                    <thead>
                                        <tr class="bg-slate-900 text-white">
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[4%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:list-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">No.</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[6%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:code-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Kode<br>KBLI</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle border-r border-slate-800 w-[17%]">
                                                <div
                                                    class="flex flex-col items-center sm:items-start text-center sm:text-left gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:tag-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Judul KBLI</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle border-r border-slate-800 w-[21%]">
                                                <div
                                                    class="flex flex-col items-center sm:items-start text-center sm:text-left gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:map-point-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Lokasi Usaha</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[9%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:danger-triangle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Risiko</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 align-middle border-r border-slate-800 text-center w-[12%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:document-text-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Perizinan</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[6%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:ticket-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Jenis</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[9%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:check-circle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Status</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle text-center w-[16%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:info-circle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">Keterangan</span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-slate-600 divide-y divide-slate-100">
                                        <!-- row 1 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                1</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                47411</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:laptop-minimalistic-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Perdagangan Eceran Komputer dan Perlengkapannya</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-green-100 text-green-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Rendah</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                            <td class="p-1 sm:p-2 text-center text-slate-400 align-top">-</td>
                                        </tr>
                                        <!-- row 2 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                2</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                47420</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:videocamera-record-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Perdagangan Eceran Khusus Peralatan Audio dan Video di
                                                        Toko</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-green-100 text-green-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Rendah</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                            <td class="p-1 sm:p-2 text-center text-slate-400 align-top">-</td>
                                        </tr>
                                        <!-- row 3 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                3</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                47591</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:armchair-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Perdagangan Eceran Furnitur</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-green-100 text-green-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Rendah</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                            <td class="p-1 sm:p-2 text-center text-slate-400 align-top">-</td>
                                        </tr>
                                        <!-- row 4 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                4</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                47611</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:pen-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Perdagangan Eceran Alat Tulis Menulis dan Gambar</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-green-100 text-green-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Rendah</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                            <td class="p-1 sm:p-2 text-center text-slate-400 align-top">-</td>
                                        </tr>
                                        <!-- row 5 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                5</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                47920</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:wallet-money-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Perdagangan Eceran Atas Dasar Balas Jasa (Fee) atau
                                                        Kontrak</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-green-100 text-green-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Rendah</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                            <td class="p-1 sm:p-2 text-center text-slate-400 align-top">-</td>
                                        </tr>
                                        <!-- row 6 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                6</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                43213</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:cpu-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Instalasi Elektronika</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-orange-100 text-orange-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Menengah<br
                                                        class="hidden sm:block">Tinggi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB dan Sertifikat Standar</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-yellow-100 text-yellow-800 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Belum<br
                                                        class="hidden lg:block">Terverifikasi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                        </tr>
                                        <!-- row 7 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                7</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                43224</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:snowflake-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Instalasi Pendingin dan Ventilasi Udara</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-orange-100 text-orange-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Menengah<br
                                                        class="hidden sm:block">Tinggi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB dan Sertifikat Standar</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-yellow-100 text-yellow-800 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Belum<br
                                                        class="hidden lg:block">Terverifikasi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                        </tr>
                                        <!-- row 8 -->
                                        <tr class="hover:bg-sky-50 transition-colors">
                                            <td
                                                class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">
                                                8</td>
                                            <td
                                                class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">
                                                43304</td>
                                            <td
                                                class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                    <iconify-icon icon="solar:palette-bold-duotone"
                                                        class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                    <span>Dekorasi Interior</span>
                                                </div>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">
                                                JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim,
                                                Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-orange-100 text-orange-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Menengah<br
                                                        class="hidden sm:block">Tinggi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">
                                                NIB dan Sertifikat Standar</td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Terbit</span>
                                            </td>
                                            <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                <span
                                                    class="inline-block bg-yellow-100 text-yellow-800 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">Belum<br
                                                        class="hidden lg:block">Terverifikasi</span>
                                            </td>
                                            <td
                                                class="p-1 sm:p-2 text-center text-slate-400 border-r border-slate-100 align-top">
                                                -</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-6 p-5 bg-sky-50 rounded-xl border border-sky-100">
                                <h5 class="text-sm font-black uppercase text-sky-900 mb-2 flex items-center gap-2">
                                    <iconify-icon icon="solar:info-square-bold-duotone"
                                        class="text-sky-600 text-lg"></iconify-icon>
                                    KBLI Relevan dengan Layanan Perusahaan
                                </h5>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    <span class="font-bold">Catatan:</span> Untuk kode KBLI dengan tingkat risiko
                                    Menengah Tinggi, wajib memenuhi persyaratan standar melalui sistem OSS sesuai
                                    ketentuan yang berlaku.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── TAX & FINANCIAL COMPLIANCE ── -->
            <div class="relative rounded-[2.5rem] overflow-hidden bg-white border border-slate-200 shadow-2xl mt-16">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop"
                            alt="Finance and Tax Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            TAX & FINANCIAL <br>
                            <span class="text-sky-500">COMPLIANCE</span>
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Tax & Banking
                                Compliance</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                PT Teknokrat Zamrud Integrasi memenuhi kewajiban perpajakan dan didukung referensi
                                perbankan resmi sebagai bentuk kesiapan dalam menjalankan transaksi bisnis profesional.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <!-- Top Row: NPWP -->
                    <div class="mb-12" data-aos="fade-up">
                        <div class="max-w-md mx-auto space-y-6">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    01
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">NPWP <br>
                                    <span class="text-sky-400 text-[10px]">Perusahaan</span>
                                </h4>
                            </div>

                            <div onclick="openModal('assets/img/surat/npwp.jpg')"
                                class="relative aspect-[1.58/1] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="assets/img/surat/npwp.jpg" alt="NPWP Perusahaan"
                                    onerror="this.src='assets/img/surat/akta.jpg'"
                                    class="w-full h-full object-contain bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Row: PKP & Referensi Bank -->
                    <div class="grid md:grid-cols-2 gap-10 mb-12 max-w-4xl mx-auto">
                        <!-- Column 1: PKP -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    02
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Surat Pengukuhan
                                    <br>
                                    <span class="text-sky-400 text-[10px]">Pengusaha Kena Pajak (PKP)</span>
                                </h4>
                            </div>

                            <div onclick="openModal('assets/img/surat/pkp.jpg')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="assets/img/surat/pkp.jpg" alt="Surat Pengukuhan PKP"
                                    onerror="this.src='assets/img/surat/akta.jpg'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>

                        <!-- Column 2: Referensi Bank -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    03
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">Referensi Bank <br>
                                    <span class="text-sky-400 text-[10px]">Dukungan Finansial Resmi</span>
                                </h4>
                            </div>

                            <div onclick="openModal('assets/img/surat/referensi-bank.jpg')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="assets/img/surat/referensi-bank.jpg" alt="Referensi Bank"
                                    onerror="this.src='assets/img/surat/akta.jpg'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Feature Grid: Kepatuhan & Kredibilitas -->
                    <div class="pt-10 border-t border-slate-100" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center mb-10">
                            <h3 class="text-2xl font-black uppercase text-slate-900 mb-2">Kepatuhan & <span
                                    class="text-sky-600">Kredibilitas Keuangan</span></h3>
                            <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                        </div>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:document-text-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Patuh Pajak</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Terdaftar NPWP dan dikukuhkan sebagai
                                    PKP resmi.</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:shield-check-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Legal & Resmi</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Memenuhi seluruh ketentuan perpajakan
                                    yang berlaku.</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:card-2-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Dukungan Bank</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Didukung referensi resmi dari bank
                                    terpercaya.</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:wallet-money-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Siap Bertransaksi</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Kesiapan dalam menjalankan transaksi
                                    bisnis profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Banking & Address Highlight -->
            <div class="mt-12 grid lg:grid-cols-2 gap-8">
                <div class="bg-sky-600 p-8 rounded-[2rem] text-white shadow-xl shadow-sky-900/20" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20">
                            <iconify-icon icon="solar:wallet-money-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-black uppercase text-sm tracking-widest">Rekening Perusahaan</h4>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">Nama
                                Bank
                            </p>
                            <p class="text-lg font-bold">Bank BRI Cabang Pekanbaru Lancang Kuning</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-6 sm:gap-12">
                            <div>
                                <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">
                                    Nomor
                                    Rekening</p>
                                <p class="text-2xl font-black tracking-widest">1079-01-002545-56-9</p>
                            </div>
                            <div>
                                <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">
                                    Atas
                                    Nama</p>
                                <p class="text-lg font-bold">PT. Teknokrat Zamrud Integrasi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] border border-slate-200" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100">
                            <iconify-icon icon="solar:map-point-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-black uppercase text-sm tracking-widest text-slate-900">Alamat Kantor
                        </h4>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Jl. Todak No.99C Ruko Bening, Tangkerang Barat, Kec. Marpoyan Damai, Kota Pekanbaru Riau
                    </p>
                    <div class="mt-6 pt-6 border-t border-slate-100 flex gap-4">
                        <div class="flex items-center gap-2 text-sky-600 font-bold text-xs uppercase tracking-widest">
                            <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                            Pekanbaru
                        </div>
                        <div class="flex items-center gap-2 text-sky-600 font-bold text-xs uppercase tracking-widest">
                            <iconify-icon icon="solar:global-bold-duotone"></iconify-icon>
                            Riau, Indonesia
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── MAP SECTION ── -->
    <section class="py-24 bg-slate-50">
        <div class="sm:max-w-6xl sm:mx-auto sm:px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-black uppercase text-slate-900 mb-2">LOKASI <span class="text-sky-600">KAMI</span>
                </h2>
                <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
            </div>
            <div class="sm:rounded-xl overflow-hidden border border-slate-200 shadow-2xl shadow-slate-200/50"
                data-aos="zoom-in">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6656877650003!2d101.42478707424073!3d0.5011711637173792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af3a3a06227f%3A0xeb4b783da26fe737!2sPT%20Teknokrat%20Zamrud%20Integrasi!5e0!3m2!1sen!2sid!4v1778666586210!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection