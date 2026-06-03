@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <!-- BADGE ATAS -->
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            Arah Pendidikan
        </div>

        <!-- JUDUL -->
        <h1 class="text-3xl md:text-5xl font-bold mb-4 flex items-center justify-center gap-3">
            🎯 Visi & Misi
        </h1>

        <!-- SUBTITLE -->
        <p class="text-green-100 text-lg">
            SDN Kuin Utara 4 Banjarmasin
        </p>

        <!-- SCROLL TEXT -->
        <div class="mt-10 text-sm text-green-200">
            Scroll untuk melihat
        </div>

        <!-- PANAH -->
        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>

    </div>

</section>


<!-- ================= KONTEN ================= -->
<section class="max-w-5xl mx-auto px-6 py-14">

    <!-- CARD -->
    <div class="bg-white rounded-2xl shadow p-6 md:p-8">

        <!-- GAMBAR ATAS -->
        <div class="mb-10">

            <div class="flex justify-center">

                <div class="bg-white p-3 rounded-2xl shadow-xl">
                    <img src="{{ asset('storage/' . $visimisi->foto) }}"
                        alt="Visi Misi SDN Kuin Utara 4"
                        class="w-auto max-h-[850px] rounded-xl object-contain">
                </div>

            </div>

        </div>


        <!-- VISI -->
        <div class="mb-10">

            <h2 class="text-xl font-bold text-green-700 mb-3 border-b-2 border-green-500 inline-block">
                Visi
            </h2>

            <p class="text-gray-700 leading-relaxed mt-4">
                {{ $visimisi->visi }}”
            </p>

            <h2 class="text-xl font-bold text-green-700 mt-8 mb-3 border-b-2 border-green-500 inline-block">
                Misi
            </h2>

            <div class="text-gray-700 leading-relaxed whitespace-pre-line mt-0">
                {{ $visimisi->misi }}
            </div>

        </div>

</section>

@endsection