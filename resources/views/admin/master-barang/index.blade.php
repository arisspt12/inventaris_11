@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Layout for Content -->
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Daftar Master Barang</h4>
            <a href="{{ route('master-barang.create') }}" class="btn btn-primary">Tambah Barang</a>
        </div>
        <div class="card-body">
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Table for Master Barang -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Spesifikasi Teknis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($masterBarangs as $masterBarang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $masterBarang->kode_barang }}</td>
                            <td>{{ $masterBarang->nama_barang }}</td>
                            <td>{{ $masterBarang->spesifikasi_teknis }}</td>
                            <td>
                                <a href="{{ route('master-barang.edit', $masterBarang->id_barang) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('master-barang.destroy', $masterBarang->id_barang) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
