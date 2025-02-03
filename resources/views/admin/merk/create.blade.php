@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Layout for Form -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Tambah Merk</h4>
        </div>
        <div class="card-body">
            <!-- Form Start -->
            <form action="{{ route('merk.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" required id="merk">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('merk.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
