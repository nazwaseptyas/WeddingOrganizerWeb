@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote mb-4">Laporan Pesanan</h2>
    <div class="mt-4">
    <a href="{{ route('export.pdf') }}" class="btn btn-primary">
        Cetak Laporan
    </a>
    
</div>
<br>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Acara</th>
                    <th>Paket Katalog</th>
                    <th>Tanggal dibuat</th>
                    <th>Tanggal Terakhir Update</th>
                    <th>Status</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email_pesan }}</td>
                        <td>{{ $row->tgl_acara}}</td>
                        <td>{{ $row->katalog->nama_paket }}</td>
                        <td>{{ $row->created_at->format('Y-m-d') }}</td>
                        <td>{{ $row->updated_at->format('Y-m-d') }}</td>
                        <td>
                            <span class="badge {{ $row->status == 'approved' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($row->status) }}
                            </span>
                        </td>
                        <td>{{ $row->katalog->biaya }}</td>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
