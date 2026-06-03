@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-16">
    <div class="max-w-4xl mx-auto px-6">

        <h1 class="text-4xl font-bold mt-4">
            {{ $posts->judul }}
        </h1>

        <p class="mt-3 text-green-100">
            Isi lengkap berita sekolah ditampilkan di sini.
        </p>

    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <img src="{{ asset('storage/' . $posts->foto) }}"
                class="w-full h-96 object-cover rounded-xl mb-6">

            <p class="text-gray-700 leading-8 text-justify">
                {{ $posts->deskripsi }}
            </p>
        </div>

        <div class="mt-8">
            <a href="/berita-sekolah"
                class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow transition">
                ← Kembali ke Berita
            </a>
        </div>

    </div>
</section>

@endsection