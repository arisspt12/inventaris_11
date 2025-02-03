@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Distributor</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('distributor.store') }}" method="POST">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="text" name="nama_distributor" class="form-control" id="nama_distributor" placeholder="Nama Distributor" required>
                    <label for="nama_distributor">Nama Distributor</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No. Telepon">
                    <label for="no_telp">No. Telepon</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    <label for="email">Email</label>
                </div>
                <div class="mb-3 form-floating">
                    <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan"></textarea>
                    <label for="keterangan">Keterangan</label>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('distributor.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
    }

    .form-floating input, .form-floating textarea {
        border-radius: 5px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #ff7eb3, #ff758c);
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #ff758c, #ff7eb3);
        transform: scale(1.05);
    }

    .card-header {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
    }

    .card-body {
        background: rgba(255, 255, 255, 0.8);
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.9);
    }
</style>

@endsection
