@extends('layouts.app')
@section('title', 'Layanan - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Layanan instalasi elektronika, pendingin udara, dan furniture dari PT. Teknokrat Zamrud Integrasi.')

@section('head')
    <style>
        .hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url("{{ asset('images/hero/layanan.png') }}");
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
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
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
    <!-- ── PAGE HERO ── -->
    <section class="hero-bg min-h-[45vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(14,165,233,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Our Services</p>
                </div>
                <h1 class="text-4xl md:text-7xl uppercase text-white leading-tight font-black">
                    KUALITAS & <span class="text-sky-500">KEANDALAN</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    Layanan Integrasi Berdasarkan KBLI. Spesialis instalasi dan pemeliharaan yang didukung oleh
                    sertifikasi industri dan teknisi berpengalaman.
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

    <!-- ── AC DIVISION ── -->
    <section id="ac-division" class="py-16 bg-white overflow-hidden relative">
        <!-- Decoration -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-sky-50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 opacity-50">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 01</p>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase text-slate-900 leading-[1.1] mb-8">
                        AIR <br> <span class="text-sky-600">CONDITIONING</span> <br> DIVISION
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Solusi pendingin udara terintegrasi untuk kebutuhan komersial, institusi, hospitality,
                        healthcare, dan residential.
                    </p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        PT Teknokrat Zamrud Integrasi menyediakan solusi air conditioning yang mencakup pengadaan unit,
                        instalasi profesional, preventive maintenance, hingga dukungan teknis untuk berbagai skala
                        kebutuhan.
                    </p>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="assets/img/layanan/ac/ac_service.png" alt="AC Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:box-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Supply AC Units</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Pengadaan unit AC berkualitas dari berbagai brand
                        terkemuka.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Installation & Commissioning</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Instalasi profesional sesuai standar untuk
                        performa optimal dan efisien.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:calendar-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Preventive Maintenance</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Perawatan berkala untuk menjaga keandalan dan umur
                        peralatan lebih lama.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:wrench-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Repair & Troubleshooting</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Perbaikan cepat dan tepat untuk berbagai masalah
                        pada sistem AC.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:shield-star-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">HVAC Project Support</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Dukungan teknis dan manajemen proyek untuk
                        kebutuhan skala besar.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:buildings-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Commercial Cooling Solutions</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Solusi pendinginan terintegrasi untuk berbagai
                        sektor komersial.</p>
                </div>
            </div>

            <!-- Brand Partners AC -->
            <div class="pt-12 border-t border-slate-100">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">Brand
                    Partners</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    <img src="assets/img/brands/daikin.jpg" alt="Daikin" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/mitsubishi.svg" alt="Mitsubishi" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/panasonic.png" alt="Panasonic" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/samsung.png" alt="Samsung" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/LG.svg" alt="LG" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/carrier.png" alt="Carrier" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/midea.png" alt="Midea" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/haier.png" alt="Haier" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/hisense.png" alt="Hisense" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/gree.png" alt="Gree" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/york.png" alt="York" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/trane.png" alt="Trane" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/aqua.png" alt="Aqua" class="h-6 md:h-8 w-auto object-contain">
                    <img src="assets/img/brands/polytron.png" alt="Polytron" class="h-6 md:h-8 w-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ── IT & ELECTRONIC DIVISION ── -->
    <section id="it-division" class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row-reverse gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 02</p>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-8">
                        IT & <br> <span class="text-sky-600">ELECTRONIC</span> <br> DIVISION
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Solusi teknologi informasi dan elektronik terintegrasi untuk mendukung produktivitas, keamanan,
                        dan efisiensi operasional Anda.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-white p-4 rounded-2xl border border-slate-200">
                            <iconify-icon icon="solar:monitor-bold-duotone" class="text-sky-600 text-xl"></iconify-icon>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-700">Produk
                                Berkualitas</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white p-4 rounded-2xl border border-slate-200">
                            <iconify-icon icon="solar:shield-up-bold-duotone" class="text-sky-600 text-xl"></iconify-icon>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-700">Teknologi
                                Terkini</span>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="assets/img/layanan/elektronik/elektronik-service.png" alt="IT Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-8 -left-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:laptop-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Computer & Peripheral</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Pengadaan perangkat komputer, laptop, printer, dan
                        peripheral berkualitas dari brand ternama.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:server-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Server & Storage</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Solusi server, storage, dan sistem jaringan untuk
                        kinerja dan keamanan data yang optimal.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:videocamera-record-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Security & Surveillance</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Sistem keamanan CCTV dan akses kontrol untuk
                        perlindungan area dan aset Anda.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:globus-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Network Solution</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Infrastruktur jaringan yang stabil, cepat, dan
                        terintegrasi untuk kebutuhan bisnis.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:play-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Audio Visual & Multimedia</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Solusi audio visual, display, LED, dan multimedia
                        untuk komunikasi yang lebih efektif.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:cpu-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Electronic Solution</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Berbagai perangkat elektronik pendukung untuk
                        kebutuhan institusi, komersial, dan industri.</p>
                </div>
            </div>

            <!-- Brand Partners IT -->
            <div class="pt-12 border-t border-slate-200">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">Brand
                    Partners</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    <img src="assets/img/brands/asus.png" alt="Asus" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/acer.png" alt="Acer" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/apple.png" alt="Apple" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/dell.png" alt="Dell" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/hp.png" alt="HP" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/lenovo.png" alt="Lenovo" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/msi.png" alt="MSI" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/cisco.png" alt="Cisco" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/epson.png" alt="Epson" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/bosch.png" alt="Bosch" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/brother.png" alt="Brother" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/benq.png" alt="BenQ" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/philips.png" alt="Philips" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/axioo.png" alt="Axioo" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/axis.png" alt="Axis" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/advan.png" alt="Advan" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/ezviz.png" alt="Ezviz" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/hikvision.png" alt="Hikvision" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/LG.svg" alt="LG" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/microvision.png" alt="Microvision" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/newline.png" alt="Newline" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/samsung.png" alt="Samsung" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/sennheiser.png" alt="Sennheiser" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/toa.png" alt="TOA" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/viewsonic.png" alt="Viewsonic" class="h-5 md:h-6 w-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ── FURNITURE DIVISION ── -->
    <section id="furniture-division" class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 03</p>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-8">
                        FURNITURE <br> <span class="text-sky-600">DIVISION</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Solusi furniture modern untuk kebutuhan kantor, institusi pendidikan, hospitality, fasilitas
                        publik, dan ruang komersial.
                    </p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        PT Teknokrat Zamrud Integrasi menghadirkan solusi furniture berkualitas untuk menciptakan ruang
                        kerja dan lingkungan institusional yang nyaman, fungsional, dan profesional.
                    </p>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="assets/img/layanan/furniture/furniture.png" alt="Furniture Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:chair-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Office Furniture Solutions</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Penyediaan meja, kursi, dan sistem penyimpanan
                        kantor yang ergonomis.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:square-academic-cap-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Educational Furniture</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Furniture khusus untuk ruang kelas, perpustakaan,
                        dan fasilitas pendidikan.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:bed-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Hospitality Furniture</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Solusi furniture untuk hotel, lobby, dan area
                        publik yang estetis dan tahan lama.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Public Area Seating</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Sistem tempat duduk untuk fasilitas publik,
                        bandara, dan area tunggu.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:layers-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Workspace Setup & Layout</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Dukungan teknis untuk pengaturan ruang dan tata
                        letak furniture yang efisien.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:home-2-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="text-lg font-black uppercase text-slate-900 mb-3">Commercial Interior Furnishing</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Solusi interior lengkap untuk berbagai kebutuhan
                        ruang komersial modern.</p>
                </div>
            </div>

            <!-- Brand Partners Furniture -->
            <div class="pt-12 border-t border-slate-100">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">Brand
                    Partners</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    <img src="assets/img/brands/futura.jpg" alt="Futura" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/chitose.webp" alt="Chitose" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/lion.png" alt="Lion" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/indachi.png" alt="Indachi" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/donati.webp" alt="Donati" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/chairman.webp" alt="Chairman" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/savello.avif" alt="Savello" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/importa.png" alt="Importa" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/expo.png" alt="Expo" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/orbitrend.webp" alt="Orbitrend" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/vip.svg" alt="VIP" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/gresco.webp" alt="Gresco" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/valmont.png" alt="Valmont" class="h-5 md:h-6 w-auto object-contain">
                    <img src="assets/img/brands/novin.png" alt="Novin" class="h-5 md:h-6 w-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ── STATS SECTION ── -->
    <section class="py-24 bg-white relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 bg-[#0a1628] p-12 rounded-[2.5rem] md:rounded-[4rem] text-center shadow-2xl shadow-sky-900/20"
                data-aos="zoom-in">
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">99.9%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Uptime Layanan</p>
                </div>
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">50+</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Teknisi Ahli</p>
                </div>
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">100%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">KBLI Terdaftar</p>
                </div>
                <div class="space-y-2 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">24/7</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Dukungan Teknis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OUR CLIENTS ── -->
    <section class="py-24 bg-white relative overflow-hidden border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-4">
                    <span class="w-8 h-px bg-sky-600"></span>
                    Jejak Rekam
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-tight">
                    KLIEN & <span class="text-sky-600">KOLABORASI</span>
                </h2>
                <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto mt-4">
                    Dedikasi kami terhadap kualitas telah membangun kepercayaan dari berbagai institusi bergengsi di
                    Indonesia.
                </p>
            </div>

            <div class="space-y-12 md:space-y-16">
                <!-- Pendidikan -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div
                            class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:globus-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Sektor Pendidikan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Mendukung fasilitas dan operasional teknologi
                            di berbagai perguruan tinggi serta sekolah unggulan.</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="edu-grid" class="flex flex-wrap justify-center lg:justify-start gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Pemerintahan -->
                <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-16 items-center lg:items-start"
                    data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-right">
                        <div
                            class="w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 text-3xl mb-6 mx-auto lg:mx-0 lg:ml-auto">
                            <iconify-icon icon="solar:case-minimalistic-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Pemerintahan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Penyedia terpercaya untuk pengadaan dan
                            instalasi di kementerian serta lembaga negara.</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="gov-grid" class="flex flex-wrap justify-center lg:justify-end gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Hospitality -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div
                            class="w-16 h-16 rounded-2xl bg-rose-50 flex items-center justify-center text-rose-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:bed-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Hospitality & Medis</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Integrasi sistem cerdas untuk hotel, rumah
                            sakit, dan fasilitas publik modern.</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="hosp-grid" class="flex flex-wrap justify-center lg:justify-start gap-3 sm:gap-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA / KONTAK ── -->
    <section id="kontak" class="py-28 bg-[#0a1628] relative"
        style="background-image: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(37,99,235,0.15) 0%, transparent 70%);">
        <div class="custom-shape-divider-top-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-40.86,82.39-15.3,168.19-14.33,250.45.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="max-w-3xl mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-6xl font-black uppercase text-white leading-none mb-5">
                Siap memulai <span class="text-sky-400">proyek Anda?</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-10">
                Hubungi para ahli kami untuk konsultasi komprehensif dan solusi yang disesuaikan dengan kebutuhan
                infrastruktur Anda.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="contact.html"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-sky-900/50">
                    <iconify-icon icon="solar:letter-bold"></iconify-icon>
                    Hubungi Kami
                </a>
                <a href="product.html"
                    class="btn-transition inline-flex items-center gap-2 border-2 border-sky-700 hover:border-sky-400 hover:bg-sky-900/30 text-sky-300 hover:text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                    Lihat Produk
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Client Logos Data (Local Paths)
        const eduClients = [
            { name: "Politeknik Negeri Bengkalis", abbr: "PNB", url: "{{ asset('images/clients/pnb.png') }}" },
            { name: "Politeknik Caltex Riau", abbr: "PCR", url: "{{ asset('images/clients/pcr.png') }}" },
            { name: "Universitas Riau", abbr: "UNRI", url: "{{ asset('images/clients/unri.png') }}" },
            { name: "Universitas Islam Riau", abbr: "UIR", url: "{{ asset('images/clients/uir.png') }}" },
            { name: "UIN Sultan Syarif Kasim", abbr: "UIN", url: "{{ asset('images/clients/uin.png') }}" },
            { name: "Universitas Andalas", abbr: "UNAND", url: "{{ asset('images/clients/unand.png') }}" },
            { name: "Universitas Negeri Padang", abbr: "UNP", url: "{{ asset('images/clients/unp.png') }}" },
            { name: "UNISI Kuantan Singingi", abbr: "UNISI", url: "{{ asset('images/clients/unisi.png') }}" },
            { name: "Univ. Maritim Raja Ali Haji", abbr: "UMRAH", url: "{{ asset('images/clients/umrah.png') }}" },
            { name: "IAIN Sultan Abdurrahman", abbr: "IAIN", url: "{{ asset('images/clients/iain.webp') }}" },
            { name: "Universitas Lancang Kuning", abbr: "UNILAK", url: "{{ asset('images/clients/unilak.png') }}" },
            { name: "Universitas AwalBros", abbr: "UAB", url: "{{ asset('images/clients/uab.png') }}" },
        ];

        const govClients = [
            { name: "Kementrian Pendidikan Tinggi", abbr: "DIKTI", url: "{{ asset('images/clients/dikti.png') }}" },
            { name: "Kementrian Agama", abbr: "KEMENAG", url: "{{ asset('images/clients/kemenag.png') }}" },
            { name: "Kejaksaan Agung", abbr: "KEJAGUNG", url: "{{ asset('images/clients/kejagung.png') }}" },
            { name: "Kejaksaan Tinggi Riau", abbr: "KEJATI", url: "{{ asset('images/clients/kejatiri.png') }}" },
            { name: "Pengadilan Tinggi Kepri", abbr: "PT KEPRI", url: "{{ asset('images/clients/ptkepri.png') }}" },
            { name: "PTA Pekanbaru", abbr: "PTA PKU", url: "{{ asset('images/clients/ptapku.png') }}" },
            { name: "PTA Kepulauan Riau", abbr: "PTA KEPRI", url: "{{ asset('images/clients/ptakepri.png') }}" },
            { name: "Dinas PU Provinsi Riau", abbr: "PUPR RIAU", url: "{{ asset('images/clients/pupr.png') }}" },
            { name: "Dinas PU Kepri", abbr: "PU KEPRI", url: "{{ asset('images/clients/pukepri.png') }}" },
            { name: "Ditjen Pajak", abbr: "DJP", url: "{{ asset('images/clients/djp.svg') }}" },
            { name: "Kementrian Perhubungan", abbr: "KEMENHUB", url: "{{ asset('images/clients/kemenhub.png') }}" },
            { name: "Kementrian BKKBN", abbr: "BKKBN", url: "{{ asset('images/clients/bkkbn.png') }}" },
            { name: "BVP & Produktivitas", abbr: "BVP", url: "{{ asset('images/clients/bvp.webp') }}" },
            { name: "Kementrian Kesehatan", abbr: "KEMENKES", url: "{{ asset('images/clients/kemenkes.png') }}" },
            { name: "Angkasa Pura", abbr: "AP", url: "{{ asset('images/clients/angkasapura.png') }}" },
            { name: "Agrinas Palm Nusantara", abbr: "AGRINAS", url: "{{ asset('images/clients/agrinas.png') }}" },
            { name: "Telkomsel", abbr: "TSEL", url: "{{ asset('images/clients/telkomsel.png') }}" },
        ];

        const hospClients = [
            { name: "Cititel Group", abbr: "CITITEL", url: "{{ asset('images/clients/cititel.webp') }}" },
            { name: "Hotel New Hollywood", abbr: "NEW HWD", url: "{{ asset('images/clients/newhwd.jpg') }}" },
            { name: "Swissbell in Hotel", abbr: "SWISSBELL", url: "{{ asset('images/clients/swissbell.png') }}" },
            { name: "Prime Park Hotel", abbr: "PRIME PARK", url: "{{ asset('images/clients/primepark.png') }}" },
            { name: "Archipelago Hotel Group", abbr: "ARCHIPELAGO", url: "{{ asset('images/clients/archipelago.jpg') }}" },
            { name: "RS AwalBros", abbr: "AWALBROS", url: "{{ asset('images/clients/awalbros.png') }}" },
            { name: "RSIA Andini", abbr: "ANDINI", url: "{{ asset('images/clients/rsia.png') }}" },
            { name: "Aulia Hospital", abbr: "AULIA", url: "{{ asset('images/clients/auliahospital.png') }}" },
            { name: "RS Prima", abbr: "RS PRIMA", url: "{{ asset('images/clients/rsprima.png') }}" },
        ];

        function renderClientGrid(data, containerId) {
            const grid = document.getElementById(containerId);
            if (!grid) return;
            data.forEach(item => {
                const wrap = document.createElement('div');
                wrap.className = 'group flex items-center gap-3 bg-white border border-slate-200 pr-5 pl-2 py-2 rounded-full hover:border-sky-400 hover:shadow-md hover:shadow-sky-100 transition-all duration-300 cursor-pointer hover:-translate-y-1';
                wrap.title = item.name;

                const box = document.createElement('div');
                box.className = 'w-10 h-10 rounded-full bg-slate-50 flex-shrink-0 flex items-center justify-center p-1.5 border border-slate-100 group-hover:bg-white group-hover:border-sky-100 transition-colors';

                if (item.url) {
                    const img = document.createElement('img');
                    img.src = item.url;
                    img.alt = item.name;
                    img.loading = 'lazy';
                    img.className = 'max-w-full max-h-full object-contain filter grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300';
                    img.onerror = function () {
                        box.innerHTML = `<span class="text-[10px] font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                    };
                    box.appendChild(img);
                } else {
                    box.innerHTML = `<span class="text-[10px] font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                }

                const label = document.createElement('span');
                label.className = 'text-xs font-bold text-slate-600 group-hover:text-sky-600 transition-colors max-w-[140px] truncate';
                label.textContent = item.name;

                wrap.appendChild(box);
                wrap.appendChild(label);
                grid.appendChild(wrap);
            });
        }

        renderClientGrid(eduClients, 'edu-grid');
        renderClientGrid(govClients, 'gov-grid');
        renderClientGrid(hospClients, 'hosp-grid');
    </script>
@endsection