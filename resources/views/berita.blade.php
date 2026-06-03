@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6">
            Informasi Sekolah
        </div>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Berita Sekolah
        </h1>

        <p class="text-green-100 text-lg">
            Update kegiatan dan informasi terbaru sekolah
        </p>

        <p class="mt-6 text-sm opacity-70">
            Scroll untuk melihat
        </p>

        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>

    </div>
</section>


<!-- BERITA -->
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-6">

            @foreach($posts as $item)

            <div class="bg-white rounded-2xl shadow hover:shadow-lg overflow-hidden">

                <img src="{{ asset('storage/' . $item->foto) }}"
                    class="w-full h-48 object-cover">

                <div class="p-5">

                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">
                        Berita
                    </span>

                    <h3 class="text-xl font-bold mt-3 mb-1">
                        {{ $item->judul }}
                    </h3>

                    <p class="text-xs text-gray-400 mb-3">
                        📅 {{ $item->tanggal }}
                    </p>

                    <p class="text-gray-600 text-sm mb-3">
                        {{ Str::limit($item->deskripsi, 100) }}
                    </p>

                    <a href="{{ route('berita.detail', $item->id) }}"
                        class="text-green-600 font-semibold text-sm">
                        Baca selengkapnya →
                    </a>

                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>
@endsection