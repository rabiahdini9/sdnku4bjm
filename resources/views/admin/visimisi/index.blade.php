@extends('layouts.admin')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Data Visi & Misi</h1>

    <table class="w-full mt-4 bg-white shadow rounded-lg overflow-hidden border border-gray-300">

        <!-- HEADER -->
        <thead class="bg-gray-100">

            <tr>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Visi
                </th>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Misi
                </th>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Foto
                </th>

                <th class="p-5 border text-black font-extrabold text-xl">
                    Aksi
                </th>

            </tr>

        </thead>

        <!-- DATA -->
        @foreach($data as $item)
        <tr class="border-t border-gray-300 hover:bg-gray-50 transition">

            <!-- VISI -->
            <td class="p-6 border-r border-gray-300 align-top">
                {{ $item->visi }}
            </td>

            <!--misi-->
            <td class="px-4 py-3 border-r border-gray-300 align-top">
                <div class="whitespace-pre-line text-left">
                    {{ $item->misi }}
                </div>
            </td>

            <!-- FOTO -->
            <td class="px-6 py-4 text-center border-r border-gray-300">
                <img src="{{ asset('storage/' . $item->foto) }}"
                    class="w-20 h-20 object-cover rounded mx-auto">
            </td>

            <!-- AKSI -->
            <td class="p-4">
                <div class="flex justify-center items-center gap-3">

                    <!-- EDIT -->
                    <a href="{{ route('visimisi.edit', $item->id) }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg flex items-center gap-2 transition">
                        ✏️ 
                    </a>

                </div>
            </td>

        </tr>
        @endforeach

    </table>
</div>
@endsection