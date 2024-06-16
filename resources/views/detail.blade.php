@extends('layouts/main')

@section('container')
<section class="container-fluid">
<br>
    <div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8 mb-30 mx-auto">
            <div class="artikel-details">
                <div class="artikel-d-img">
                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_paket }}" style="max-width: 100%; height: auto;">
                </div>
                <div class="artikel-body" style="margin-top: 20px;">
                    <h4 style="margin-top: 30px; text-align: justify; margin-bottom: 30px; font-weight:700;">{{ $data->nama_paket }}</h4>
                    <p style="text-align: justify;">{!! nl2br(e($data->isi_katalog)) !!}</p>
                    <h6 style="font-weight: 600">Biaya</h6>
                    <p>Rp. {{ $data->biaya }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection