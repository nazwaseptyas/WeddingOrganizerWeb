@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote">Edit Profile</h2>
    <div class="container crud-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('updateprofile', ['id' => $data->id_profile]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                    <label for="web_name" class="form-label">Nama Website</label>
                    <input type="text" name="web_name" class="form-control" value="{{ $data->web_name }}" id="web_name" placeholder="Masukkan Nama Website">
                </div>       
            <div class="mb-3">
                <label for="desc_web" class="form-label">Deskripsi Website</label>
                <textarea name="desc_web" class="form-control" id="desc_web" placeholder="Masukkan Deskripsi Website" style="height: 200px" rows="6">{{ $data->desc_web }}></textarea>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" id="logo">
                <img src="{{ asset('storage/' . $data->logo) }}" alt="{{ $data->web_name }}" class="img-thumbnail mt-2" style="max-width: 150px;">
            </div>
            <div class="mb-3">   
                        <label for="email_cont">Email</label>
                        <input id="email_cont" name="email_cont" type="email" class="form-control" value="{{ $data->email_cont }}"placeholder="Masukkan Email">
                </div>
            <div class="mb-3">
                    <label for="nohp" class="form-label">No. Telepon</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" value="{{ $data->nohp }}"placeholder="Masukkan No Telepon">
                </div>
            <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="instagram" value="{{ $data->instagram }}"placeholder="Masukkan Instagram">
                </div>
            <div style="margin-bottom: 100px;">
                <button class="btn btn-danger btn-custom" type="submit">Simpan</button>
                <a href="/adminkatalog" class="btn btn-danger btn-custom2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
