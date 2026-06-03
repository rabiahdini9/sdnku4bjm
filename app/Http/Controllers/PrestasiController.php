<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::orderByRaw("
        CASE
            WHEN judul LIKE '%Menyanyi Solo%'
            AND tingkat LIKE '%Kota%'
            THEN 0

            WHEN tingkat LIKE '%Kecamatan%'
            THEN 1

            ELSE 2
        END
    ")
            ->orderBy('id', 'desc')
            ->get();

      return view('admin.prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {

            $foto = $request->file('foto')
                ->store('prestasi', 'public');
        } else {

            $foto = null;
        }

        Prestasi::create([

            'judul' => $request->judul,
            'tingkat' => $request->tingkat,
            'tahun' => $request->tahun,
            'juara' => $request->juara,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,

        ]);

        return redirect()->route('admin.prestasi.index');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        if ($request->hasFile('foto')) {

            $foto = $request->file('foto')
                ->store('prestasi', 'public');

            $prestasi->foto = $foto;
        }

        $prestasi->judul = $request->judul;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->tahun = $request->tahun;
        $prestasi->juara = $request->juara;
        $prestasi->deskripsi = $request->deskripsi;

        $prestasi->save();

        return redirect()->route('admin.prestasi.index');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index');
    }

    public function publicIndex()
    {
        $prestasi = Prestasi::orderByRaw("
        CASE
            WHEN judul LIKE '%Menyanyi Solo%'
            AND tingkat LIKE '%Kota%'
            THEN 0

            WHEN tingkat LIKE '%Kecamatan%'
            THEN 1

            ELSE 2
        END
    ")
            ->orderBy('id', 'desc')
            ->get();

         return view('prestasi', compact('prestasi'));
    }
}
