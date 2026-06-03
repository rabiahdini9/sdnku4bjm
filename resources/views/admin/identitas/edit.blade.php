@extends('layouts.admin')

@section('content')
<div class="p-8">

    <!-- Judul -->
    <h1 class="text-4xl font-bold mb-8">
        Edit Identitas Sekolah
    </h1>

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow p-6 max-w-5xl">

        <form action="{{ route('identitas.update', $identitas->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-5">
            
            @csrf
            @method('PUT')

            <!-- Nama Sekolah -->
            <div>
                <label class="block mb-2 font-semibold">Nama Sekolah</label>
                <input type="text"
                    name="nama_sekolah"
                    value="{{ $identitas->nama_sekolah }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- NPSN -->
            <div>
                <label class="block mb-2 font-semibold">NPSN</label>
                <input type="text"
                    name="npsn"
                    value="{{ $identitas->npsn }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- NSS -->
            <div>
                <label class="block mb-2 font-semibold">NSS</label>
                <input type="text"
                    name="nss"
                    value="{{ $identitas->nss }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Kepala Sekolah -->
            <div>
                <label class="block mb-2 font-semibold">Kepala Sekolah</label>
                <input type="text"
                    name="kepala_sekolah"
                    value="{{ $identitas->kepala_sekolah }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Kontak -->
            <div>
                <label class="block mb-2 font-semibold">Kontak</label>
                <input type="text"
                    name="kontak"
                    value="{{ $identitas->kontak }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email"
                    name="email"
                    value="{{ $identitas->email }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Alamat -->
            <div>
                <label class="block mb-2 font-semibold">Alamat</label>
                <textarea name="alamat"
                    rows="4"
                    class="w-full border rounded-lg p-3">{{ $identitas->alamat }}</textarea>
            </div>

            <!-- Status Sekolah -->
            <div>
                <label class="block mb-2 font-semibold">Status Sekolah</label>
                <input type="text"
                    name="status_sekolah"
                    value="{{ $identitas->status_sekolah }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Akreditasi -->
            <div>
                <label class="block mb-2 font-semibold">Akreditasi</label>
                <input type="text"
                    name="akreditasi"
                    value="{{ $identitas->akreditasi }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Tahun Berdiri -->
            <div>
                <label class="block mb-2 font-semibold">Tahun Berdiri</label>
                <input type="text"
                    name="tahun_berdiri"
                    value="{{ $identitas->tahun_berdiri }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <!-- Tombol -->
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">
                Update
            </button>

        </form>
    </div>
</div>
@endsection