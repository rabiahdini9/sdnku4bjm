@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-20 text-center">
    <div class="max-w-3xl mx-auto px-6">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            Detail Berita
        </div>

        <h1 class="text-3xl md:text-4xl font-bold mb-4">
            {{ $post['title'] }}
        </h1>

    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="bg-gray-100 py-16">
    <div class="max-w-4xl mx-auto px-6">

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <!-- GAMBAR -->
            <img
                src="{{ isset($post['image']) ? asset('storage/' . $post['image']) : 'https://via.placeholder.com/800x400?text=No+Image' }}"
                alt="{{ $post['title'] }}"
                class="w-full h-72 object-cover">

            <!-- ISI -->
            <div class="p-6">

                <h2 class="text-2xl font-bold mb-4">
                    {{ $post['title'] }}
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    {{ $post['content'] }}
                </p>

            </div>

        </div>

        <!-- TOMBOL DI LUAR CARD (KIRI SEPERTI PRAMUKA) -->
        <div class="mt-6">
            <a href="{{ route('berita.index') }}"
                class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg shadow transition duration-300">
                ← Kembali ke Berita
            </a>
        </div>
    </div>
</section>

@endsection