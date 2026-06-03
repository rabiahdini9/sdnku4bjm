<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function indexUser()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('fasilitas', 'public');
        }

        Fasilitas::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect('/fasilitas');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $foto = $fasilitas->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('fasilitas', 'public');
        }

        $fasilitas->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect('/fasilitas');
    }

    public function destroy($id)
    {
        Fasilitas::destroy($id);
        return redirect('/fasilitas');
    }
}
