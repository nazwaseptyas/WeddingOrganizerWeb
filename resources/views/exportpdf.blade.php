<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        thead {
            background-color: #f2f2f2;
        }
        .bg-success {
            background-color: #28a745;
            color: #fff;
        }
        .bg-danger {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Pesanan</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Acara</th>
                <th>Paket Katalog</th>
                <th>Tanggal Dibuat</th>
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
                <td>{{ $row->tgl_acara }}</td>
                <td>{{ $row->katalog->nama_paket }}</td>
                <td>{{ $row->created_at->format('Y-m-d') }}</td>
                <td>{{ $row->updated_at->format('Y-m-d') }}</td>
                <td class="{{ $row->status == 'approved' ? 'bg-success' : 'bg-danger' }}">{{ ucfirst($row->status) }}</td>
                <td>{{ $row->katalog->biaya }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
