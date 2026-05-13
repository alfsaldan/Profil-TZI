@extends('layouts.app')
@section('title', 'Layanan - PT. Teknokrat Zamrud Integrasi')
@section('meta_desc', 'Layanan instalasi elektronika, pendingin udara, dan furniture dari PT. Teknokrat Zamrud Integrasi.')

@section('head')
<style>
.hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1600&auto=format&fit=crop&q=80');
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
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
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
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── 3 LAYANAN JASA UTAMA ── -->
    <section class="py-24 bg-white relative">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 mb-20" data-aos="fade-up">
                <div class="max-w-lg text-center md:text-left">
                    <div
                        class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-[0.2em] text-sky-600 mb-4 bg-sky-50 px-3 py-1 rounded-full">
                        <iconify-icon icon="solar:shield-star-bold-duotone"></iconify-icon>
                        KBLI Terakreditasi
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black uppercase text-slate-900 mb-6 leading-tight">3 LAYANAN
                        <span class="text-sky-600">JASA UTAMA</span>
                    </h2>
                    <p class="text-slate-600 text-sm leading-relaxed">Kami memberikan pelayanan terbaik berdasarkan
                        standar KBLI yang terdaftar secara resmi untuk menjamin kualitas dan keamanan instalasi.</p>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full md:w-auto">
                    <div
                        class="bg-slate-50 p-6 rounded-2xl border border-slate-100 flex flex-col items-center text-center">
                        <iconify-icon icon="solar:verified-check-bold-duotone"
                            class="text-sky-600 text-3xl mb-2"></iconify-icon>
                        <span
                            class="text-[9px] font-black uppercase tracking-widest text-slate-900 leading-tight">Sertifikasi
                            <br> Resmi</span>
                    </div>
                    <div
                        class="bg-slate-50 p-6 rounded-2xl border border-slate-100 flex flex-col items-center text-center">
                        <iconify-icon icon="solar:clipboard-list-bold-duotone"
                            class="text-sky-600 text-3xl mb-2"></iconify-icon>
                        <span class="text-[9px] font-black uppercase tracking-widest text-slate-900 leading-tight">KBLI
                            <br> Terdaftar</span>
                    </div>
                    <div
                        class="bg-slate-50 p-6 rounded-2xl border border-slate-100 flex flex-col items-center text-center">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                            class="text-sky-600 text-3xl mb-2"></iconify-icon>
                        <span
                            class="text-[9px] font-black uppercase tracking-widest text-slate-900 leading-tight">Integrasi
                            <br> Penuh</span>
                    </div>
                    <div
                        class="bg-slate-50 p-6 rounded-2xl border border-slate-100 flex flex-col items-center text-center">
                        <iconify-icon icon="solar:widget-3-bold-duotone"
                            class="text-sky-600 text-3xl mb-2"></iconify-icon>
                        <span
                            class="text-[9px] font-black uppercase tracking-widest text-slate-900 leading-tight">Ekosistem
                            <br> Terpadu</span>
                    </div>
                </div>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: Elektronika -->
                <div class="service-card p-10 bg-slate-50 rounded-lg md:rounded-[2.5rem] border border-slate-100 relative overflow-hidden group"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                        <iconify-icon icon="solar:cpu-bolt-bold-duotone" class="text-8xl text-[#0a1628]"></iconify-icon>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center mb-8 shadow-xl">
                            <iconify-icon icon="solar:videocamera-record-bold-duotone"
                                class="text-white text-3xl"></iconify-icon>
                        </div>
                        <div class="mb-4">
                            <span
                                class="text-[10px] font-black uppercase tracking-widest text-sky-600 bg-sky-50 px-2 py-0.5 rounded">KBLI
                                43213</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-6 leading-tight">Instalasi
                            <br>Elektronika
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Pemasangan instalasi elektronika pada
                            bangunan gedung hunian maupun non-hunian.</p>
                        <ul class="space-y-4">
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                CCTV & Alarm System
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Sound System Management
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Access Control & Scoring
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Fasilitas Telekomunikasi
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Pendingin -->
                <div class="service-card p-10 bg-slate-50 rounded-lg md:rounded-[2.5rem] border border-slate-100 relative overflow-hidden group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                        <iconify-icon icon="solar:wind-bold-duotone" class="text-8xl text-[#0a1628]"></iconify-icon>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center mb-8 shadow-xl">
                            <iconify-icon icon="solar:snowflake-bold-duotone"
                                class="text-white text-3xl"></iconify-icon>
                        </div>
                        <div class="mb-4">
                            <span
                                class="text-[10px] font-black uppercase tracking-widest text-sky-600 bg-sky-50 px-2 py-0.5 rounded">KBLI
                                43224</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-6 leading-tight">Pendingin &
                            <br>Ventilasi
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Pemasangan dan perawatan sistem pendingin
                            udara untuk bangunan hunian & non-hunian.</p>
                        <ul class="space-y-4">
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Air Conditioner (AC)
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Lemari Pendingin
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Ventilasi Udara
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Pipa, Ducting & Logam
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: Furniture & Mebel -->
                <div class="service-card p-10 bg-slate-50 rounded-lg md:rounded-[2.5rem] border border-slate-100 relative overflow-hidden group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                        <iconify-icon icon="solar:armchair-bold-duotone" class="text-8xl text-[#0a1628]"></iconify-icon>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center mb-8 shadow-xl">
                            <iconify-icon icon="solar:chair-bold-duotone"
                                class="text-white text-3xl"></iconify-icon>
                        </div>
                        <div class="mb-4">
                            <span
                                class="text-[10px] font-black uppercase tracking-widest text-sky-600 bg-sky-50 px-2 py-0.5 rounded">KBLI
                                47591</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-6 leading-tight">Furniture
                            <br>& Mebel
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Penyedia solusi mebel perkantoran dan institusi dengan brand ternama seperti Futura, CHITOSE, dan Lion.</p>
                        <ul class="space-y-4">
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Office Furniture (Lion)
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Kursi Lipat & Tumpuk (Futura)
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Meja & Kursi Kerja (CHITOSE)
                            </li>
                            <li
                                class="flex items-center gap-3 text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span>
                                Filing Cabinet & Brankas
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Stats Section -->
            <div class="mt-24 grid grid-cols-2 md:grid-cols-4 gap-8 bg-[#0a1628] p-12 rounded-lg md:rounded-[3rem] text-center"
                data-aos="zoom-in">
                <div class="space-y-2 border-r border-white/10 md:border-r">
                    <p class="text-4xl font-black text-sky-400">99.9%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Uptime Layanan</p>
                </div>
                <div class="space-y-2 border-r border-white/10 md:border-r">
                    <p class="text-4xl font-black text-sky-400">50+</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Teknisi Ahli</p>
                </div>
                <div class="space-y-2 border-r border-white/10 md:border-none">
                    <p class="text-4xl font-black text-sky-400">100%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">KBLI Terdaftar</p>
                </div>
                <div class="space-y-2">
                    <p class="text-4xl font-black text-sky-400">24/7</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">Dukungan Teknis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OUR CLIENTS ── -->
    <section class="py-24 bg-white relative overflow-hidden border-t border-slate-100">
        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-sky-50 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-50 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-4">
                    <span class="w-8 h-px bg-sky-600"></span>
                    Jejak Rekam
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-tight">
                    KLIEN & <span class="text-sky-600">KOLABORASI</span>
                </h2>
                <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto mt-4">
                    Dedikasi kami terhadap kualitas telah membangun kepercayaan dari berbagai institusi bergengsi di Indonesia.
                </p>
            </div>

            <div class="space-y-12 md:space-y-16">
                <!-- Pendidikan -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:globus-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Sektor Pendidikan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Mendukung fasilitas dan operasional teknologi di berbagai perguruan tinggi serta sekolah unggulan.</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="edu-grid" class="flex flex-wrap justify-center lg:justify-start gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Pemerintahan -->
                <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-right">
                        <div class="w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 text-3xl mb-6 mx-auto lg:mx-0 lg:ml-auto">
                            <iconify-icon icon="solar:case-minimalistic-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Pemerintahan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Penyedia terpercaya untuk pengadaan dan instalasi di kementerian serta lembaga negara.</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="gov-grid" class="flex flex-wrap justify-center lg:justify-end gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Hospitality -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div class="w-16 h-16 rounded-2xl bg-rose-50 flex items-center justify-center text-rose-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:bed-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">Hospitality & Medis</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Integrasi sistem cerdas untuk hotel, rumah sakit, dan fasilitas publik modern.</p>
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
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
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
                <a href="{{ route('kontak') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-sky-900/50">
                    <iconify-icon icon="solar:letter-bold"></iconify-icon>
                    Hubungi Kami
                </a>
                <a href="{{ route('produk') }}"
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
                    img.onerror = function() {
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
