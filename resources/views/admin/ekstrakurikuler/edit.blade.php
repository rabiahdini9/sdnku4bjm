@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-6">
        Edit Ekstrakurikuler
    </h1>

    <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id) }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow">

        @csrf
        @method('PUT')

        <!-- NAMA -->
        <input type="text"
            name="nama"
            value="{{ $ekstrakurikuler->nama }}"
            placeholder="Nama"
            class="w-full border p-3 mb-3 rounded">

        <!-- DESKRIPSI -->
        <textarea name="deskripsi"
            class="w-full border p-3 mb-3 rounded"
            placeholder="Deskripsi">{{ $ekstrakurikuler->deskripsi }}</textarea>

        <!-- WAKTU -->
        <textarea name="waktu"
            class="w-full border p-3 mb-3 rounded"
            placeholder="Waktu Kegiatan">{{ $ekstrakurikuler->waktu }}</textarea>

        <!-- PEMBINA -->
        <input type="text"
            name="pembina"
            value="{{ $ekstrakurikuler->pembina }}"
            placeholder="Nama Pembina"
            class="w-full border p-3 mb-3 rounded">

        <!-- FOTO -->
        <input type="file"
            name="foto"
            class="w-full border p-3 mb-3 rounded">

        <!-- FOTO LAMA -->
        @if($ekstrakurikuler->foto)
            <img src="{{ asset('storage/' . $ekstrakurikuler->foto) }}"
                class="w-32 mt-3 rounded">
        @endif

        <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded mt-4">
            Update
        </button>

    </form>

</div>

@endsection