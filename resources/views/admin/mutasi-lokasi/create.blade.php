@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Title Section -->
    <h4 class="mb-4">Tambah Mutasi Lokasi</h4>
    
    <!-- Form Section (Using Card Layout) -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('mutasi-lokasi.store') }}" method="POST">
                @csrf
                
                <!-- Lokasi Field -->
                <div class="mb-3">
                    <label for="id_lokasi" class="form-label">Lokasi</label>
                    <select name="id_lokasi" class="form-control" id="id_lokasi" required>
                        <option value="">-- Pilih Lokasi --</option>
                        @foreach($lokasi as $item)
                            <option value="{{ $item->id_lokasi }}">{{ $item->nama_lokasi }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Pengadaan Field -->
                <div class="mb-3">
                    <label for="id_pengadaan" class="form-label">Pengadaan</label>
                    <select name="id_pengadaan" class="form-control" id="id_pengadaan" required>
                        <option value="">-- Pilih Pengadaan --</option>
                        @foreach($pengadaan as $item)
                            <option value="{{ $item->id_pengadaan }}">{{ $item->kode_pengadaan }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Flag Lokasi Field -->
                <div class="mb-3">
                    <label for="flag_lokasi" class="form-label">Flag Lokasi</label>
                    <input type="text" name="flag_lokasi" class="form-control" id="flag_lokasi" required maxlength="45">
                </div>

                <!-- Flag Pindah Field -->
                <div class="mb-3">
                    <label for="flag_pindah" class="form-label">Flag Pindah</label>
                    <input type="text" name="flag_pindah" class="form-control" id="flag_pindah" required maxlength="45">
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('mutasi-lokasi.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
