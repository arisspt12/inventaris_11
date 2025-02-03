@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Title -->
    <h4 class="mb-4 text-center">Tambah Opname</h4>

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.opname.store') }}" method="POST">
                @csrf

                <!-- Pengadaan Select -->
                <div class="mb-3">
                    <label for="id_pengadaan" class="form-label">Pengadaan</label>
                    <select name="id_pengadaan" id="id_pengadaan" class="form-control" required>
                        <option value="">-- Pilih Pengadaan --</option>
                        @foreach($pengadaan as $item)
                            <option value="{{ $item->id_pengadaan }}">{{ $item->kode_pengadaan }} - {{ $item->no_seri_barang }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tanggal Opname -->
                <div class="mb-3">
                    <label for="tgl_opname" class="form-label">Tanggal Opname</label>
                    <input type="date" name="tgl_opname" id="tgl_opname" class="form-control" required>
                </div>

                <!-- Kondisi -->
                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" id="kondisi" class="form-control" required maxlength="25">
                </div>

                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" rows="3" maxlength="100"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('admin.opname.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
