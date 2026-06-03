<nav x-data="{ mobileOpen: false }"
    x-cloak
    class="fixed top-0 left-0 w-full bg-green-600 border-b border-green-700 shadow-md z-50
           transition-all duration-500 ease-in-out animate-fadeDown">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- KIRI -->
            <div class="flex items-center">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" class="w-10">
                        <span class="text-white font-bold">
                            SDN Kuin Utara 4 Banjarmasin
                        </span>
                    </a>
                </div>

                <!-- MENU -->
                <div class="hidden sm:flex space-x-6 ms-10 items-center">

                    <a href="/home" class="text-white hover:text-gray-200">Beranda</a>

                    <!-- PROFIL -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="text-white flex items-center gap-1">
                            Profil

                            <svg :class="{'rotate-180': open}"
                                class="w-4 h-4"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- DROPDOWN -->
                        <div x-show="open"
                            x-cloak
                            @click.outside="open = false"
                            class="absolute left-0 mt-2 w-56 bg-white text-black rounded-lg shadow-xl z-50">

                            <a href="/identitas-sekolah" class="block px-4 py-2 hover:bg-gray-100">Identitas Sekolah</a>
                            <a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
                            <a href="/struktur-organisasi" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                            <a href="/data-gtk" class="block px-4 py-2 hover:bg-gray-100">Data GTK</a>
                            <a href="/fasilitas-sekolah" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
                            <a href="/ekstrakurikuler-sekolah" class="block px-4 py-2 hover:bg-gray-100">
                                Ekstrakurikuler
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('berita.public') }}" class="text-white hover:text-gray-200">Berita</a>

                    <!-- INFORMASI -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="text-white flex items-center gap-1">
                            Informasi

                            <svg :class="{'rotate-180': open}"
                                class="w-4 h-4"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- DROPDOWN -->
                        <div x-show="open"
                            x-cloak
                            @click.outside="open = false"
                            class="absolute left-0 mt-2 w-48 bg-white text-black rounded-lg shadow-xl z-50">

                            <a href="/ppdb" class="block px-4 py-2 hover:bg-gray-100">PPDB</a>
                            <a href="/prestasi" class="block px-4 py-2 hover:bg-gray-100">Prestasi Sekolah</a>

                        </div>
                    </div>

                    <a href="/kontak" class="text-white hover:text-gray-200">Kontak</a>

                </div>
            </div>

            <!-- KANAN -->
            <div class="hidden sm:flex sm:items-center">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 text-white hover:bg-white/30 transition">

                            <span class="text-lg">👋</span>

                            <span class="font-medium">
                                Hi, {{ Auth::user()->name }}
                            </span>

                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @endauth

                <!-- HAMBURGER -->
                <div class="flex items-center sm:hidden">
                    <button @click="mobileOpen = !mobileOpen" class="text-white text-2xl">
                        ☰
                    </button>
                </div>

            </div>
        </div>

        <!-- MENU HP -->
        <div :class="{'block': mobileOpen, 'hidden': !mobileOpen}" class="hidden sm:hidden bg-green-500">
            <div class="px-4 py-2 space-y-2">
                <a href="/home" class="block text-white">Beranda</a>
                <a href="/profil" class="block text-white">Profil Sekolah</a>
                <a href="/visi-misi" class="block text-white">Visi & Misi</a>
                <a href="/kontak" class="block text-white">Kontak</a>
            </div>
        </div>

</nav>