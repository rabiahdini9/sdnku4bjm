@extends('layouts.admin')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">Tambah Visi Misi</h1>

    <!-- Cembung sedikit saja -->
    <div class="bg-white p-6 rounded-lg shadow-md">

       <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="visi" placeholder="Visi"
                class="w-full border p-2 mb-3 rounded-md">

            <textarea name="misi" placeholder="Misi"
                class="w-full border p-2 mb-3 rounded-md"></textarea>

            <!-- TAMBAH FOTO -->
            <div class="mb-3">
                <label class="block mb-2 font-semibold">Foto</label>

                <input type="file" name="foto"
                    class="w-full border p-2 rounded-md">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded-md">
                Simpan
            </button>

        </form>

    </div>

</div>
@endsection