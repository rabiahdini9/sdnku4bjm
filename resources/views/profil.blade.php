@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-700 to-green-800 text-white py-24 text-center">

    <div class="max-w-4xl mx-auto px-4">

        <span class="bg-white/20 px-4 py-1 rounded-full text-sm">
            Profil Institusi
        </span>

        <h1 class="text-5xl font-bold mt-6">
            🏫 Identitas Sekolah
        </h1>

        <p class="mt-4 text-lg opacity-90">
            Profil lengkap SDN Kuin Utara 4 Banjarmasin
        </p>

        <p class="mt-10 text-sm opacity-70">
            Scroll untuk melanjutkan
        </p>

        <div class="mt-2 animate-bounce text-2xl">⌄</div>

    </div>

</section>


@if (! $identitas)
    <div class="bg-gray-100 py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center">
                <h2 class="text-2xl font-bold text-green-700 mb-4">Data identitas sekolah belum tersedia</h2>
                <p class="text-gray-600">Silakan lengkapi data identitas pada halaman admin sebelum menampilkan profil sekolah.</p>
            </div>
        </div>
    </div>
@else

<!-- ================= CONTENT ================= -->
<div class="bg-gray-100 py-16 px-4">

    <div class="max-w-5xl mx-auto -mt-32">

        <div class="bg-white rounded-2xl shadow-xl overflow-visible">

            <!-- HEADER CARD -->
            <div class="bg-gradient-to-r from-green-800 to-green-600 text-white p-6 flex items-center gap-4">

                <div class="bg-white/20 p-3 rounded-xl text-2xl">
                    🏫
                </div>

                <!-- NAMA + NPSN NSS -->
                <div class="flex flex-col">

                    <h1 class="text-2xl md:text-3xl font-bold leading-tight">
                        {{ $identitas->nama_sekolah }}
                    </h1>

                    <div class="flex flex-wrap items-center gap-2 mt-2">

                        <span class="bg-white/20 px-3 py-1 rounded-full text-xs md:text-sm">
                            {{ $identitas->npsn }}
                        </span>

                        <span class="bg-white/20 px-3 py-1 rounded-full text-xs md:text-sm">
                            {{ $identitas->nss }}
                        </span>

                    </div>

                </div>

            </div>

            <!-- ISI -->
            <div class="p-6 grid md:grid-cols-2 gap-6">

                <!-- KIRI -->
                <div class="space-y-6">

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-xl">👤</div>
                        <div>
                            <p class="text-gray-500 text-sm">KEPALA SEKOLAH</p>
                            <h3 class="font-semibold text-lg">
                                {{ $identitas->kepala_sekolah }}
                            </h3>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-xl">📞</div>
                        <div>
                            <p class="text-gray-500 text-sm">KONTAK</p>
                            <h3 class="font-semibold">
                                {{ $identitas->kontak }}
                            </h3>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-xl">✉️</div>
                        <div>
                            <p class="text-gray-500 text-sm">EMAIL</p>
                            <h3 class="font-semibold">
                                {{ $identitas->email }}
                            </h3>
                        </div>
                    </div>

                </div>

                <!-- KANAN -->
                <div class="space-y-4">

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-xl">📍</div>
                        <div>
                            <p class="text-gray-500 text-sm">ALAMAT LENGKAP</p>
                            <p class="text-gray-700">
                                {!! nl2br(e($identitas->alamat)) !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- INFORMASI TAMBAHAN -->
            <div class="border-t p-6">

                <h2 class="text-lg font-semibold mb-4">ℹ️ Informasi Tambahan</h2>

                <div class="grid md:grid-cols-3 gap-4">

                    <div class="bg-gray-100 p-4 rounded-xl">
                        <p class="text-gray-500 text-sm">STATUS SEKOLAH</p>
                        <h3 class="font-semibold">
                            {{ $identitas->status_sekolah }}
                        </h3>
                    </div>

                    <div class="bg-gray-100 p-4 rounded-xl">
                        <p class="text-gray-500 text-sm">AKREDITASI</p>
                        <h3 class="font-semibold">
                            {{ $identitas->akreditasi }}
                        </h3>
                    </div>

                    <div class="bg-gray-100 p-4 rounded-xl">
                        <p class="text-gray-500 text-sm">TAHUN BERDIRI</p>
                        <h3 class="font-semibold">
                            {{ $identitas->tahun_berdiri }}
                        </h3>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endif

@endsection