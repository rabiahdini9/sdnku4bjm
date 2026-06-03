@extends('layouts.admin')

@section('content')

<div class="p-6">

    <div class="mb-5">
        <h1 class="text-2xl font-bold mb-3">
            Data Struktur Organisasi
        </h1>
    </div>

    <table class="w-full mt-4 bg-white shadow rounded-xl overflow-hidden border border-gray-300">

        <thead class="bg-gray-100">

            <tr>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Foto
                </th>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Deskripsi
                </th>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Aksi
                </th>

            </tr>

        </thead>
        <tbody>
            @foreach($struktur as $item)

            <tr class="hover:bg-gray-50 transition">

                <td class="border border-gray-300 px-6 py-6 text-center">

                    @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}"
                        class="w-32 h-32 object-cover rounded-lg mx-auto">
                    @endif
                </td>

                <td class="px-6 py-4">
                    <div class="whitespace-pre-line">
                        {{ $item->deskripsi }}
                    </div>
                </td>

                <td class="border border-gray-300 px-6 py-4">

                    <div class="flex justify-center gap-3">

                        <a href="{{ route('struktur.edit', $item->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg flex items-center gap-2 transition">

                            ✏️ 
                        </a>
                    </div>

                </td>

            </tr>

            @endforeach
        </tbody>

    </table>
</div>

@endsection