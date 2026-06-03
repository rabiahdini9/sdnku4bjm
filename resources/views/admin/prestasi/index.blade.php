@extends('layouts.admin')

@section('content')

<div class="p-6">

    {{-- Judul --}}
    <h1 class="text-2xl font-bold mb-3">
        Data Prestasi Sekolah
    </h1>

    {{-- Tombol Tambah --}}
    <a href="{{ route('admin.prestasi.create') }}"
       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded inline-block mb-3">

        + Tambah Data

    </a>

    {{-- Tabel --}}
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <table class="w-full text-center border-collapse">

            {{-- Head --}}
            <thead class="bg-gray-100">

                <tr>

                    <th class="p-5 border font-bold">
                        Judul Prestasi
                    </th>

                    <th class="p-5 border font-bold">
                        Tingkat
                    </th>

                    <th class="p-5 border font-bold">
                        Tahun
                    </th>

                    <th class="p-5 border font-bold">
                        Juara
                    </th>

                    <th class="p-5 border font-bold">
                        Foto
                    </th>

                    <th class="p-5 border font-bold">
                        Aksi
                    </th>

                </tr>

            </thead>

            {{-- Body --}}
            <tbody>

                @forelse($prestasi as $item)

                <tr>

                    {{-- Judul --}}
                    <td class="p-4 border">
                        {{ $item->judul }}
                    </td>

                    {{-- Tingkat --}}
                    <td class="p-4 border">
                        {{ $item->tingkat }}
                    </td>

                    {{-- Tahun --}}
                    <td class="p-4 border">
                        {{ $item->tahun }}
                    </td>

                    {{-- Juara --}}
                    <td class="p-4 border">
                        {{ $item->juara }}
                    </td>

                    {{-- Foto --}}
                    <td class="p-4 border">

                        @if($item->foto)

                            <img src="{{ asset('storage/' . $item->foto) }}"
                                 class="w-20 h-20 object-cover rounded-lg mx-auto">

                        @else

                            <span class="text-gray-400">
                                Tidak ada foto
                            </span>

                        @endif

                    </td>

                    {{-- Aksi --}}
                    <td class="p-4 border">

                        <div class="flex justify-center gap-3">

                            {{-- Edit --}}
                            <a href="{{ route('admin.prestasi.edit', $item->id) }}"
                              class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg flex items-center gap-2 transition">


                                ✏️ 

                            </a>

                            {{-- Hapus --}}
                            <form action="{{ route('admin.prestasi.destroy', $item->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Yakin ingin hapus data?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg flex items-center gap-2">


                                    🗑 

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

        
                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection