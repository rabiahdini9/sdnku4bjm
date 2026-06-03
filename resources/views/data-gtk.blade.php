@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-b from-green-800 to-green-700 text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">

        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-4 backdrop-blur">
            Direktori
        </div>

        <h1 class="text-4xl md:text-5xl font-bold mb-3">
            👨‍🏫 Data Guru & Tenaga Kependidikan
        </h1>

        <p class="text-green-100 text-base">
            SDN Kuin Utara 4 Banjarmasin
        </p>

        <p class="mt-6 text-sm opacity-70">
            Scroll untuk melihat
        </p>

        <div class="mt-2 text-xl animate-bounce">
            ↓
        </div>

    </div>
</section>

<section class="max-w-6xl mx-auto px-6 mt-20 pb-10">

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach($gurus as $item)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 text-center relative">

            <span class="absolute top-3 left-3 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">
                {{ $item->status_kepegawaian }}
            </span>

            <div class="mb-3">
                <img src="{{ asset('storage/' . $item->foto) }}"
                    class="w-20 h-20 mx-auto rounded-full object-cover border-4 border-green-100">
            </div>

            <h3 class="font-semibold text-gray-800">
                {{ $item->nama }}
            </h3>

            <p class="text-gray-500 text-sm mt-1">
                {{ $item->jabatan }}
            </p>

            <button onclick="openModal(
                '{{ $item->nama }}',
                '{{ $item->jabatan }}',
                '{{ $item->status_kepegawaian }}',
                '{{ asset('storage/' . $item->foto) }}'
            )"
                class="inline-block mt-3 text-xs bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                Lihat Profil
            </button>

        </div>
        @endforeach

    </div>

</section>
<!-- ================= MODAL ================= -->
<div id="modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-3xl p-6 relative">

        <!-- CLOSE -->
        <button onclick="closeModal()"
            class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">
            ✕
        </button>

        <div class="grid md:grid-cols-2 gap-6 items-center">

            <!-- KIRI -->
            <div>
                <div class="flex items-center gap-4 mb-4">
                    <img id="modalFoto" src="" class="w-20 h-20 rounded-full object-cover border">
                    <div>
                        <h2 id="modalNama" class="text-xl font-bold"></h2>
                        <p class="text-blue-600 text-sm">GTK • Aktif</p>
                    </div>
                </div>

                <hr class="my-4">

                <h3 class="text-sm font-semibold text-gray-500 mb-2">INFORMASI</h3>

                <p class="text-sm text-gray-600">
                    Jabatan: <span id="modalJabatan"></span>
                </p>

                <p class="text-sm text-gray-600 mt-1">
                    Status: <span id="modalStatus" class="text-green-600 font-semibold"></span>
                </p>
            </div>

            <!-- KANAN -->
            <div class="text-center">
                <img id="modalFotoBesar" src=""
                    class="w-40 h-56 object-cover rounded-xl mx-auto mb-3">

                <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">
                    Status: Aktif
                </span>
            </div>

        </div>

    </div>

</div>


<script>
    function openModal(nama, jabatan, status, foto) {
        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modal').classList.add('flex');

        document.getElementById('modalNama').innerText = nama;
        document.getElementById('modalJabatan').innerText = jabatan;
        document.getElementById('modalStatus').innerText = status;

        document.getElementById('modalFoto').src = foto;
        document.getElementById('modalFotoBesar').src = foto;
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
        document.getElementById('modal').classList.remove('flex');
    }
</script>

@endsection