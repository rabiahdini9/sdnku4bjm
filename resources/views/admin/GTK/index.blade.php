@extends('layouts.admin')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Data GTK</h1>

    <a href="{{ route('gtk.create') }}"
        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg inline-block mb-4">
        + Tambah Data
    </a>

    <div class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm">

        <table class="w-full">

            <thead class="bg-gray-100 text-gray-800">
                <tr>

                    <th class="px-6 py-4 text-center font-bold text-[15px] border-r border-gray-300">
                        Foto
                    </th>

                    <th class="px-6 py-4 text-center font-bold text-[15px] border-r border-gray-300">
                        Nama
                    </th>

                    <th class="px-6 py-4 text-center font-bold text-[15px] border-r border-gray-300">
                        Jabatan
                    </th>

                    <th class="px-6 py-4 text-center font-bold text-[15px] border-r border-gray-300">
                        Status Kepegawaian
                    </th>

                    <th class="px-6 py-4 text-center font-bold text-[15px] w-52">
                        Aksi
                    </th>

                </tr>
            </thead>

            <tbody>

                @foreach($gurus as $item)

                <tr class="border-t border-gray-200">

                    <td class="py-4 px-6 text-center border-r border-gray-300">

                        @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}"
                            class="w-10 h-10 object-cover rounded-md mx-auto">
                        @endif

                    </td>

                    <td class="py-4 px-6 text-center text-[14px] border-r border-gray-300">
                        {{ $item->nama }}
                    </td>

                    <td class="py-4 px-6 text-center text-[14px] border-r border-gray-300">
                        {{ $item->jabatan }}
                    </td>

                    <td class="py-4 px-6 text-center text-[14px] border-r border-gray-300">
                        {{ $item->status_kepegawaian }}
                    </td>

                    <td class="py-4 px-6">

                        <div class="flex justify-center gap-3">

                            <a href="{{ route('gtk.edit', $item->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg flex items-center gap-2 transition">

                                ✏️ 
                            </a>

                            <form action="{{ route('gtk.destroy', $item->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg flex items-center gap-2 transition">

                                    🗑️ 
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>
@endsection