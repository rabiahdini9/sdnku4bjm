@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">
        Tambah Ekstrakurikuler
    </h1>

    <form action="{{ route('admin.ekstrakurikuler.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow">

        @csrf

        <input type="text"
            name="nama"
            placeholder="Nama"
            class="w-full border p-3 mb-3 rounded">

        <textarea name="deskripsi"
            placeholder="Deskripsi"
            class="w-full border p-3 mb-3 rounded"></textarea>

        <textarea name="waktu"
            placeholder="Waktu Kegiatan"
            class="w-full border p-3 mb-3 rounded"></textarea>

        <input type="text"
            name="pembina"
            placeholder="Nama Pembina"
            class="w-full border p-3 mb-3 rounded">

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