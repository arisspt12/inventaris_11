@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Title and Button Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Daftar Mutasi Lokasi</h4>
        <a href="{{ route('mutasi-lokasi.create') }}" class="btn btn-primary">Tambah Mutasi Lokasi</a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Section -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi</th>
                        <th>Pengadaan</th>
                        <th>Flag Lokasi</th>
                        <th>Flag Pindah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mutasiLokasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->lokasi->nama_lokasi }}</td>
                            <td>{{ $item->pengadaan->kode_pengadaan }}</td>
                            <td>{{ $item->flag_lokasi }}</td>
                            <td>{{ $item->flag_pindah }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('mutasi-lokasi.edit', $item->id_mutasi_lokasi) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                    <form action="{{ route('mutasi-lokasi.destroy', $item->id_mutasi_lokasi) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
