@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        Edit Struktur
    </h1>

    <div class="bg-white p-6 rounded-xl shadow border border-gray-200">

        <form action="/struktur/{{ $struktur->id }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-5">
                <textarea
                    name="deskripsi"
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none">{{ $struktur->deskripsi }}</textarea>
            </div>

            <div class="mb-5">
                <input
                    type="file"
                    name="foto"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">
            </div>

            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">
                Update
            </button>

        </form>

    </div>

</div>

@endsection