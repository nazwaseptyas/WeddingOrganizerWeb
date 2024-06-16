<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KonsultasiController extends Controller
{
    public function indexx()
    {
        $data = Konsultasi::all();
        return view('tabelkonsultasi', compact('data'));
    }

     public function indexxk()
    {
        $data = Konsultasi::all();
        return view('konfirm', compact('data'));
    }

    public function index()
    {
        $user = Auth::user();
        $data = $user->konsultasis;
        return view('konsultasi', compact('data'));
    }

    public function konsultasi()
    {
        return view('konsultasi');
    }

    public function konfirm(Request $request)
    {
        $data = Konsultasi::where('email_konsultasi',Auth::user()->email)->get();

        return view('konfirm', compact('data'));
    }

   public function createdata(Request $request)
    {
        if (!Auth::check()) {
        return redirect()->route('login'); 
        }

        $request->validate([
            'nama' => 'required',
            'email_konsultasi' => 'required|email',
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'nohp' => 'required',
            'keluhan' => 'required',
        ]);

        Auth::user()->konsultasis()->create([
            'nama' => $request->nama,
            'email_konsultasi' => $request->email_konsultasi,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'nohp' => $request->nohp,
            'keluhan' => $request->keluhan,
        ]);

        return redirect()->route('konsultasi')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilkandata($id_konsultasis)
    {
        $data = Konsultasi::find($id_konsultasis);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id_konsultasis){
        $data = Konsultasi::find($id_konsultasis);
        $data->update($request->all());
        return redirect()->route('tabelkonsultasi')->with('success','Data berhasil di perbaharui');
    
    }

     public function delete($id_konsultasis){
        $data = Konsultasi::find($id_konsultasis);
        $data->delete();
        return redirect()->route('tabelkonsultasi')->with('success','Data berhasil di hapus');
    }
    
}