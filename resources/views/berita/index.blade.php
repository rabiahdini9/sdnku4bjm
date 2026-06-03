@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-br from-green-50 to-green-100 py-16 overflow-hidden">

    <!-- Background blur -->
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-green-300 opacity-20 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-green-400 opacity-20 blur-3xl rounded-full"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4">

        <!-- JUDUL -->
        <div class="text-center mb-14">
            <h1 class="text-3xl md:text-4xl font-bold text-green-700 text-center mt-10 mb-10">
                Berita Sekolah
            </h1>
            <div class="w-20 h-1 bg-green-500 mx-auto mt-3 rounded"></div>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-10 mt-6">

            @forelse ($posts as $post)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <!-- GAMBAR -->
                @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}"
                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                @else
                <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-400">
                    Tidak ada gambar
                </div>
                @endif

                <!-- ISI -->
                <div class="p-5">

                    <!-- TANGGAL -->
                    <p class="text-xs text-gray-400 mb-2">
                        {{ $post->created_at->format('d M Y') }}
                    </p>

                    <!-- JUDUL -->
                    <h2 class="text-lg font-bold text-green-700 mb-2 line-clamp-2">
                        {{ $post->title }}
                    </h2>

                    <!-- ISI -->
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        {{ \Illuminate\Support\Str::limit($post->content, 100) }}
                    </p>

                    <!-- BUTTON -->
                    <a href="/berita/{{ $post->id }}"
                        class="inline-block text-sm bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>
            @empty

            <div class="col-span-3 text-center text-gray-500">
                Belum ada berita
            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection