@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">
        Edit Visi Misi
    </h1>

    <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Visi
            </label>

            <input type="text"
                name="visi"
                value="{{ $visimisi->visi }}"
                class="w-full border p-3 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Misi
            </label>

            <textarea
                name="misi"
                rows="5"
                class="w-full border p-3 rounded">{{ $visimisi->misi }}</textarea>
        </div>
        
        <!-- INPUT FOTO BARU -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Ganti Foto
            </label>

            <input type="file"
                name="foto"
                class="w-full border p-3 rounded">
        </div>

        <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
            Update
        </button>

    </form>

</div>

@endsection