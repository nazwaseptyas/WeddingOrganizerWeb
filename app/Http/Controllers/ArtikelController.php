<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['indexxx', 'detail', 'search', 'tampilkanartikel']);
    }
    
     public function indexxx()
    {
        $data = Artikel::orderBy('tgl_artikel', 'desc')->paginate(3);
        return view('artikel', compact('data'));
    }

    public function indexxxx()
    {
        $data = Artikel::all();
        return view('tabelartikel', compact('data'));
    }

    public function tambahArtikel()
    {
    $data = null; // Beri nilai default null, atau isi dengan data jika diperlukan
    return view('tambahartikel', compact('data'));
    }

    public function simpanArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tgl_artikel' => 'required|date',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');

        $user = User::where('email', 'admin@gmail.com')->first();

        Artikel::create([
            'user_id' => $user->id_users, // Simpan user_id dari pengguna yang sedang login
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_artikel' => $request->tgl_artikel,
            'isi' => $request->isi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function detail($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        return view('detail', compact('data'));
    }

    public function delete($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        $data->delete();
        return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil dihapus');
    }

    public function search(Request $request)
{
    $keyword = $request->input('q');

    // Lakukan pencarian berdasarkan judul artikel
    $data = Artikel::where('judul', 'LIKE', '%' . $keyword . '%')
                   ->orderBy('tgl_artikel', 'desc')
                   ->get();

    // Debugging untuk memastikan data hasil pencarian
    // dd($data);

    return view('search', compact('data', 'keyword'));
}

    public function tampilkanartikel($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        return view('tampilartikel', compact('data'));
    }
    
    public function updateArtikel(Request $request, $id_artikel)
    {
        $data = Artikel::find($id_artikel);

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tgl_artikel' => 'required|date',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada gambar yang diunggah, simpan gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            Storage::delete('public/' . $data->gambar);

            // Simpan gambar baru ke direktori /public/images
            $gambar = $request->file('gambar')->store('images', 'public');
            $data->gambar = $gambar;
        }

        $user = User::where('email', 'admin@gmail.com')->first();
        $data->update([
            'user_id' => $user->id_users,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_artikel' => $request->tgl_artikel,
            'isi' => $request->isi,
        ]);

        return redirect()->route('tabelartikel')->with('success', 'Artikel berhasil diupdate');
    }

}