@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote">Tambah Katalog</h2>
    <div class="container crud-container">
        <form action="/simpankatalog" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="nama_paket" class="form-label">Nama Paket</label>
                    <input type="text" name="nama_paket" class="form-control" id="nama_paket" placeholder="Masukkan Nama Paket Katalog">
                </div>
                
            <div class="mb-3">
                <label for="isi_katalog" class="form-label">Isi Katalog</label>
                <textarea name="isi_katalog" class="form-control" id="isi_katalog" placeholder="Masukkan Isi Katalog" style="height: 200px"></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
            </div>
            <div class="mb-3">
                    <label for="biaya" class="form-label">Biaya</label>
                    <input type="text" name="biaya" class="form-control" id="biaya" placeholder="Masukkan Biaya">
                </div>

            <div style="margin-bottom: 100px;">
                <button class="btn btn-danger btn-custom" type="submit">Simpan</button>
                <a href="/adminkatalog" class="btn btn-danger btn-custom2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
