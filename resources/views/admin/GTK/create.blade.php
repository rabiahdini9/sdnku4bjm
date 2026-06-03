@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">Tambah GTK</h1>

    <!-- Tambahan box seperti form sebelumnya -->
    <div class="bg-white p-6 rounded-lg shadow-md">

        <form action="{{ route('gtk.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf


            <input type="text"
                name="nama"
                placeholder="Nama"
                class="w-full border p-3 mb-3 rounded-md"
                required>

            <input type="text"
                name="jabatan"
                placeholder="Jabatan"
                class="w-full border p-3 mb-3 rounded-md"
                required>

            <input type="text"
                name="status_kepegawaian"
                placeholder="Status Kepegawaian"
                class="w-full border p-3 mb-3 rounded-md"
                required>

            <input type="file"
                name="foto"
                class="w-full border p-3 mb-3 rounded-md">

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded-lg">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection