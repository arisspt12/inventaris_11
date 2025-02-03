@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Container for Form -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Sub-Kategori Asset</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('sub-kategori-asset.store') }}" method="POST">
                @csrf
                <!-- Kode Sub-Kategori Asset -->
                <div class="mb-3">
                    <label for="kode_sub_kategori_asset" class="form-label">Kode Sub-Kategori Asset</label>
                    <input type="text" name="kode_sub_kategori_asset" class="form-control" id="kode_sub_kategori_asset" required>
                </div>

                <!-- Nama Sub-Kategori Asset -->
                <div class="mb-3">
                    <label for="sub_kategori_asset" class="form-label">Nama Sub-Kategori Asset</label>
                    <input type="text" name="sub_kategori_asset" class="form-control" id="sub_kategori_asset" required>
                </div>

                <!-- Kategori Asset -->
                <div class="mb-3">
                    <label for="id_kategori_asset" class="form-label">Kategori Asset</label>
                    <select name="id_kategori_asset" class="form-control" id="id_kategori_asset" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($kategoriAssets as $kategoriAsset)
                            <option value="{{ $kategoriAsset->id_kategori_asset }}">{{ $kategoriAsset->kategori_asset }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success btn-lg">Simpan</button>
                    <a href="{{ route('sub-kategori-asset.index') }}" class="btn btn-secondary btn-lg">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
