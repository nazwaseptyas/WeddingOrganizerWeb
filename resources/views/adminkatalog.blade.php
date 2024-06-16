@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote mb-4">Katalog</h2>
    <a href="/addkatalog" class="btn btn-danger btn-custom mb-3">Tambah Katalog</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Nama Paket</th>
                    <th>Isi Katalog</th>
                    <th>Gambar</th>
                    <th>Biaya</th>
                    <th>Tanggal dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama_paket }}</td>
                        <td style="text-align: justify;">{{ $row->isi_katalog }}</td>
                        <td>
                            <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->nama_paket }}" class="img-thumbnail" style="max-width: 100px;">
                        </td>
                        <td>{{ $row->biaya}}</td>
                        <td>{{ $row->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/editkatalog/{{ $row->id_katalog }}" class="btn btn-primary btn-custom3">Edit</a>
                                <a href="/delete-katalog/{{ $row->id_katalog }}" class="btn btn-danger btn-custom3">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
