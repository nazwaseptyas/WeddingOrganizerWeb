@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote">Tambah Profile</h2>
    <div class="container crud-container">
        <form action="/simpanprofile" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="web_name" class="form-label">Nama Website</label>
                    <input type="text" name="web_name" class="form-control" id="web_name" placeholder="Masukkan Nama Website">
                </div>       
            <div class="mb-3">
                <label for="desc_web" class="form-label">Deskripsi Website</label>
                <textarea name="desc_web" class="form-control" id="desc_web" placeholder="Masukkan Deskripsi Website" style="height: 200px"></textarea>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" id="logo">
            </div>
            <div class="mb-3">   
                        <label for="email_cont">Email</label>
                        <input id="email_cont" name="email_cont" type="email" class="form-control" placeholder="Masukkan Email">
                </div>
            <div class="mb-3">
                    <label for="nohp" class="form-label">No. Telepon</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Masukkan No Telepon">
                </div>
            <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Masukkan Biaya">
                </div>
            <div style="margin-bottom: 100px;">
                <button class="btn btn-danger btn-custom" type="submit">Simpan</button>
                <a href="/profile" class="btn btn-danger btn-custom2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
