@extends('layouts.admin')

@section('content')

<div class="p-6">

    <div class="mb-5">
        <h1 class="text-2xl font-bold mb-4">
            Data Ekstrakurikuler
        </h1>

        <a href="{{ route('admin.ekstrakurikuler.create') }}"
            class="bg-green-600 text-white px-4 py-2 rounded">
            + Tambah Data
        </a>
    </div>

    <table class="w-full bg-white rounded-xl overflow-hidden shadow border border-gray-200">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-4 border-r text-center">Nama</th>
                <th class="p-4 border-r text-center">Foto</th>
                <th class="p-4 border-r text-center">Deskripsi</th>
                <th class="p-4 border-r text-center">Waktu Kegiatan</th>
                <th class="p-4 border-r text-center">Pembina</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ekstrakurikuler as $item)

            <tr class="border-t bg-white">

                <!-- NAMA -->
                <td class="p-4 border-r text-center">
                    {{ $item->nama }}
                </td>

                <!-- FOTO -->
                <td class="p-4 border-r text-center">
                    @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}"
                        class="w-24 h-24 object-cover rounded mx-auto">
                    @endif
                </td>

                <!-- DESKRIPSI -->
                <td class="p-4 border-r text-center">
                    {{ $item->deskripsi }}
                </td>

                <!-- WAKTU -->
                <td class="p-4 border-r text-center whitespace-pre-line">
                    {{ $item->waktu }}
                </td>

                <!-- PEMBINA -->
                <td class="p-4 border-r text-center">
                    {{ $item->pembina }}
                </td>

                <!-- AKSI -->
                <td class="p-4 text-center">
                    <div class="flex justify-center gap-3">

                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded">
                            ✏️ 
                        </a>

                        <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus?')"
                                class="bg-red-500 text-white px-4 py-2 rounded">
                                🗑
                            </button>
                        </form>

                    </div>
                </td>

            </tr>

            @endforeach
        </tbody>

    </table>

</div>

@endsection