@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Daftar Opname</h4>
        <a href="{{ auth()->user()->role === 'admin' ? route('admin.opname.create') : route('opname.create') }}" class="btn btn-primary">Tambah Opname</a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Section -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pengadaan</th>
                        <th>Tanggal Opname</th>
                        <th>Kondisi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($opnames as $opname)
                    <tr>
                        <td>{{ $opname->id_opname }}</td>
                        <td>{{ $opname->pengadaan->kode_pengadaan }} - {{ $opname->pengadaan->no_seri_barang }}</td>
                        <td>{{ $opname->tgl_opname }}</td>
                        <td>{{ $opname->kondisi }}</td>
                        <td>{{ $opname->keterangan }}</td>
                        <td class="d-flex">
                            <!-- Edit Button -->
                            <a href="{{ auth()->user()->role === 'admin' ? route('admin.opname.edit', $opname->id_opname) : route('opname.edit', $opname->id_opname) }}" class="btn btn-warning btn-sm mr-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.opname.destroy', $opname->id_opname) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus opname ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
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
