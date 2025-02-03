@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Layout for Form -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Tambah Lokasi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('lokasi.store') }}" method="POST">
                @csrf
                <!-- Kode Lokasi Input -->
                <div class="mb-3">
                    <label for="kode_lokasi" class="form-label">Kode Lokasi</label>
                    <input type="text" name="kode_lokasi" class="form-control" id="kode_lokasi" required maxlength="20">
                </div>

                <!-- Nama Lokasi Input -->
                <div class="mb-3">
                    <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" name="nama_lokasi" class="form-control" id="nama_lokasi" required maxlength="20">
                </div>

                <!-- Keterangan Input -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" maxlength="50">
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('lokasi.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
