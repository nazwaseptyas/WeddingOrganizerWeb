<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Pesanan;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function historypesanan()
    {
        $data = Pesanan::where('user_id', Auth::id())->get();
        return view('history', compact('data'));
    }
    public function tambahdata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email_pesan' => 'required|email',
            'tgl_acara' => 'required|date',
            'katalog_id' => 'required|exists:katalogs,id_katalog',
        ]);
        Pesanan::create([
            'nama' => $request->nama,
            'email_pesan' => $request->email_pesan,
            'tgl_acara' => $request->tgl_acara,
            'status' => $request->status,
            'katalog_id' => $request->katalog_id,
            'user_id' => Auth::id(),
            'status' => 'request',

        ]);
        return redirect()->route('history')->with('success', 'Data berhasil di Tambahkan');
    }

    public function pemesan(Request $request)
    {
        $data = Pesanan::all();
        return view('tabelpesan', compact('data'));
    }
    public function laporan(Request $request)
    {
       $data = Pesanan::all();
        return view('laporan', compact('data'));
    }
    public function formpemesanan()
    {
        $data = Katalog::all();
        return view('pesan', compact('data'));
    }
    public function tampilkandata($id)
    {
        $data = Pesanan::find($id);
        $katalogs = Katalog::all();
        return view('editpesan', compact(['data', 'katalogs']));
    }
    public function deletePesan($id_pesan)
    {
        $data = Pesanan::find($id_pesan);
        $data->delete();
        return redirect()->route('tabelpesan')->with('success', 'Data berhasil di delete');
    }
    public function updatedata(Request $request, $id_pesan)
    {
        $request->validate([
            'nama' => 'required',
            'email_pesan' => 'required|email',
            'tgl_acara' => 'required|date',
            'katalog_id' => 'required|exists:katalogs,id_katalog',
            'status' => 'required|in:request,approved',
        ]);
        $data = Pesanan::find($id_pesan);
        $data->update([
            'nama' => $request->nama,
            'email_pesan' => $request->email_pesan,
            'tgl_acara' => $request->tgl_acara,
            'status' => $request->status,
            'katalog_id' => $request->katalog_id,
        ]);
        return redirect()->route('tabelpesan')->with('success', 'Data berhasil diperbaharui');
    }
    public function exportPDF()
    {
    $data = Pesanan::all();
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
    $html = view('exportpdf', compact('data'));
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    return $dompdf->stream("Laporan Pesanan WOJWP.pdf");
    }
}