@extends('layouts/main')

@section('container')
<main>
    <div class="contact-us-area pt-60 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span>Form Pemesanan Paket Katalog<br /></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contacts-us-wrapper grey-theme-bg">
                        <form id="contacts-us-form" class="contacts-us-form" action="{{ route('tambahdata') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="contacts-icon contactss-name">
                                        <label for="nama">Nama Lengkap:</label>
                                        <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="contacts-icon contactss-email">
                                        <label for="email_pesan">Email:</label>
                                        <input id="email_pesan" name="email_pesan" type="email" class="form-control" placeholder="Masukkan Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="contacts-icon contactss-date">
                                        <label for="date">Pilih Tanggal Acara:</label>
                                        <input id="date" name="tgl_acara" type="date" class="form-control custom-date-input" style="font-size: 14px" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Paket Katalog</label>
                                        <select class="form-select form-select-lg mb-3" name="katalog_id" aria-label=".form-select-lg example" style="font-size: 14px; height: 50px;" required>
                                            <option selected>Pilih Paket Katalog</option>
                                            @foreach ($data as $katalog)
                                                <option value="{{ $katalog->id_katalog }}">{{ $katalog->nama_paket }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <div class="contacts-us-form-button text-center">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
