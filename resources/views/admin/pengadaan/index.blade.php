@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Container for Table -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Daftar Pengadaan</h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <!-- Button Add Pengadaan -->
                <a href="{{ auth()->user()->role === 'admin' ?  route('admin.pengadaan.create') : route('pengadaan.create') }}" class="btn btn-success">Tambah Pengadaan</a>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Table -->
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Pengadaan</th>
                        <th>Master Barang</th>
                        <th>Depresiasi</th>
                        <th>Merk</th>
                        <th>Satuan</th>
                        <th>Sub Kategori Asset</th>
                        <th>Distributor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengadaan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_pengadaan }}</td>
                            <td>{{ $item->masterBarang->nama_barang }}</td>
                            <td>{{ $item->depresiasi->keterangan }}</td>
                            <td>{{ $item->merk->merk }}</td>
                            <td>{{ $item->satuan->satuan }}</td>
                            <td>{{ $item->subKategoriAsset->sub_kategori_asset }}</td>
                            <td>{{ $item->distributor->nama_distributor }}</td>
                            <td>
                                <!-- Edit and Delete Buttons -->
                                <a href="{{ route('admin.pengadaan.edit', $item->id_pengadaan) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Form -->
                                <form action="{{ route('admin.pengadaan.destroy', $item->id_pengadaan) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
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
