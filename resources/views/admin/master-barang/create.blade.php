@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Layout for Form -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Tambah Barang</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('master-barang.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" required id="kode_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="spesifikasi_teknis" class="form-label">Spesifikasi Teknis</label>
                    <input type="text" name="spesifikasi_teknis" class="form-control" id="spesifikasi_teknis">
                </div>
                
                <!-- Action Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('master-barang.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
