@extends('layouts.admin')

@section('content')

<div class="p-6">

   <h1 class="text-xl font-bold mb-4">
        Tambah Identitas Sekolah
    </h1>

    <div class="bg-white rounded-2xl shadow-md p-6">

        <form action="{{ route('identitas.store') }}"
              method="POST">

            @csrf

            {{-- Nama Sekolah --}}
            <div class="mb-4">
                <input type="text"
                       name="nama_sekolah"
                       placeholder="Nama Sekolah"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- NPSN --}}
            <div class="mb-4">
                <input type="text"
                       name="npsn"
                       placeholder="NPSN"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- NSS --}}
            <div class="mb-4">
                <input type="text"
                       name="nss"
                       placeholder="NSS"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Kepala Sekolah --}}
            <div class="mb-4">
                <input type="text"
                       name="kepala_sekolah"
                       placeholder="Kepala Sekolah"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Kontak --}}
            <div class="mb-4">
                <input type="text"
                       name="kontak"
                       placeholder="Kontak"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <input type="email"
                       name="email"
                       placeholder="Email"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Alamat --}}
            <div class="mb-4">
                <textarea name="alamat"
                          rows="4"
                          placeholder="Alamat"
                          class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>

            {{-- Status Sekolah --}}
            <div class="mb-4">
                <input type="text"
                       name="status_sekolah"
                       placeholder="Status Sekolah"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Akreditasi --}}
            <div class="mb-4">
                <input type="text"
                       name="akreditasi"
                       placeholder="Akreditasi"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Tahun Berdiri --}}
            <div class="mb-6">
                <input type="text"
                       name="tahun_berdiri"
                       placeholder="Tahun Berdiri"
                       class="w-full border rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Tombol Simpan --}}
            <button type="submit"
                   class="bg-green-600 text-white px-4 py-2 rounded-md">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection