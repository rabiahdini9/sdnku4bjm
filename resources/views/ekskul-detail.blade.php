@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-20 text-center">
    <h1 class="text-4xl font-bold">
        {{ $ekskul->nama }}
    </h1>
</section>

<!-- ================= CONTENT ================= -->
<section class="bg-gray-100 py-16">
    <div class="max-w-4xl mx-auto px-6">

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <!-- GAMBAR -->
            <img
                src="{{ asset('storage/' . $ekskul->foto) }}"
                alt="{{ $ekskul->nama }}"
                class="w-full h-64 object-cover">

            <!-- ISI -->
            <div class="p-6">

                <!-- Deskripsi -->
                <p class="text-gray-700 text-lg leading-relaxed mb-6 text-justify">
                    {{ $ekskul->deskripsi }}
                </p>

                <!-- Waktu -->
                <div class="border-t pt-4 mt-4">
                    <h3 class="font-semibold text-green-700">
                        🕒 Waktu Kegiatan
                    </h3>
                    <p class="text-gray-700 whitespace-pre-line">
                        {{ $ekskul->waktu }}
                    </p>
                </div>

                <!-- Pembina -->
                <div class="border-t pt-4 mt-4">
                    <h3 class="font-semibold text-green-700">
                        👩‍🏫 Pembina
                    </h3>
                    <p class="text-gray-700">
                        {{ $ekskul->pembina }}
                    </p>
                </div>

            </div>

        </div>

        <!-- TOMBOL KEMBALI -->
        <div class="mt-6 flex justify-start">
            <a href="{{ route('ekstrakurikuler.public') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow-md transition duration-300">
                ← Kembali
            </a>
        </div>

    </div>
</section>

@endsection