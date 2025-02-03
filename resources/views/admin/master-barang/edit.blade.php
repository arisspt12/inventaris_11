@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Edit Barang</h4>
    <form action="{{ route('master-barang.update', $masterBarang->id_barang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="{{ $masterBarang->kode_barang }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $masterBarang->nama_barang }}" required>
        </div>
        <div class="mb-3">
            <label>Spesifikasi Teknis</label>
            <input type="text" name="spesifikasi_teknis" class="form-control" value="{{ $masterBarang->spesifikasi_teknis }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('master-barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
