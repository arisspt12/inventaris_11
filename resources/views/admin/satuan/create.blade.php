@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Satuan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('satuan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="satuan" class="form-label">Nama Satuan</label>
                    <input type="text" name="satuan" id="satuan" class="form-control" required placeholder="Masukkan nama satuan">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('satuan.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
