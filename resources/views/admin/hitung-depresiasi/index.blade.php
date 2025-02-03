<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f6f9;
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h4 {
    color: #333;
    font-weight: 600;
}

.btn-primary {
    background: #007bff;
    border: none;
    padding: 10px 15px;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #0056b3;
}

.table {
    margin-top: 15px;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
}

.table thead {
    background: #007bff;
    color: #fff;
    font-weight: bold;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #dee2e6;
}

.btn-sm {
    padding: 5px 10px;
    border-radius: 5px;
}

.btn-warning {
    background: #ffcc00;
    border: none;
}

.btn-warning:hover {
    background: #e6b800;
}

.btn-danger {
    background: #dc3545;
    border: none;
}

.btn-danger:hover {
    background: #c82333;
}

    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>Daftar Hitung Depresiasi</h4>
        <a href="{{ route('hitung-depresiasi.create') }}" class="btn btn-primary">Tambah Hitung Depresiasi</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pengadaan</th>
                <th>Tanggal Hitung</th>
                <th>Bulan</th>
                <th>Durasi</th>
                <th>Nilai Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hitungDepresiasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->pengadaan->kode_pengadaan }}</td>
                    <td>{{ $item->tgl_hitung_depresiasi }}</td>
                    <td>{{ $item->bulan }}</td>
                    <td>{{ $item->durasi }}</td>
                    <td>{{ $item->nilai_barang }}</td>
                    <td>
                        <a href="{{ route('hitung-depresiasi.edit', $item->id_hitung_depresiasi) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('hitung-depresiasi.destroy', $item->id_hitung_depresiasi) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>