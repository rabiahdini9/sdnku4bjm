<?php

namespace App\Http\Controllers;

use App\Models\Gtk;
use Illuminate\Http\Request;

class GtkController extends Controller
{
    public function index()
    {
        $gurus = Gtk::orderByRaw("
        CASE 
            WHEN jabatan = 'Kepala sekolah' THEN 0
            ELSE 1
        END
    ")->get();

        return view('admin.gtk.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.gtk.create');
    }

    public function store(Request $request)
    {
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('gtk', 'public');
        }

        Gtk::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'status_kepegawaian' => $request->status_kepegawaian,
            'foto' => $foto,
        ]);

        return redirect()->route('gtk.index');
    }

    public function edit($id)
    {
        $gtk = Gtk::findOrFail($id);
        return view('admin.gtk.edit', compact('gtk'));
    }

    public function update(Request $request, $id)
    {
        $gtk = Gtk::findOrFail($id);

        $foto = $gtk->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('gtk', 'public');
        }

        $gtk->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $foto,
        ]);

        return redirect()->route('gtk.index');
    }

    public function destroy($id)
    {
        $gtk = Gtk::findOrFail($id);
        $gtk->delete();

        return back();
    }

    public function publicIndex()
    {
        $gurus = Gtk::orderByRaw("
        CASE 
            WHEN jabatan = 'Kepala sekolah' THEN 0
            ELSE 1
        END
    ")->get();

        return view('data-gtk', compact('gurus'));
    }
}
