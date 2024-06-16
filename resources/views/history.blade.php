@extends('layouts/main')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote mb-4">&nbsp;History Pesanan</h2>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Acara</th>
                            <th>Paket Katalog</th>
                            <th>Tanggal Pesan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->email_pesan }}</td>
                            <td>{{ $row->tgl_acara }}</td>
                            <td>{{ $row->katalog->nama_paket }}</td>
                            <td>{{ $row->created_at->format('Y-m-d') }}</td>
                            <td>
                                <span class="badge bg-{{ $row->status == 'approved' ? 'success' : 'danger' }}">
                                    {{ ucfirst($row->status) }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
