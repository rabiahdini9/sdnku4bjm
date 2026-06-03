@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-5">
        Edit Berita
    </h1>

    <form action="/berita/{{ $berita->id }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow">

        @csrf
        @method('PUT')

        <input type="text"
            name="judul"
            value="{{ $berita->judul }}"
            class="w-full border p-3 mb-3 rounded">

        <textarea name="deskripsi"
            class="w-full border p-3 mb-3 rounded">{{ $berita->deskripsi }}</textarea>

        <input type="date"
            name="tanggal"
            value="{{ $berita->tanggal }}"
            class="w-full border p-3 mb-3 rounded">

        <input type="file"
            name="foto"
            class="w-full border p-3 mb-3 rounded">

        <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded">
            Update
        </button>

    </form>

</div>

@endsection