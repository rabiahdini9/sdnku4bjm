<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur = StrukturOrganisasi::all();

        return view('admin.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('struktur', 'public');
        }

        StrukturOrganisasi::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect('/struktur');
    }

    public function edit($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);

        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);

        $foto = $struktur->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('struktur', 'public');
        }

        $struktur->update([
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect('/struktur');
    }

    public function destroy($id)
    {
        StrukturOrganisasi::destroy($id);

        return redirect('/struktur');
    }

    public function publicIndex()
    {
        $struktur = \App\Models\StrukturOrganisasi::latest()->first();

        return view('struktur-organisasi', compact('struktur'));
    }
}
