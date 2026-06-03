@extends('layouts.admin')

@section('content')

<!-- TAMBAHAN AGAR HERO FULL SEPERTI BERANDA -->
<div class="relative -mx-6 -mt-6">

    <!-- HERO BERANDA (TAMBAHAN) -->
    <section class="bg-gradient-to-b from-green-800 to-green-700 text-white py-20 text-center">

        <div class="max-w-4xl mx-auto px-6">

            <span class="bg-white/20 px-4 py-1 rounded-full text-sm">
                Admin
            </span>

            <h1 class="text-4xl md:text-5xl font-bold mt-6">
                Dashboard Admin 👋
            </h1>

            <p class="mt-4 text-lg text-green-100">
                Kelola website SDN Kuin Utara 4 Banjarmasin
            </p>

        </div>

    </section>

</div>


<!-- CONTENT ASLI KAMU (TIDAK DIUBAH) -->
<div class="p-6">

    <!-- HEADER -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            👋 Selamat Datang, {{ auth()->user()->name ?? 'Admin' }}
        </h1>
        <p class="text-gray-500">
            Dashboard Admin SDN Kuin Utara 4 Banjarmasin
        </p>
    </div>

    <!-- STATISTIK -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">

        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow p-6 hover:scale-105 transition">
            <p class="text-gray-500 mb-2">Total Siswa</p>
            <h2 class="text-4xl font-bold text-blue-600">
                341
            </h2>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow p-6 hover:scale-105 transition">
            <p class="text-gray-500 mb-2">Total Guru</p>
            <h2 class="text-4xl font-bold text-green-600">
                21
            </h2>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow p-6 hover:scale-105 transition">
            <p class="text-gray-500 mb-2">Total Berita</p>
            <h2 class="text-4xl font-bold text-purple-600">
                3
            </h2>
        </div>

    </div>


    <!-- INFORMASI -->
    <div class="bg-white rounded-2xl p-6 shadow-md text-center">

        <h2 class="text-2xl font-bold text-gray-700 mb-3">
            Informasi Dashboard
        </h2>

        <p class="text-gray-600 leading-relaxed max-w-3xl mx-auto">
            Panel admin digunakan untuk mengatur dan memperbarui seluruh
            informasi website sekolah agar tetap aktif, informatif,
            dan terorganisir dengan baik.
        </p>

    </div>


</div>

@endsection