@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">
        Tambah Fasilitas
    </h1>

    <form action="/fasilitas"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow">

        @csrf

        <input type="text"
            name="nama"
            placeholder="Nama Fasilitas"
            class="w-full border p-3 mb-3 rounded">

        <textarea name="deskripsi"
            placeholder="Deskripsi"
            class="w-full border p-3 mb-3 rounded"></textarea>

        <input type="file"
            name="foto"
            class="w-full border p-3 mb-3 rounded">

        <button type="submit"
            class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded-lg">
            Simpan
        </button>

    </form>

</div>

@endsection