<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * =========================
     * HALAMAN PUBLIK (USER)
     * =========================
     */

    // Tampilkan semua berita (PUBLIC)
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Kegiatan Pramuka Berjalan Sukses',
                'content' => 'Kegiatan pramuka diikuti seluruh siswa dengan penuh semangat.',
                'image' => 'pramuka.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Lomba Paskibra Tingkat Kota',
                'content' => 'Tim paskibra sekolah meraih juara 2 tingkat kota.',
                'image' => 'paskibra.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Kegiatan Karya Ilmiah Siswa',
                'content' => 'Siswa mempresentasikan hasil penelitian mereka.',
                'image' => 'karya-ilmiah.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Kegiatan Karya Ilmiah Siswa',
                'content' => 'Siswa mempresentasikan hasil penelitian mereka.',
                'image' => 'karya-ilmiah.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Kegiatan Karya Ilmiah Siswa',
                'content' => 'Siswa mempresentasikan hasil penelitian mereka.',
                'image' => 'karya-ilmiah.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Kegiatan Karya Ilmiah Siswa',
                'content' => 'Siswa mempresentasikan hasil penelitian mereka.',
                'image' => 'karya-ilmiah.jpg'
            ],
        ];

        return view('berita', compact('posts'));
    }

    // Detail berita (sementara dummy juga biar gak error)
    public function show($id)
    {
        $posts = collect($this->index()->getData()['posts']);
        $post = $posts->firstWhere('id', $id);

        if (!$post) {
            abort(404);
        }

        return view('berita.show', compact('post'));
    }

    /**
     * =========================
     * HALAMAN ADMIN (CRUD)
     * =========================
     */

    public function indexAdmin()
    {
        $posts = Post::latest()->get();
        return view('admin.berita.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image'
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('berita', 'public');
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image
        ]);

        return redirect('/admin/berita')->with('success', 'Berhasil tambah berita');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.berita.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('berita', 'public');
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $post->image
        ]);

        return redirect('/admin/berita')->with('success', 'Berhasil update');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return back()->with('success', 'Berhasil hapus');
    }
}