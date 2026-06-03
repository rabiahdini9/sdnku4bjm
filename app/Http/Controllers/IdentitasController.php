<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = Identitas::all();

        return view('admin.identitas.index', compact('identitas'));
    }

    public function create()
    {
        return view('admin.identitas.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nama = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $nama);
            $data['logo'] = $nama;
        }

        Identitas::create($data);

        return redirect()->route('identitas.index');
    }

    public function edit($id)
    {
        $identitas = \App\Models\Identitas::findOrFail($id);

        return view('admin.identitas.edit', compact('identitas'));
    }

    public function update(Request $request, $id)
    {
        $identitas = Identitas::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nama = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $nama);
            $data['logo'] = $nama;
        }

        $identitas->update($data);

        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $identitas = Identitas::findOrFail($id);

        $identitas->delete();

        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function home()
    {
        $identitas = Identitas::latest()->first();

        return view('home', compact('identitas'));
    }

    public function showPublic()
    {
        $identitas = Identitas::latest()->first();

        return view('profil', compact('identitas'));
    }
}
