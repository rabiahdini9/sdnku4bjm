@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit GTK</h1>

<form action="{{ route('gtk.update', $gtk->id) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <input type="text"
        name="nama"
        value="{{ $gtk->nama }}"
        class="w-full border p-3 mb-3 rounded">

    <input type="text"
        name="jabatan"
        value="{{ $gtk->jabatan }}"
        class="w-full border p-3 mb-3 rounded">

    <input type="text"
        name="status_kepegawaian"
        value="{{ $gtk->status_kepegawaian }}"
        class="w-full border p-3 mb-3 rounded">

    <input type="file"
        name="foto"
        class="w-full border p-3 mb-3 rounded">

    <button class="bg-blue-600 text-white px-5 py-2 rounded">
        Update
    </button>

</form>

@endsection