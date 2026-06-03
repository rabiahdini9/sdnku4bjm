@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-b from-green-800 to-green-600 text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-6 backdrop-blur">
            Informasi Sekolah
        </div>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            PPDB Sekolah
        </h1>

        <p class="text-green-100 text-lg">
            Penerimaan Peserta Didik Baru SDN Kuin Utara 4 Banjarmasin
        </p>

        <div class="mt-8 text-green-200 text-sm animate-bounce">
            Scroll untuk melanjutkan
            <div class="text-xl">↓</div>
        </div>

    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- GRID UTAMA -->
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 md:col-span-3 max-w-3xl mx-auto">

                <h3 class="font-bold text-xl text-center text-green-700 mb-4">
                    📅 Jadwal Pendaftaran
                </h3>

                <img src="{{ asset('images/jadwal-ppdb.png') }}"
                    alt="Jadwal Pendaftaran"
                    class="w-full rounded-xl">

            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 md:col-span-3 max-w-3xl mx-auto">

                <h3 class="font-bold text-xl text-center text-green-700 mb-4">
                    📝 Dokumen yang Harus Disiapkan
                </h3>

                <img src="{{ asset('images/dokumen-ppdb.png') }}"
                    alt="Dokumen PPDB"
                    class="w-full rounded-xl">

            </div>

        </div>

        <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 md:col-span-3 max-w-3xl mx-auto">

            <h3 class="font-bold text-xl text-center text-green-700 mb-4">
                📝 Alur Pendaftaran PPDB Online
            </h3>

            <img src="{{ asset('images/alur-ppdb.png') }}"
                alt="Alur PPDB"
                class="w-full rounded-xl">
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-white rounded-xl shadow p-8 text-center max-w-3xl mx-auto mt-12 mb-6">

        <h2 class="text-2xl font-bold mb-4 text-green-700">
            Daftar Sekarang
        </h2>

        <p class="text-gray-600 mb-6 leading-relaxed">
            Klik tombol di bawah untuk melakukan pendaftaran online
            melalui situs resmi <br>
            <span class="font-medium text-green-700">
                banjarmasin.spmb.id
            </span>
        </p>

        <a href="https://banjarmasin.spmb.id/" target="_blank"
            class="inline-block bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl shadow-lg transition duration-300">
            🚀 Daftar PPDB
        </a>

    </div>

    </div>
</section>

@endsection