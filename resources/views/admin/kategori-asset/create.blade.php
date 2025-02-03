@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-gradient text-white">
            <h5 class="mb-0">Tambah Kategori Asset</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori-asset.store') }}" method="POST">
                @csrf
                <!-- Kode Kategori Asset -->
                <div class="mb-3 form-floating">
                    <input type="text" name="kode_kategori_asset" class="form-control" id="kode_kategori_asset" placeholder="Kode Kategori Asset" required>
                    <label for="kode_kategori_asset">Kode Kategori Asset</label>
                </div>

                <!-- Nama Kategori Asset -->
                <div class="mb-3 form-floating">
                    <input type="text" name="kategori_asset" class="form-control" id="kategori_asset" placeholder="Nama Kategori Asset" required>
                    <label for="kategori_asset">Nama Kategori Asset</label>
                </div>

                <!-- Button Actions -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('kategori-asset.index') }}" class="btn btn-outline-secondary">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
        overflow: hidden;
    }

    .card-header {
        background: linear-gradient(135deg, #4e73df, #1cc88a);
        color: white;
        font-weight: bold;
    }

    .form-floating {
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 8px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border: 1px solid #6c757d;
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        transition: all 0.3s;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        font-size: 1.1rem;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    /* Make form more responsive */
    @media (max-width: 576px) {
        .form-floating input {
            font-size: 0.9rem;
        }
    }
</style>

@endsection
