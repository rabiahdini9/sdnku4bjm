<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = VisiMisi::all();
        return view('admin.visimisi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'visi' => $request->visi,
            'misi' => $request->misi,
        ];

        // Upload foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('visimisi', 'public');
            $data['foto'] = $path;
        }

        VisiMisi::create($data);

        return redirect()->route('visimisi.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $visimisi = VisiMisi::findOrFail($id);

        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'visi' => $request->visi,
            'misi' => $request->misi,
        ];

        // Upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($visimisi->foto && Storage::disk('public')->exists($visimisi->foto)) {
                Storage::disk('public')->delete($visimisi->foto);
            }

            $path = $request->file('foto')->store('visimisi', 'public');
            $data['foto'] = $path;
        }

        $visimisi->update($data);

        return redirect()->route('visimisi.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $visimisi = VisiMisi::findOrFail($id);

        // Hapus foto
        if ($visimisi->foto && Storage::disk('public')->exists($visimisi->foto)) {
            Storage::disk('public')->delete($visimisi->foto);
        }

        $visimisi->delete();

        return redirect()->route('visimisi.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function publicIndex()
    {
        $visimisi = VisiMisi::latest()->first();

        return view('visi-misi', compact('visimisi'));
    }
}
