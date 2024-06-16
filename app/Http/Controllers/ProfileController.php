<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = Profile::all();
        return view('profile', compact('data'));
    }
    public function kontakkami()
    {
        $data = Profile::all();
        return view('kontak', compact('data'));
    }
    public function tambahprofile()
    {
        $data = null; 
        return view('tambahprofile', compact('data'));
    }
    public function simpanprofile(Request $request)
    {
        $request->validate([
            'web_name' => 'required',
            'desc_web' => 'required',
            'email_cont' => 'required',
            'nohp' => 'required',
            'instagram' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $gambar = $request->file('logo')->store('images', 'public');
        $user_id = Auth::id();
        Profile::create([
            'web_name' => $request->web_name,
            'desc_web' => $request->desc_web,
            'email_cont' => $request->email_cont,
            'nohp' => $request->nohp,
            'instagram' => $request->instagram,
            'logo' => $gambar,
            'user_id' => $user_id,
        ]);
        return redirect()->route('profile')->with('success','profile berhasil di tambahkan');
    }
    public function editprofile($id)
    {
        $data = Profile::find($id);
        return view('editprofile', compact('data'));
    }
    public function updateprofile(Request $request, $id_profile)
    {
        $request->validate([
            'web_name' => 'required',
            'desc_web' => 'required',
            'email_cont' => 'required',
            'nohp' => 'required',
            'instagram' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = Profile::find($id_profile);
        $data->web_name = $request->web_name;
        $data->desc_web = $request->desc_web;
        $data->email_cont = $request->email_cont;
        $data->nohp = $request->nohp;
        $data->instagram = $request->instagram;
        if ($request->hasFile('logo')) {
            // Hapus gambar lama jika ada
            Storage::delete('public/' . $data->logo);
            // Simpan gambar baru ke storage
            $gambarPath = $request->file('logo')->store('images', 'public');
            $data->logo = $gambarPath;
        }
        $data->save();
        return redirect()->route('profile')->with('success', 'profile berhasil diupdate');
    }
    public function delete($id_profile)
    {
        $data = Profile::find($id_profile);
        $data->delete();
        return redirect()->route('profile')->with('success', 'profile berhasil dihapus');
    }
}