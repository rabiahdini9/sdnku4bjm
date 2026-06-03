@extends('layouts.admin')

@section('content')

<div class="p-6">

    <div class="mb-5">
        <h1 class="text-2xl font-bold mb-4">
            Data Fasilitas
        </h1>

        <a href="/fasilitas/create"
            class="bg-green-600 text-white px-4 py-2 rounded">
            + Tambah Data
        </a>
    </div>

    <table class="w-full bg-white rounded-xl overflow-hidden shadow border border-gray-200">

        <thead class="bg-gray-100">
            <tr>

                <th class="p-4 border-r border-gray-200 text-center font-bold">
                    Foto
                </th>

                <th class="p-4 border-r border-gray-200 text-center font-bold">
                    Nama
                </th>

                <th class="p-4 border-r border-gray-200 text-center font-bold">
                    Deskripsi
                </th>

                <th class="p-4 text-center font-bold">
                    Aksi
                </th>

            </tr>
        </thead>

        <tbody>
            @foreach($fasilitas as $item)

            <tr class="border-t border-gray-200 bg-white">

                <!-- FOTO -->
                <td class="p-4 border-r border-gray-200 text-center">
                    @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}"
                        class="w-24 h-24 object-cover rounded mx-auto">
                    @endif
                </td>

                <!-- NAMA -->
                <td class="p-4 border-r border-gray-200 text-center">
                    {{ $item->nama }}
                </td>

                <!-- DESKRIPSI -->
                <td class="p-4 border-r border-gray-200 text-center">
                    {{ $item->deskripsi }}
                </td>

                {{-- Aksi --}}
                <td class="p-4 border">

                    <div class="flex justify-center items-center gap-3">

                        {{-- Edit --}}
                        <a href="{{ route('fasilitas.edit', $item->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-3 rounded-xl flex items-center gap-2">

                            <span> ✏️ </span>
                            

                        </a>

                        {{-- Hapus --}}
                        <form action="{{ route('fasilitas.destroy', $item->id) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-5 py-3 rounded-xl flex items-center gap-2">

                                <span>🗑</span>
                                

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