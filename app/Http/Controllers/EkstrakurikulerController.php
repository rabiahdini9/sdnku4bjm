<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();

        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('ekstrakurikuler', 'public');
        }

        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
            'waktu' => $request->waktu,
            'pembina' => $request->pembina,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $foto = $ekstrakurikuler->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('ekstrakurikuler', 'public');
        }

        $ekstrakurikuler->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
            'waktu' => $request->waktu,
            'pembina' => $request->pembina,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index');
    }

    public function destroy($id)
    {
        Ekstrakurikuler::destroy($id);

        return redirect()->route('admin.ekstrakurikuler.index');
    }

    public function publicIndex()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();

        return view('ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function show($id)
    {
        $ekskul = \App\Models\Ekstrakurikuler::findOrFail($id);

        return view('ekskul-detail', compact('ekskul'));
    }
}
