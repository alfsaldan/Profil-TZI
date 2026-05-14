<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'PT Teknokrat Zamrud Integrasi')</title>
    <meta name="description" content="@yield('meta_desc', 'PT. Teknokrat Zamrud Integrasi - Penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur & Alat Tulis Kantor.')">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo-dark.png') }}" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Fira+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

    {{-- Vite (Tailwind CSS + JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Barlow Condensed', sans-serif;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3b99f6;
            transition: width 0.25s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .btn-transition {
            transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
        }

        .btn-transition:hover {
            transform: translateY(-2px);
        }
    </style>

    @yield('head')
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden">

    {{-- ── NAVBAR ── --}}
    @php $currentRoute = request()->route()->getName(); @endphp
    <nav class="fixed top-0 left-0 w-full z-50 bg-[#0a1628]/95 backdrop-blur-md border-b border-sky-900/40">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('beranda') }}" class="flex items-center gap-2.5">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Logo Teknokrat Zamrud Integrasi">
                </div>
                <div class="leading-tight uppercase">
                    <p class="text-white text-sm font-bold tracking-wide text-center">Teknokrat</p>
                    <p class="text-sky-400 text-[11px] font-light tracking-wide">Zamrud Integrasi</p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8 text-[11px] font-semibold uppercase tracking-widest text-slate-400">
                <a href="{{ route('beranda') }}" class="nav-link hover:text-white transition-colors {{ $currentRoute === 'beranda' ? 'active text-sky-400' : '' }}">Beranda</a>
                <a href="{{ route('tentang') }}" class="nav-link hover:text-white transition-colors {{ $currentRoute === 'tentang' ? 'active text-sky-400' : '' }}">Tentang Kami</a>
                <a href="{{ route('layanan') }}" class="nav-link hover:text-white transition-colors {{ $currentRoute === 'layanan' ? 'active text-sky-400' : '' }}">Layanan</a>
                <a href="{{ route('produk') }}" class="nav-link hover:text-white transition-colors {{ $currentRoute === 'produk' ? 'active text-sky-400' : '' }}">Produk</a>
                <a href="{{ route('kontak') }}" class="nav-link hover:text-white transition-colors {{ $currentRoute === 'kontak' ? 'active text-sky-400' : '' }}">Kontak</a>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden lg:flex items-center gap-1.5 bg-white/5 border border-white/10 rounded-full p-1 mr-2">
                    <button class="flex items-center justify-center w-7 h-7 rounded-full bg-sky-600 text-white text-[9px] font-black uppercase">ID</button>
                    <button class="flex items-center justify-center w-7 h-7 rounded-full text-slate-400 hover:text-white text-[9px] font-black uppercase transition-all">EN</button>
                </div>
                <a href="{{ route('kontak') }}"
                    class="btn-transition hidden sm:inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-[11px] font-bold uppercase tracking-widest px-5 py-2.5 rounded-lg shadow-lg shadow-sky-900/40">
                    Minta Penawaran
                    <iconify-icon icon="solar:arrow-right-bold" class="text-sm"></iconify-icon>
                </a>
                <button id="menu-open" class="md:hidden text-white text-3xl flex items-center">
                    <iconify-icon icon="solar:hamburger-menu-bold"></iconify-icon>
                </button>
            </div>
        </div>
    </nav>

    {{-- ── MOBILE MENU ── --}}
    <div id="mobile-menu"
        class="fixed inset-0 z-[60] bg-[#0a1628] translate-x-full transition-transform duration-300 md:hidden overflow-y-auto">
        <div class="p-8">
            <div class="flex items-center justify-between mb-16">
                <a href="{{ route('beranda') }}" class="flex items-center gap-2.5 text-left">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo TZI">
                    </div>
                    <div class="leading-tight uppercase">
                        <p class="text-white text-base font-bold tracking-wide text-center">Teknokrat</p>
                        <p class="text-sky-400 text-[11px] font-light tracking-wide">Zamrud Integrasi</p>
                    </div>
                </a>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5 bg-white/5 border border-white/10 rounded-full p-1">
                        <button class="flex items-center justify-center w-8 h-8 rounded-full bg-sky-600 text-white text-[10px] font-black uppercase">ID</button>
                        <button class="flex items-center justify-center w-8 h-8 rounded-full text-slate-400 hover:text-white text-[10px] font-black uppercase transition-all">EN</button>
                    </div>
                    <button id="menu-close" class="text-white text-4xl">
                        <iconify-icon icon="solar:close-circle-bold"></iconify-icon>
                    </button>
                </div>
            </div>

            <nav class="flex flex-col gap-8 text-2xl font-black uppercase tracking-widest">
                <a href="{{ route('beranda') }}"
                    class="{{ $currentRoute === 'beranda' ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">Beranda
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('tentang') }}"
                    class="{{ $currentRoute === 'tentang' ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">Tentang Kami
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('layanan') }}"
                    class="{{ $currentRoute === 'layanan' ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">Layanan
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('produk') }}"
                    class="{{ $currentRoute === 'produk' ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">Produk
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('kontak') }}"
                    class="{{ $currentRoute === 'kontak' ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">Kontak
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
            </nav>

            <div class="mt-16 pt-12 border-t border-sky-900/30">
                <p class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] mb-6">Hubungi Kami</p>
                <div class="space-y-6">
                    <a href="tel:+6281371273367" class="flex items-center gap-4 text-white">
                        <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="solar:phone-bold"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Telepon</p>
                            <p class="text-sm font-bold">0813-7127-3367</p>
                        </div>
                    </a>
                    <a href="https://wa.me/6281371273367" target="_blank" class="flex items-center gap-4 text-white">
                        <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">WhatsApp</p>
                            <p class="text-sm font-bold">0813-7127-3367</p>
                        </div>
                    </a>
                    <a href="mailto:admin@TeknokratZamrud.com" class="flex items-center gap-4 text-white">
                        <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="solar:letter-bold"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Email</p>
                            <p class="text-sm font-bold">admin@TeknokratZamrud.com</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ── MAIN CONTENT ── --}}
    @yield('content')

    {{-- ── FOOTER ── --}}
    <footer class="bg-[#0a1628] pt-20 pb-10 border-t border-sky-900/20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                {{-- Brand --}}
                <div class="col-span-1 lg:col-span-1">
                    <a href="{{ route('beranda') }}" class="flex items-center gap-2.5 mb-6">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo TZI">
                        </div>
                        <div class="leading-tight uppercase">
                            <p class="text-white text-base font-bold tracking-wide text-center">Teknokrat</p>
                            <p class="text-sky-400 text-[11px] font-light tracking-wide">Zamrud Integrasi</p>
                        </div>
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Spesialis integrasi teknis dan instalasi terkemuka yang berbasis di Pekanbaru.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <iconify-icon icon="solar:camera-bold"></iconify-icon>
                        </a>
                        <a href="#"
                            class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <iconify-icon icon="solar:videocamera-record-bold"></iconify-icon>
                        </a>
                        <a href="mailto:admin@TeknokratZamrud.com"
                            class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <iconify-icon icon="solar:letter-bold"></iconify-icon>
                        </a>
                    </div>
                </div>

                {{-- Perusahaan --}}
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">Perusahaan</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="{{ route('tentang') }}" class="hover:text-sky-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">Cerita Kami</a></li>
                    </ul>
                </div>

                {{-- Layanan --}}
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">Layanan</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="{{ route('layanan') }}" class="hover:text-sky-400 transition-colors">Instalasi Elektronika</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-sky-400 transition-colors">Sistem HVAC (Pendingin)</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-sky-400 transition-colors">Desain Interior</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-sky-400 transition-colors">Infrastruktur IT</a></li>
                    </ul>
                </div>

                {{-- Legal --}}
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">Legal</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-sky-400 transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">Status Layanan</a></li>
                    </ul>
                </div>
            </div>

            {{-- Bottom --}}
            <div class="pt-10 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-[10px] font-bold uppercase tracking-[0.15em]">
                <p>© {{ date('Y') }} PT. Teknokrat Zamrud Integrasi. Didirikan Maret 2023, Pekanbaru. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                    <a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Kontak</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- ── SCRIPTS ── --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // AOS Init
        AOS.init({ duration: 900, once: true, offset: 80 });

        // Mobile Menu Logic
        const menuOpen = document.getElementById('menu-open');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuOpen && menuClose && mobileMenu) {
            menuOpen.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
            });

            menuClose.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                document.body.style.overflow = '';
            });

            const links = mobileMenu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                    document.body.style.overflow = '';
                });
            });
        }
    </script>

    @yield('scripts')
</body>

</html>
