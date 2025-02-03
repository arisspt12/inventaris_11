@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 style="font-weight: 600; color: #333;">Daftar Depresiasi</h4>
        <a href="{{ route('admin.depresiasi.create') }}" class="btn btn-primary">Tambah Depresiasi</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success" style="background: rgba(92, 184, 92, 0.2); border: none; color: #5CB85C;">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered" style="background-color: #fff; border-radius: 8px; overflow: hidden;">
            <thead style="background: linear-gradient(135deg, #007bff, #00c6ff); color: #fff;">
                <tr>
                    <th style="text-align: center; padding: 12px;">No</th>
                    <th>Lama Depresiasi</th>
                    <th>Keterangan</th>
                    <th style="text-align: center; padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($depresiasi as $item)
                    <tr>
                        <td style="text-align: center; padding: 10px;">{{ $loop->iteration }}</td>
                        <td style="padding: 10px;">{{ $item->lama_depresiasi }}</td>
                        <td style="padding: 10px;">{{ $item->keterangan }}</td>
                        <td style="text-align: center; padding: 10px;">
                            <a href="{{ auth()->user()->role === 'admin' ? route('admin.depresiasi.edit', $item->id_depresiasi) : route('depresiasi.edit', $item->id_depresiasi) }}" class="btn btn-sm btn-warning" style="background-color: #ffc107; color: #fff;">Edit</a>
                            <form action="{{ route('admin.depresiasi.destroy', $item->id_depresiasi) }}" method="POST" style="display:inline-block; margin-left: 5px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" style="background-color: #dc3545; color: #fff;" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .btn-primary {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #00c6ff, #007bff);
        transform: scale(1.05);
    }

    .btn-warning, .btn-danger {
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        transform: scale(1.05);
    }

    .btn-danger:hover {
        background-color: #c82333;
        transform: scale(1.05);
    }

    table {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    thead tr {
        background: linear-gradient(135deg, #007bff, #00c6ff);
    }

    thead th {
        text-align: center;
        color: #fff;
        font-weight: bold;
        padding: 1rem;
    }

    tbody tr:hover {
        background: rgba(0, 123, 255, 0.1);
    }

    tbody td {
        padding: 10px;
        vertical-align: middle;
    }
</style>
@endsection
