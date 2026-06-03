<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil Sekolah</title>

    <link rel="icon" href="{{ asset('images/logo.png') }}?v=10" type="image/png">


    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Animasi navbar turun dari atas */
        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeDown {
            animation: fadeDown 0.7s ease-out;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data class="bg-gray-100">

    {{-- Navbar --}}
    @include('layouts.navigation')

    {{-- Konten --}}
    <main>
        @yield('content')
    </main>


    {{-- FOOTER --}}
    @if (request()->path() != '/')
    <footer class="relative bg-gradient-to-r from-green-900 via-green-800 to-green-700 text-white pt-14 pb-10 mt-20">

        <!-- overlay biar lebih halus -->
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="relative max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12">

            <!-- KOLOM 1 -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="/images/logo.png" class="w-12 h-12" alt="logo">
                    <h2 class="text-lg md:text-xl font-bold text-blue-300 leading-tight">
                        SDN Kuin Utara 4 Banjarmasin
                    </h2>
                </div>

                <p class="text-sm text-gray-200 leading-relaxed">
                    Sekolah Adiwiyata "KUBARASIHI"<br>
                    Kombel "Rambutan"
                </p>
            </div>


            <!-- KOLOM 2 -->
            <div>
                <h3 class="font-semibold mb-3 border-b border-green-400 inline-block pb-1">
                    Kontak Kami
                </h3>

                <div class="space-y-4 text-sm text-gray-200 mt-3 leading-relaxed">

                    <div>
                        <p class="font-semibold text-white">Alamat</p>
                        <p>
                            Jl. Hksn, Kuin Utara, Kec. Banjarmasin Utara,<br>
                            Kota Banjarmasin, Kalimantan Selatan 70127
                        </p>
                    </div>

                    <div>
                        <p class="font-semibold text-white">Email</p>
                        <p class="hover:text-white transition">
                            sdnku4bjm@gmail.com
                        </p>
                    </div>

                    <div>
                        <p class="font-semibold text-white">Telepon</p>
                        <p class="hover:text-white transition">
                            0851-2620-0356
                        </p>
                    </div>

                    <!-- SOSIAL -->
                    <div class="mt-5 space-y-2 text-sm text-gray-200">

                        <!-- Instagram -->
                        <a href="https://instagram.com/sdnkuinutara4"
                            target="_blank"
                            class="flex items-center gap-2 hover:text-white transition">
                            📷 <span>@sdnkuinutara4</span>
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtube.com/@SDNKuinUtara4Banjarmasin"
                            target="_blank"
                            class="flex items-center gap-2 hover:text-white transition">
                            ▶️ <span>SDN Kuin Utara 4 Banjarmasin</span>
                        </a>

                    </div>

                </div>
            </div>


            <!-- KOLOM 3 -->
            <div>
                <h3 class="font-semibold mb-3 border-b border-green-400 inline-block pb-1">
                    Lokasi Sekolah
                </h3>

                <!-- MAP -->
                <div class="mt-4 bg-white/10 backdrop-blur-sm p-3 rounded-xl shadow-lg">
                    <iframe
                        src="https://www.google.com/maps?q=SDN+Kuin+Utara+4+Banjarmasin&output=embed"
                        class="w-full h-56 rounded-lg border-0"
                        loading="lazy">
                    </iframe>
                </div>

                <!-- BUTTON -->
                <a href="https://maps.app.goo.gl/qPsTDnpfAKoHrhmw8"
                    target="_blank"
                    class="inline-block mt-4 w-full text-center bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition text-sm shadow-md">
                    📍 Buka di Google Maps
                </a>
            </div>

        </div>

    </footer>
    @endif

</body>

</html>