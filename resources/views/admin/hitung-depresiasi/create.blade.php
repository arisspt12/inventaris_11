@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-gradient text-white">
            <h5 class="mb-0">Tambah Hitung Depresiasi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('hitung-depresiasi.store') }}" method="POST">
                @csrf
                <!-- Pengadaan -->
                <div class="mb-3 form-floating">
                    <select name="id_pengadaan" class="form-control" id="id_pengadaan" required>
                        <option value="">-- Pilih Pengadaan --</option>
                        @foreach($pengadaan as $item)
                            <option value="{{ $item->id_pengadaan }}">{{ $item->kode_pengadaan }}</option>
                        @endforeach
                    </select>
                    <label for="id_pengadaan">Pengadaan</label>
                </div>

                <!-- Tanggal Hitung Depresiasi -->
                <div class="mb-3 form-floating">
                    <input type="date" name="tgl_hitung_depresiasi" class="form-control" id="tgl_hitung_depresiasi" required>
                    <label for="tgl_hitung_depresiasi">Tanggal Hitung Depresiasi</label>
                </div>

                <!-- Bulan -->
                <div class="mb-3 form-floating">
                    <input type="text" name="bulan" class="form-control" id="bulan" required maxlength="10">
                    <label for="bulan">Bulan</label>
                </div>

                <!-- Durasi -->
                <div class="mb-3 form-floating">
                    <input type="number" name="durasi" class="form-control" id="durasi" required>
                    <label for="durasi">Durasi</label>
                </div>

                <!-- Nilai Barang -->
                <div class="mb-3 form-floating">
                    <input type="number" name="nilai_barang" class="form-control" id="nilai_barang" required>
                    <label for="nilai_barang">Nilai Barang</label>
                </div>

                <!-- Button Actions -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('hitung-depresiasi.index') }}" class="btn btn-outline-secondary">Batal</a>
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
        background: linear-gradient(135deg, #6a11cb, #2575fc);
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
