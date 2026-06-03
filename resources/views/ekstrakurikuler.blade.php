@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            🎓 EKSTRAKURIKULER
        </div>

        <h1 class="text-3xl md:text-5xl font-bold mb-4">
            Kegiatan Ekstrakurikuler
        </h1>

        <p class="text-green-100 text-lg mb-10">
            Wadah Pengembangan Bakat, Minat, dan Karakter Siswa di Luar Kelas
        </p>

        <div class="mt-10 text-sm text-green-200">
            Scroll untuk melihat
        </div>

        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>

    </div>
</section>


<!-- ================= CONTENT ================= -->
<div class="max-w-6xl mx-auto px-6 -mt-20">

    <div class="bg-white rounded-2xl shadow-lg p-8">

        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
            Ekstrakurikuler Sekolah
        </h2>

        <p class="text-gray-500 mb-8">
            Kegiatan untuk mengembangkan bakat, minat, dan karakter siswa.
        </p>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-6">

            @foreach($ekstrakurikuler as $item)

            <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg transition">

                <img src="{{ asset('storage/' . $item->foto) }}"
                    class="w-full h-48 object-cover rounded-lg mb-3">

                <h3 class="text-xl font-bold text-green-700 mb-2 text-center">
                    {{ $item->nama }}
                </h3>

                <p class="text-gray-600 mb-4 text-justify leading-8">
                    {{ $item->deskripsi }}
                </p>

                <a href="{{ route('ekskul.show', $item->id) }}"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                    Lihat Detail →
                </a>

            </div>

            @endforeach

        </div>

    </div>
</div>

@endsection