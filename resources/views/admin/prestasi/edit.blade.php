@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-4xl font-bold text-green-700 mb-6">
        Edit Prestasi Sekolah
    </h1>

    <div class="bg-white rounded-2xl shadow-md p-6">

        <form action="{{ route('admin.prestasi.update', $prestasi->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-4">

                <input type="text"
                       name="judul"
                       value="{{ $prestasi->judul }}"
                       placeholder="Judul Prestasi"
                       class="w-full border rounded-lg p-4">

            </div>

            {{-- Tingkat --}}
            <div class="mb-4">

                <input type="text"
                       name="tingkat"
                       value="{{ $prestasi->tingkat }}"
                       placeholder="Tingkat"
                       class="w-full border rounded-lg p-4">

            </div>

            {{-- Tahun --}}
            <div class="mb-4">

                <input type="text"
                       name="tahun"
                       value="{{ $prestasi->tahun }}"
                       placeholder="Tahun"
                       class="w-full border rounded-lg p-4">

            </div>

            {{-- Juara --}}
            <div class="mb-4">

                <input type="text"
                       name="juara"
                       value="{{ $prestasi->juara }}"
                       placeholder="Juara"
                       class="w-full border rounded-lg p-4">

            </div>

            {{-- Foto Lama --}}
            @if($prestasi->foto)

            <div class="mb-4">

                <label class="font-semibold block mb-2">
                    Foto Saat Ini
                </label>

                <img src="{{ asset('storage/' . $prestasi->foto) }}"
                     class="w-40 h-40 object-cover rounded-xl border">

            </div>

            @endif

            {{-- Upload Foto Baru --}}
            <div class="mb-6">

                <label class="font-semibold">
                    Ganti Foto
                </label>

                <input type="file"
                       name="foto"
                       class="w-full border rounded-lg p-3 mt-2">

            </div>

            {{-- Tombol --}}
            <div class="flex gap-3">

                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg">

                     Update

                </button>
            </div>

        </form>

    </div>

</div>

@endsection