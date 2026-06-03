@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">
        Data Identitas Sekolah
    </h1>

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <table class="w-full border-collapse">

            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 border">Nama Sekolah</th>
                    <th class="p-4 border">NPSN</th>
                    <th class="p-4 border">NSS</th>
                    <th class="p-4 border">Kepala Sekolah</th>
                    <th class="p-4 border">Kontak</th>
                    <th class="p-4 border">Email</th>
                    <th class="p-4 border">Status</th>
                    <th class="p-4 border">Akreditasi</th>
                    <th class="p-4 border">Tahun Berdiri</th>
                    <th class="p-4 border">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($identitas as $item)

                <tr class="text-center">

                    <td class="p-4 border">
                        {{ $item->nama_sekolah }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->npsn }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->nss }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->kepala_sekolah }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->kontak }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->email }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->status_sekolah }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->akreditasi }}
                    </td>

                    <td class="p-4 border">
                        {{ $item->tahun_berdiri }}
                    </td>

                    <td class="p-4 border">

                        <div class="flex items-center justify-center gap-3">

                            {{-- Tombol Edit --}}
                            <a href="{{ route('identitas.edit', $item->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg flex items-center gap-2 transition">

                                ✏️ 

                            </a>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="11" class="p-6 text-center">
                        Data belum ada
                    </td>
                </tr>

                @endforelse
            </tbody>
        </table>

    </div>

</div>

@endsection