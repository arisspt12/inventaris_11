@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Card Container for the Table -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Sub-Kategori Asset</h4>
        </div>
        <div class="card-body">
            <!-- Add Button -->
            <div class="d-flex justify-content-between mb-4">
                <a href="{{ route('sub-kategori-asset.create') }}" class="btn btn-success btn-rounded">Tambah Sub-Kategori</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Table -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th style="width: 10%; text-align: center;">No</th>
                        <th>Kode Sub-Kategori</th>
                        <th>Nama Sub-Kategori</th>
                        <th>Kategori Asset</th>
                        <th style="width: 20%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subKategoriAssets as $subKategoriAsset)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                            <td>{{ $subKategoriAsset->kode_sub_kategori_asset }}</td>
                            <td>{{ $subKategoriAsset->sub_kategori_asset }}</td>
                            <td>{{ $subKategoriAsset->kategoriAsset->kategori_asset }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('sub-kategori-asset.edit', $subKategoriAsset->id_sub_kategori_asset) }}" class="btn btn-sm btn-warning btn-rounded">Edit</a>
                                <form action="{{ route('sub-kategori-asset.destroy', $subKategoriAsset->id_sub_kategori_asset) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger btn-rounded" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
