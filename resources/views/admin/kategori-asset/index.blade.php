@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <!-- Title and Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="font-weight-bold" style="color: #4A4A4A;">Kategori Asset</h4>
        <a href="{{ route('kategori-asset.create') }}" class="btn btn-primary btn-lg">Tambah Kategori</a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success" style="background: rgba(92, 184, 92, 0.1); border: none; color: #5CB85C;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Display -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="background-color: #ffffff; border-radius: 8px; overflow: hidden;">
            <thead style="background: #007BFF; color: white; font-weight: bold;">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kode Kategori</th>
                    <th class="text-center">Nama Kategori</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoriAssets as $kategoriAsset)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $kategoriAsset->kode_kategori_asset }}</td>
                        <td>{{ $kategoriAsset->kategori_asset }}</td>
                        <td class="text-center">
                            <a href="{{ route('kategori-asset.edit', $kategoriAsset->id_kategori_asset) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kategori-asset.destroy', $kategoriAsset->id_kategori_asset) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .btn-primary {
        background-color: #007BFF;
        border-color: #007BFF;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
        font-size: 1.1rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .table {
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    thead {
        background-color: #007BFF;
        color: #fff;
    }

    tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }

    .alert-success {
        background-color: rgba(92, 184, 92, 0.1);
        color: #5CB85C;
        padding: 12px;
        border-radius: 8px;
    }
</style>

@endsection
