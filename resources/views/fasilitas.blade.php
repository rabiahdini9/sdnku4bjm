@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            Informasi
        </div>

        <h1 class="text-3xl md:text-5xl font-bold mb-4 flex items-center justify-center gap-3">
            🏫 Fasilitas Sekolah
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

<!-- ================= FASILITAS ================= -->
<section class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

        @foreach ($fasilitas as $item)
        <div class="bg-white rounded-2xl shadow hover:shadow-xl transition duration-300 overflow-hidden">

            <!-- GAMBAR -->
            <div class="h-40 bg-gray-200 overflow-hidden">
                <img src="{{ asset('storage/' . $item->foto) }}"
                    class="w-full h-full object-cover">
            </div>

            <!-- KONTEN -->
            <div class="p-5 text-center">

                <h3 class="font-semibold text-lg text-gray-800">
                    {{ $item->nama }}
                </h3>

                <p class="text-gray-600 text-sm text-justify leading-relaxed">
                    {{ $item->deskripsi }}
                </p>
            </div>

        </div>
        @endforeach

    </div>

</section>

@endsection