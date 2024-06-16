@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote">Edit Pesanan</h2>
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
        <form id="contacts-us-form" class="contacts-us-form" action="{{ route('updatedata', ['id' => $data->id_pesan]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="contacts-icon contactss-name">
                        <label for="nama">Nama Lengkap:</label>
                        <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama" value="{{ $data->nama }}" required>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="contacts-icon contactss-email">
                        <label for="email_pesan">Email:</label>
                        <input id="email_pesan" name="email_pesan" type="email" class="form-control" placeholder="Masukkan Email" value="{{ $data->email_pesan }}" required>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="contacts-icon contactss-date">
                        <label for="date">Pilih Tanggal Acara:</label>
                        <input id="date" name="tgl_acara" type="date" class="form-control custom-date-input" value="{{ $data->tgl_acara }}" style="font-size: 14px" required>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: 15px; font-weight: 400;">Paket Katalog</label>
                        <select class="form-select form-select-lg mb-3" name="katalog_id" aria-label=".form-select-lg example" style="font-size: 15px; height: 40px;"required>
                            <option selected>Pilih Paket Katalog</option>
                            @foreach ($katalogs as $katalog)
                                <option value="{{ $katalog->id_katalog }}" {{ $katalog->id_katalog == $data->katalog_id ? 'selected' : '' }}>{{ $katalog->nama_paket }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select form-select-sm" id="status" name="status">
                        <option value="request" {{ $data->status == 'request' ? 'selected' : '' }}>Request</option>
                        <option value="approved" {{ $data->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    </select>
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
@endsection
