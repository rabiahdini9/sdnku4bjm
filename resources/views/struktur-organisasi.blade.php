@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            Profil Institusi
        </div>

        <h1 class="text-3xl md:text-5xl font-bold mb-4 flex items-center justify-center gap-3">
            🏫 Struktur Organisasi
        </h1>

        <p class="text-green-100 text-lg">
            SDN Kuin Utara 4 Banjarmasin
        </p>

        <div class="mt-10 text-sm text-green-200">
            Scroll untuk melihat
        </div>

        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>

    </div>
</section>


<!-- ================= KONTEN ================= -->
<section class="max-w-5xl mx-auto px-6 py-12">

    <div class="bg-white rounded-2xl shadow p-8">

        <!-- FOTO (SAMA SEPERTI VISI MISI) -->
        <div class="relative rounded-xl overflow-hidden shadow mb-10">

            <img src="{{ asset('storage/' . $struktur->foto) }}"
                alt="Struktur Organisasi"
                class="w-full max-h-[500px] object-contain mx-auto">

        </div>

        <div class="text-gray-700 leading-relaxed text-justify whitespace-pre-line">
            {{ $struktur->deskripsi }}
        </div>
    </div>

</section>

@endsection