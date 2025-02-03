@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Card container for the form -->
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Pengadaan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pengadaan.store') }}" method="POST">
                @csrf

                <!-- Master Barang -->
                <div class="mb-4 form-floating">
                    <select name="id_master_barang" class="form-control" id="master_barang" required>
                        <option value="">-- Pilih Master Barang --</option>
                        @foreach($masterBarang as $item)
                            <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                    <label for="master_barang">Master Barang</label>
                </div>

                <!-- Depresiasi -->
                <div class="mb-4 form-floating">
                    <select name="id_depresiasi" class="form-control" id="depresiasi" required>
                        <option value="">-- Pilih Depresiasi --</option>
                        @foreach($depresiasi as $item)
                            <option value="{{ $item->id_depresiasi }}">{{ $item->keterangan }}</option>
                        @endforeach
                    </select>
                    <label for="depresiasi">Depresiasi</label>
                </div>

                <!-- Merk -->
                <div class="mb-4 form-floating">
                    <select name="id_merk" class="form-control" id="merk" required>
                        <option value="">-- Pilih Merk --</option>
                        @foreach($merk as $item)
                            <option value="{{ $item->id_merk }}">{{ $item->merk }}</option>
                        @endforeach
                    </select>
                    <label for="merk">Merk</label>
                </div>

                <!-- Satuan -->
                <div class="mb-4 form-floating">
                    <select name="id_satuan" class="form-control" id="satuan" required>
                        <option value="">-- Pilih Satuan --</option>
                        @foreach($satuan as $item)
                            <option value="{{ $item->id_satuan }}">{{ $item->satuan }}</option>
                        @endforeach
                    </select>
                    <label for="satuan">Satuan</label>
                </div>

                <!-- Sub Kategori Asset -->
                <div class="mb-4 form-floating">
                    <select name="id_sub_kategori_asset" class="form-control" id="sub_kategori_asset" required>
                        <option value="">-- Pilih Sub Kategori Asset --</option>
                        @foreach($subKategoriAsset as $item)
                            <option value="{{ $item->id_sub_kategori_asset }}">{{ $item->sub_kategori_asset }}</option>
                        @endforeach
                    </select>
                    <label for="sub_kategori_asset">Sub Kategori Asset</label>
                </div>

                <!-- Distributor -->
                <div class="mb-4 form-floating">
                    <select name="id_distributor" class="form-control" id="distributor" required>
                        <option value="">-- Pilih Distributor --</option>
                        @foreach($distributor as $item)
                            <option value="{{ $item->id_distributor }}">{{ $item->nama_distributor }}</option>
                        @endforeach
                    </select>
                    <label for="distributor">Distributor</label>
                </div>

                <!-- Kode Pengadaan -->
                <div class="mb-4 form-floating">
                    <input type="text" name="kode_pengadaan" class="form-control" id="kode_pengadaan" required maxlength="20">
                    <label for="kode_pengadaan">Kode Pengadaan</label>
                </div>

                <!-- No Invoice -->
                <div class="mb-4 form-floating">
                    <input type="text" name="no_invoice" class="form-control" id="no_invoice" required maxlength="20">
                    <label for="no_invoice">No Invoice</label>
                </div>

                <!-- No Seri Barang -->
                <div class="mb-4 form-floating">
                    <input type="text" name="no_seri_barang" class="form-control" id="no_seri_barang" required maxlength="50">
                    <label for="no_seri_barang">No Seri Barang</label>
                </div>

                <!-- Tahun Produksi -->
                <div class="mb-4 form-floating">
                    <input type="text" name="tahun_produksi" class="form-control" id="tahun_produksi" required maxlength="5">
                    <label for="tahun_produksi">Tahun Produksi</label>
                </div>

                <!-- Tanggal Pengadaan -->
                <div class="mb-4 form-floating">
                    <input type="date" name="tgl_pengadaan" class="form-control" id="tgl_pengadaan" required>
                    <label for="tgl_pengadaan">Tanggal Pengadaan</label>
                </div>

                <!-- Harga Barang -->
                <div class="mb-4 form-floating">
                    <input type="number" name="harga_barang" class="form-control" id="harga_barang" required>
                    <label for="harga_barang">Harga Barang</label>
                </div>

                <!-- Nilai Barang -->
                <div class="mb-4 form-floating">
                    <input type="number" name="nilai_barang" class="form-control" id="nilai_barang" required>
                    <label for="nilai_barang">Nilai Barang</label>
                </div>

                <!-- FB -->
                <div class="mb-4 form-floating">
                    <select name="fb" class="form-control" id="fb" required>
                        <option value="0">Barang Baru </option>
                        <option value="1">Barang Bekas</option>
                    </select>
                    <label for="fb">FB</label>
                </div>

                <!-- Keterangan -->
                <div class="mb-4 form-floating">
                    <textarea name="keterangan" class="form-control" id="keterangan" rows="3"></textarea>
                    <label for="keterangan">Keterangan</label>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
    }

    .form-floating input, .form-floating select, .form-floating textarea {
        border-radius: 5px;
    }

    .btn-success {
        background: linear-gradient(135deg, #38c172, #4caf50);
        border: none;
        padding: 0.6rem 1.2rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #4caf50, #38c172);
        transform: scale(1.05);
    }

    .card-header {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
    }

    .card-body {
        background: rgba(255, 255, 255, 0.9);
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-floating > label {
        font-size: 0.9rem;
    }
</style>

@endsection
