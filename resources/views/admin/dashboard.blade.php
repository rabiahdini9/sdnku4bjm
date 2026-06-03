@extends('layouts.admin')

@section('content')
<div class="flex min-h-screen bg-gray-100">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-green-700 text-white p-5">
        <h2 class="text-2xl font-bold mb-6">
            Admin - {{ Auth::user()->name }}
        </h2>

        <nav class="space-y-3">
            <a href="/admin/dashboard" class="block px-3 py-2 rounded hover:bg-green-600">Dashboard</a>
            <a href="/sejarah" class="block px-3 py-2 rounded hover:bg-green-600">Profil Sekolah</a>
            <a href="/guru" class="block px-3 py-2 rounded hover:bg-green-600">Data Guru</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-red-500 mt-4">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-6">

        <!-- HEADER -->
        <div class="bg-white p-4 rounded-lg shadow mb-6 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Dashboard Admin</h1>

            <div class="text-gray-600">
                👋 {{ Auth::user()->name }}
            </div>
        </div>

        <!-- CARD INFO -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-5 rounded-lg shadow">
                <h3 class="text-gray-500">Total User</h3>
                <p class="text-2xl font-bold mt-2">10</p>
            </div>

            <div class="bg-white p-5 rounded-lg shadow">
                <h3 class="text-gray-500">Data Guru</h3>
                <p class="text-2xl font-bold mt-2">5</p>
            </div>

            <div class="bg-white p-5 rounded-lg shadow">
                <h3 class="text-gray-500">Berita</h3>
                <p class="text-2xl font-bold mt-2">3</p>
            </div>

        </div>

        <!-- WELCOME -->
        <div class="bg-white p-6 rounded-lg shadow mt-6">
            <h2 class="text-lg font-semibold mb-2">
                Selamat datang, {{ Auth::user()->name }}
            </h2>

            <p class="text-gray-600">
                Ini adalah halaman dashboard admin. Kamu bisa mengelola data website di sini.
            </p>
        </div>

    </main>
</div>
@endsection