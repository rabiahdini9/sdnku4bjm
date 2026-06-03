<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        Siswa::create([
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
        ]);

        return redirect()->route('siswa.index');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
        ]);

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();

        return back();
    }
}
