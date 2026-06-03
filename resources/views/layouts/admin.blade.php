<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex">

        <!-- SIDEBAR -->
        <div class="w-64 bg-green-700 text-white min-h-screen p-6">
            <h2 class="text-3xl font-bold mb-8">Admin</h2>

            <ul class="space-y-2 text-sm">

                <!-- DASHBOARD -->
                <li>
                    <a href="/"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>🏠</span>
                        <span>Beranda</span>
                    </a>
                </li>

                <!-- PROFIL SEKOLAH -->
                <p class="mt-6 mb-2 text-xs text-green-200 uppercase tracking-wider">
                    Profil
                </p>

                <li>
                    <a href="{{ route('identitas.index') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">

                        <span class="w-4 flex justify-center">
                            🏫
                        </span>

                        <span>
                            Identitas Sekolah
                        </span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.prestasi.index') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">

                        <span class="w-4 flex justify-center">
                            🏆
                        </span>

                        <span>
                            Prestasi Sekolah
                        </span>

                    </a>
                </li>
                <li>
                    <a href="/visimisi"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>🎯</span>
                        <span>Visi & Misi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('struktur.index') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>🛠</span>
                        <span>Struktur Organisasi</span>
                    </a>
                </li>


                <!-- DATA -->
                <p class="mt-6 mb-2 text-xs text-green-200 uppercase tracking-wider">
                    Data
                </p>

                <li>
                    <a href="{{ route('gtk.index') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-green-600 transition">

                        <span>👨‍🏫</span>
                        <span>Data GTK</span>

                    </a>
                </li>

                <!-- INFORMASI -->
                <p class="mt-6 mb-2 text-xs text-green-200 uppercase tracking-wider">
                    Informasi
                </p>

                <li>
                    <a href="/fasilitas"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>🏢</span>
                        <span>Fasilitas</span>
                    </a>
                </li>

                <li>
                    <a href="/berita"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>📰</span>
                        <span>Berita</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.ekstrakurikuler.index') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        <span>⚽</span>
                        <span>Ekstrakurikuler</span>
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white transition">
                            <span>🚪</span>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>

            </ul>
        </div>

        <!-- CONTENT -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>

    </div>

</body>

</html>