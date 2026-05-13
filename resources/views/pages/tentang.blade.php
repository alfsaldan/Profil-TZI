@extends('layouts.app')
@section('title', 'Tentang Kami - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Profil dan informasi perusahaan PT. Teknokrat Zamrud Integrasi - Spesialis integrasi teknis berbasis di Pekanbaru, Riau.')

@section('head')
    <style>
        .hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url("{{ asset('images/bg-image.png') }}");
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
                    <h2 class="text-4xl font-black uppercase text-slate-900 mb-6 leading-tight">
                        PROFIL <br>
                        <span class="text-sky-600">PT. TEKNOKRAT ZAMRUD INTEGRASI</span>
                    </h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        PT. Teknokrat Zamrud Integrasi merupakan perusahaan yang bergerak di bidang jasa penyedia dan
                        instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi
                        Interior, Furnitur serta Alat Tulis Kantor.
                    </p>
                    <div class="grid grid-cols-2 gap-6 py-6 border-t border-slate-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:check-read-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide text-slate-700">Terpercaya</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:settings-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide text-slate-700">Terintegrasi</span>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/kantor-teknokrat-zamrud.png') }}" alt="Office Hallway"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-sky-600 text-white p-6 rounded-2xl shadow-xl">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1">Kantor</p>
                        <div class="w-12 h-1 bg-white/30 rounded-full"></div>
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
                    <div class="bg-slate-50 p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="0">
                        <h3
                            class="text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Teknokrat</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Cendekiawan yang menguasai teknik, teknologi,
                            dan teknometrik.</p>
                    </div>
                    <div class="bg-slate-50 p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3
                            class="text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Zamrud</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Merujuk kepada wilayah nusantara sebagai
                            zamrud khatulistiwa.</p>
                    </div>
                    <div class="bg-slate-50 p-10 rounded-3xl border border-slate-100 transition-all hover:border-sky-300 hover:shadow-xl group"
                        data-aos="fade-up" data-aos-delay="200">
                        <h3
                            class="text-2xl font-black uppercase text-sky-600 mb-4 group-hover:scale-105 transition-transform origin-left">
                            Integrasi</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Kebulatan tekad untuk bersama-sama menjalankan
                            satu visi dan misi.</p>
                    </div>
                </div>
            </div>

            <!-- ── TARGET MARKET ── -->
            <div class="max-w-6xl mx-auto px-6 mb-24 bg-[#0a1628] sm:rounded-[3rem] p-12 md:p-20 relative overflow-hidden text-white"
                data-aos="zoom-in">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-sky-600/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
                </div>
                <div class="relative z-10">
                    <h2 class="text-2xl sm:text-4xl font-black uppercase mb-12 text-center">TARGET MARKET <span
                            class="text-sky-500">/ KLIEN</span></h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-10">
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50">
                                <iconify-icon icon="solar:buildings-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Office / Perkantoran</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Fasilitas perkantoran modern dengan
                                    infrastruktur terintegrasi.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50">
                                <iconify-icon icon="solar:case-minimalistic-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Sekolah & Perguruan Tinggi</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Fasilitas pendidikan cerdas generasi
                                    masa depan.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-500 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50 opacity-80">
                                <iconify-icon icon="solar:hospital-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Rumah Sakit</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Integrasi sistem kesehatan modern.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-500 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50 opacity-80">
                                <iconify-icon icon="solar:home-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Rumah Ibadah</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Sistem audio video dan kelistrikan
                                    terpadu.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-500 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50 opacity-80">
                                <iconify-icon icon="solar:bus-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Ruang Publik & Transportasi</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Layanan publik yang cerdas dan
                                    efisien.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-sky-500 flex items-center justify-center flex-shrink-0 shadow-lg shadow-sky-900/50 opacity-80">
                                <iconify-icon icon="solar:videocamera-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="font-bold uppercase text-sm mb-1">Content Creator & Multimedia</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Studio dan infrastruktur produksi
                                    digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ── INFORMASI KORPORAT & LEGALITAS ── -->
            <div class="max-w-6xl mx-auto px-6 mt-24 pt-20 border-t border-slate-100">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-black uppercase text-slate-900 mb-2">LEGALITAS <span class="text-sky-600">&
                            KORPORAT</span></h2>
                    <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Legal Item 1 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:document-text-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">Nomor Induk Berusaha
                                (NIB)</h4>
                        </div>
                        <p class="text-slate-600 font-bold text-sm tracking-widest">0104230012715</p>
                    </div>

                    <!-- Legal Item 2 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:card-2-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">NPWP Perusahaan</h4>
                        </div>
                        <p class="text-slate-600 font-bold text-sm tracking-widest">40.442.825.2-211.000</p>
                    </div>

                    <!-- Legal Item 3 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:verified-check-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">Status Pajak (PKP)
                            </h4>
                        </div>
                        <p class="text-slate-600 font-bold text-sm tracking-widest">Sejak 7 Maret 2024</p>
                    </div>

                    <!-- Legal Item 4 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:bill-list-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">Akta Pendirian</h4>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">No. 41, 29 Maret 2023</p>
                    </div>

                    <!-- Legal Item 5 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:diploma-verified-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">SK Kemenkumham</h4>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed uppercase">AHU-0025685.AH.01.01.TAHUN 2023</p>
                    </div>

                    <!-- Legal Item 6 -->
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:notebook-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-xs tracking-widest text-slate-900">Berita Negara</h4>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">No. 027, Terbit 4 April 2023</p>
                    </div>
                </div>

                <!-- Banking & Address Highlight -->
                <div class="mt-12 grid lg:grid-cols-2 gap-8">
                    <div class="bg-sky-600 p-8 rounded-[2rem] text-white shadow-xl shadow-sky-900/20" data-aos="fade-right">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20">
                                <iconify-icon icon="solar:card-bold-duotone" class="text-2xl text-white"></iconify-icon>
                            </div>
                            <h4 class="font-black uppercase text-sm tracking-widest">
                                Rekening Perusahaan
                            </h4>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">Nama Bank
                                </p>
                                <p class="text-lg font-bold">Bank BRI Cabang Pekanbaru Lancang Kuning</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-6 sm:gap-12">
                                <div>
                                    <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">Nomor
                                        Rekening</p>
                                    <p class="text-2xl font-black tracking-widest">1079-01-002545-56-9</p>
                                </div>
                                <div>
                                    <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">Atas
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
                            <h4 class="font-black uppercase text-sm tracking-widest text-slate-900">Alamat Kantor</h4>
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
            <div class="sm:rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-2xl shadow-slate-200/50"
                data-aos="zoom-in">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.67384351608!2d101.4860882740333!3d0.4731885637256195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ae8f26075191%3A0xe67f33918a221f70!2sJl.%20Gunung%20Bendahara%20No.16A%2C%20Pematang%20Kapau%2C%20Kec.%20Kulim%2C%20Kota%20Pekanbaru%2C%20Riau%2028289!5e0!3m2!1sid!2sid!4v1715264350123!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>



@endsection