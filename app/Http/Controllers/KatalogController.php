<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function adminkatalog()
    {
        $data = Katalog::all();
        return view('adminkatalog', ['data' => $data]);
    }
    public function tambahKatalog()
    {
        $data = null; 
        return view('addkatalog', compact('data'));
    }
    public function simpanKatalog(Request $request)
    {
    $request->validate([
        'nama_paket' => 'required',
        'isi_katalog' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'biaya' => 'required',
    ]);
    $gambar = $request->file('gambar')->store('images', 'public');
    $user = User::where('email', 'admin@gmail.com')->first();
    $katalog = Katalog::create([
    'user_id' => $user->id_users,
    'nama_paket' => $request->nama_paket,
    'isi_katalog' => $request->isi_katalog,
    'gambar' => $gambar,
    'biaya' => $request->biaya,   
    ]);
    return redirect()->route('adminkatalog', $katalog->id_katalog);
    }
    public function delete($id_katalog)
    {
        $data = Katalog::find($id_katalog);
        $data->delete();
        return redirect()->route('adminkatalog')->with('success', 'Katalog berhasil dihapus');
    }
    public function detail($id_katalog)
    {
        $data = Katalog::find($id_katalog);
        return view('detail', compact('data'));
    }
        public function katalog()
    {
        $data = Katalog::all();
        return view('katalog', compact('data'));
    }
    public function tampilkankatalog($id_katalog)
    {
        $data = Katalog::find($id_katalog);
        return view('editkatalog', compact('data'));
    }
    public function updateKatalog(Request $request, $id_katalog)
    {
    $data = Katalog::find($id_katalog);
    $request->validate([
        'nama_paket' => 'required',
        'isi_katalog' => 'required',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'biaya' => 'required',
    ]);
    if ($request->hasFile('gambar')) {
        Storage::delete('public/' . $data->gambar);
        $gambar = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambar;
    }
    $user = User::where('email', 'admin@gmail.com')->first();
    $data->user_id = $user->id_users;
    $data->nama_paket = $request->nama_paket;
    $data->isi_katalog = $request->isi_katalog;
    $data->biaya = $request->biaya;
    $data->save();
    return redirect()->route('adminkatalog')->with('success', 'Katalog berhasil diupdate');
    }
}