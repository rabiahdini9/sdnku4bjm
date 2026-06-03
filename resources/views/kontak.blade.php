@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24 text-center">
    <div class="max-w-5xl mx-auto px-6 text-center">

        <!-- LABEL -->
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-4 backdrop-blur">
            Hubungi Kami
        </div>

        <!-- JUDUL -->
        <h1 class="text-3xl md:text-5xl font-bold mb-3 flex items-center justify-center gap-3">
            📞 Kontak Sekolah
        </h1>

        <!-- SUBTITLE -->
        <p class="text-green-100 text-lg">
            SDN Kuin Utara 4 Banjarmasin
        </p>

        <p class="mt-6 text-sm opacity-70">
            Scroll untuk melihat
        </p>

        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>
    </div>
</section>


<!-- ================= CONTENT ================= -->
<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="grid md:grid-cols-2 gap-8 items-start">

            <!-- KOLOM KIRI -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Hubungi Kami
                </h2>

                <!-- Alamat -->
                <div class="flex items-start gap-3 mb-5">
                    <span class="text-xl">📍</span>
                    <p class="text-gray-700">
                        Jl. Hksn, Kuin Utara, Kec. Banjarmasin Utara,
                        Kota Banjarmasin, Kalimantan Selatan 70127
                    </p>
                </div>

                <!-- Telepon -->
                <div class="flex items-center gap-3 mb-5">
                    <span class="text-xl">📞</span>
                    <p class="text-gray-700">+62 851-2620-0356</p>
                </div>

                <!-- Email -->
                <div class="flex items-center gap-3 mb-5">
                    <span class="text-xl">✉️</span>
                    <p class="text-gray-700">sdnku4bjm@gmail.com</p>
                </div>

                <!-- Jam -->
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-xl">🕒</span>
                    <p class="text-gray-700">Senin - Kamis: 07.30 - 14.30 <br>

                        Jum'at: 07.30 - 11.00 <br>

                        Sabtu: 07.30 - 13.30 </p>
                </div>

                <!-- Sosial Media -->
                <div>
                    <p class="font-semibold text-gray-800 mb-3">
                        Social Media:
                    </p>

                    <div class="flex gap-4">

                        <!-- Instagram -->
                        <a href="https://instagram.com/sdnkuinutara4"
                            target="_blank"
                            class="w-12 h-12 bg-[#1E2749] rounded-full flex items-center justify-center text-white text-xl hover:scale-105 transition">
                            📷
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtube.com/@SDNKuinUtara4Banjarmasin"
                            target="_blank"
                            class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white text-xl hover:scale-105 transition">
                            ▶️
                        </a>

                    </div>
                </div>
            </div>


            <!-- KOLOM KANAN (MAPS) -->
            <div class="rounded-xl overflow-hidden shadow border">
                <iframe
                    src="https://maps.google.com/maps?q=SDN%20Kuin%20Utara%204%20Banjarmasin&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </div>

</section>

@endsection