@extends('layouts/main')

@section('container')
<section id="hero" class="container-fluid">
    @if ($data && $data->count() > 0)
    @foreach ($data as $row)
    <div id="hero-greeting" class="col-md-5" style="margin-right: 35px;">
        <h1 class="hero3" style="font-size: 30px;">{{ $row->web_name }}</h1><br>
        <h4 class="hero2">{{ $row->desc_web }}</h4>
        <br><h1 class="hero3" style="font-size: 30px;">Kontak Kami</h1>
        <ul style="list-style-type: none; padding-left: 0; line-height: 35px;">
            <li><strong>Email:</strong>&nbsp;{{ $row->email_cont }}</li>
            <li><strong>No HP:</strong>&nbsp;{{ $row->nohp }}</li>
            <li><strong>Instagram:</strong>&nbsp;{{ $row->instagram }}</li>
        </ul>
    </div>
    <div id="hero-img" class="col-md-5">
        <div class="hero-img-wrapper">
            <img src="assets/img/gallery5.png" class="img-fluid hero-img" alt="hero banner">
            <div class="overlay"></div>
        </div>
    </div>
    @endforeach
    @else
        <p>Tidak ada data katalog yang ditampilkan.</p>
    @endif
</section>

@endsection