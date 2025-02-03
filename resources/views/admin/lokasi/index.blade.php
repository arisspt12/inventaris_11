@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Layout for Table -->
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Lokasi</h4>
            <a href="{{ route('lokasi.create') }}" class="btn btn-primary">Tambah Lokasi</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success mb-3">{{ session('success') }}</div>
            @endif

            <!-- Table -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Lokasi</th>
                        <th>Nama Lokasi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lokasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_lokasi }}</td>
                            <td>{{ $item->nama_lokasi }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <a href="{{ route('lokasi.edit', $item->id_lokasi) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('lokasi.destroy', $item->id_lokasi) }}" method="POST" style="display:inline-block;">
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
    </div>
</div>
@endsection
