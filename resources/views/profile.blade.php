@extends('layouts/navadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote mb-4">Profile Website</h2>
    <a href="/tambahprofile" class="btn btn-danger btn-custom mb-3">Tambah Profile</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Website</th>
                    <th>Deskripsi Website</th>
                    <th>Logo</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>instagram</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row )
                        <tr style="text-align:justify;">
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$row->web_name}}</td>
                            <td>{{$row->desc_web}}</td>
                            <td><img src="{{ 'storage/' . $row->logo }}" width="100" ></td>
                            <td>{{$row->email_cont}}</td>
                            <td>{{$row->nohp}}</td>
                            <td>{{$row->instagram}}</td>
                            <td>{{ $row->created_at->format('Y-m-d') }}</td>
                            <td>
                            <div class="btn-group" role="group">
                                <a href="/editprofile/{{ $row->id_profile }}" class="btn btn-primary btn-custom3">Edit</a>
                                <a href="/delete-profile/{{ $row->id_profile }}" class="btn btn-danger btn-custom3">Delete</a>
                            </div>
                        </td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection