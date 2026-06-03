@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">
        Tambah Prestasi Sekolah
    </h1>

    <div class="bg-white rounded-2xl shadow-md p-6">

        <form action="{{ route('admin.prestasi.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="mb-4">
                <input type="text"
                    name="judul"
                    placeholder="Judul Prestasi"
                    class="w-full border rounded-lg p-4">
            </div>

            <div class="mb-4">
                <input type="text"
                    name="tingkat"
                    placeholder="Tingkat"
                    class="w-full border rounded-lg p-4">
            </div>

            <div class="mb-4">
                <input type="text"
                    name="tahun"
                    placeholder="Tahun"
                    class="w-full border rounded-lg p-4">
            </div>

            <div class="mb-4">
                <input type="text"
                    name="juara"
                    placeholder="Juara"
                    class="w-full border rounded-lg p-4">
            </div>

            <div class="mb-6">

                <label class="font-semibold">
                    Foto
                </label>

                <input type="file"
                    name="foto"
                    class="w-full border rounded-lg p-3 mt-2">

            </div>

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded-lg">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection