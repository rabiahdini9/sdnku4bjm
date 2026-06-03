<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GtkController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ================== HALAMAN UTAMA ==================
Route::get('/', [IdentitasController::class, 'home'])->name('home');
Route::get('/home', [IdentitasController::class, 'home']);
Route::get('/identitas-sekolah', [IdentitasController::class, 'showPublic'])
    ->name('identitas.public');



// ================== PROFIL ==================
Route::prefix('profil')->group(function () {

    Route::view('/', 'profil.sejarah')->name('profil.index');

    Route::get('/visi-misi', [VisiMisiController::class, 'publicIndex'])
        ->name('profil.visi');

    Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'publicIndex'])
        ->name('profil.struktur');

    Route::view('/fasilitas', 'profil.fasilitas')->name('profil.fasilitas');
    Route::view('/ekstrakurikuler', 'profil.ekskul')->name('profil.ekskul');
});


// ================== HALAMAN LAIN ==================
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/ppdb', 'ppdb')->name('ppdb');

Route::get('/prestasi', [PrestasiController::class, 'publicIndex'])
    ->name('prestasi');


// ================== USER ==================
Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/data-gtk', [GtkController::class, 'publicIndex'])
    ->name('profil.gtk');


Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'publicIndex'])
    ->name('struktur.public');


Route::get('/fasilitas', [FasilitasController::class, 'indexUser']);

// ================= EKSTRAKURIKULER UNTUK PENGUNJUNG =================
Route::get('/ekstrakurikuler-sekolah', [EkstrakurikulerController::class, 'publicIndex'])
    ->name('ekstrakurikuler.public');


Route::get('/ekskul/{id}', [EkstrakurikulerController::class, 'show'])
    ->name('ekskul.show');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('visimisi', VisiMisiController::class);
});


Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('struktur', StrukturOrganisasiController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('gtk', GtkController::class);
});

Route::resource('fasilitas', FasilitasController::class);

Route::resource('berita', BeritaController::class);


// ================== BERITA UNTUK PENGUNJUNG ==================
Route::get('/berita-sekolah', [BeritaController::class, 'publicIndex'])->name('berita.public');

Route::get('/berita-sekolah/{id}', [BeritaController::class, 'showPublic'])
    ->name('berita.detail');

Route::get('/berita-detail/{id}', function ($id) {
    return view('berita-detail', compact('id'));
});

Route::get('/fasilitas-sekolah', [FasilitasController::class, 'indexUser'])
    ->name('fasilitas.public');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/ekstrakurikuler', EkstrakurikulerController::class)
        ->names('admin.ekstrakurikuler');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('identitas', IdentitasController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/prestasi', PrestasiController::class)
        ->names('admin.prestasi');
});

Route::get('/visi-misi', [VisiMisiController::class, 'publicIndex'])
    ->name('profil.visi');

// ================== AUTH ==================
require __DIR__ . '/auth.php';
