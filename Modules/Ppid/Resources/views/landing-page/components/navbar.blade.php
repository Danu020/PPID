<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-lg"
                        style="background-color: var(--primary-blue);">
                        <img src="{{ asset('logo_poliwangi.jpg') }}" alt="logo poliwangi">
                    </div>
                    <span class="ml-3 text-xl font-semibold" style="color: var(--primary-blue);">
                        PPID Poliwangi
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-6">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-white' : 'text-gray-700 hover:text-white hover:bg-opacity-80' }}"
                        style="{{ request()->routeIs('home') ? 'background-color: var(--primary-blue);' : '' }}"
                        onmouseover="if(!this.classList.contains('text-white')) this.style.backgroundColor='var(--primary-blue)'"
                        onmouseout="if(!this.classList.contains('text-white')) this.style.backgroundColor=''">
                        Beranda
                    </a>

                    <!-- Profil Menu with Dropdown -->
                    <div class="relative group">
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 text-gray-700 hover:text-white hover:bg-opacity-80 flex items-center"
                            onmouseover="this.style.backgroundColor='var(--primary-blue)'"
                            onmouseout="this.style.backgroundColor=''">
                            Profil
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Sambutan Direktur
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Profil PPID
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Visi dan Misi
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Publik Menu with Dropdown -->
                    <div class="relative group">
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 text-gray-700 hover:text-white hover:bg-opacity-80 flex items-center"
                            onmouseover="this.style.backgroundColor='var(--primary-blue)'"
                            onmouseout="this.style.backgroundColor=''">
                            Informasi Publik
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="{{ route('publik.i-regulasi.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Regulasi
                                </a>
                                <a href="{{ route('publik.i-publik.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Daftar Informasi Publik
                                </a>
                                <a href="{{ route('publik.i-dikecualikan.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Informasi Publik Dikecualikan
                                </a>
                                <a href="{{ route('publik.i-setiap-saat.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Informasi Setiap Saat
                                </a>
                                <a href="{{ route('publik.i-berkala.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Informasi Berkala
                                </a>
                                <a href="{{ route('publik.i-serta-merta.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Informasi Serta-Merta
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Layanan Informasi Menu with Dropdown -->
                    <div class="relative group">
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 text-gray-700 hover:text-white hover:bg-opacity-80 flex items-center"
                            onmouseover="this.style.backgroundColor='var(--primary-blue)'"
                            onmouseout="this.style.backgroundColor=''">
                            Layanan Informasi
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="{{ route('publik.l-maklumat.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Maklumat Layanan
                                </a>
                                <a href="{{ route('publik.l-standar.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Standar Layanan
                                </a>
                                <a href="{{ route('publik.l-permohonan-informasi.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Permohonan Informasi
                                </a>
                                <a href="{{ route('publik.l-permohonan-keberatan.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Keberatan Informasi
                                </a>
                                <a href="{{ route('publik.l-permohonan-sengketa.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Penyelesaian Sengketa
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Publikasi Menu with Dropdown -->
                    <div class="relative group">
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 text-gray-700 hover:text-white hover:bg-opacity-80 flex items-center"
                            onmouseover="this.style.backgroundColor='var(--primary-blue)'"
                            onmouseout="this.style.backgroundColor=''">
                            Publikasi
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="{{ route('publikasi.berita.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Berita
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150">
                                    Pengumuman
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('home.index') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('download') ? 'text-white' : 'text-gray-700 hover:text-white hover:bg-opacity-80' }}"
                        style="{{ request()->routeIs('download') ? 'background-color: var(--primary-blue);' : '' }}"
                        onmouseover="if(!this.classList.contains('text-white')) this.style.backgroundColor='var(--primary-blue)'"
                        onmouseout="if(!this.classList.contains('text-white')) this.style.backgroundColor=''">
                        Login
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    style="hover:background-color: var(--primary-blue);" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-white' : 'text-gray-700' }}"
                style="{{ request()->routeIs('home') ? 'background-color: var(--primary-blue);' : '' }}">
                Beranda
            </a>

            <!-- Mobile Profil Menu -->
            <div class="block">
                <button onclick="toggleSubmenu('profil')"
                    class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 flex items-center justify-between">
                    Profil
                    <svg id="profil-arrow" class="h-4 w-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="profil-submenu" class="hidden pl-6 space-y-1">
                    <a href="#" class="block px-3 py-2 text-sm text-gray-600">Sambutan Direktur</a>
                    <a href="#" class="block px-3 py-2 text-sm text-gray-600">Profil PPID</a>
                    <a href="#" class="block px-3 py-2 text-sm text-gray-600">Visi dan Misi</a>
                </div>
            </div>

            <!-- Mobile Informasi Publik Menu -->
            <div class="block">
                <button onclick="toggleSubmenu('informasi')"
                    class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 flex items-center justify-between">
                    Informasi Publik
                    <svg id="informasi-arrow" class="h-4 w-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="informasi-submenu" class="hidden pl-6 space-y-1">
                    <a href="{{ route('publik.i-regulasi.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Regulasi</a>
                    <a href="{{ route('publik.i-publik.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Daftar Informasi Publik</a>
                    <a href="{{ route('publik.i-dikecualikan.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Informasi Publik Dikecualikan</a>
                    <a href="{{ route('publik.i-setiap-saat.index') }} class="block px-3 py-2 text-sm
                        text-gray-600">Informasi Setiap Saat</a>
                    <a href="{{ route('publik.i-berkala.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Informasi Berkala</a>
                    <a href="{{ route('publik.i-serta-merta.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Informasi Serta-Merta</a>
                </div>
            </div>

            <!-- Mobile Layanan Informasi Menu -->
            <div class="block">
                <button onclick="toggleSubmenu('layanan')"
                    class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 flex items-center justify-between">
                    Layanan Informasi
                    <svg id="layanan-arrow" class="h-4 w-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="layanan-submenu" class="hidden pl-6 space-y-1">
                    <a href="{{ 'publik.l-maklumat.index' }}" class="block px-3 py-2 text-sm text-gray-600">Maklumat
                        Layanan</a>
                    <a href="{{ route('publik.l-standar.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Standar Layanan</a>
                    <a href="{{ route('publik.l-permohonan-informasi.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Permohonan Informasi</a>
                    <a href="{{ route('publik.l-permohonan-keberatan.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Keberatan Informasi</a>
                    <a href="{{ route('publik.l-permohonan-sengketa.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Penyelesaian Sengketa</a>
                </div>
            </div>

            <!-- Mobile Publikasi Menu -->
            <div class="block">
                <button onclick="toggleSubmenu('publikasi')"
                    class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 flex items-center justify-between">
                    Publikasi
                    <svg id="publikasi-arrow" class="h-4 w-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="publikasi-submenu" class="hidden pl-6 space-y-1">
                    <a href="{{ route('publikasi.berita.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600">Berita</a>
                    <a href="#" class="block px-3 py-2 text-sm text-gray-600">Pengumuman</a>
                </div>
            </div>

            <a href="{{ route('home.index') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700">
                Login
            </a>
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }

    function toggleSubmenu(menuType) {
        const submenu = document.getElementById(menuType + '-submenu');
        const arrow = document.getElementById(menuType + '-arrow');

        submenu.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }
</script>
