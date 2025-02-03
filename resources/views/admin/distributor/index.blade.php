@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="font-weight-bold" style="color: #4A4A4A;">Daftar Distributor</h4>
        <a href="{{ route('distributor.create') }}" class="btn btn-gradient">Tambah Distributor</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success" style="background: rgba(92, 184, 92, 0.2); border: none; color: #5CB85C;">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover" style="background: rgba(255, 255, 255, 0.8); border-radius: 10px; overflow: hidden;">
            <thead style="background: linear-gradient(135deg, #6a11cb, #2575fc); color: #fff;">
                <tr>
                    <th>No</th>
                    <th>Nama Distributor</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($distributors as $distributor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $distributor->nama_distributor }}</td>
                        <td>{{ $distributor->alamat }}</td>
                        <td>{{ $distributor->no_telp }}</td>
                        <td>{{ $distributor->email }}</td>
                        <td>{{ $distributor->keterangan }}</td>
                        <td>
                            <a href="{{ route('distributor.edit', $distributor->id_distributor) }}" class="btn btn-sm btn-warning btn-gradient">Edit</a>
                            <form action="{{ route('distributor.destroy', $distributor->id_distributor) }}" method="POST" style="display:inline-block; margin-left: 5px;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger btn-gradient" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .btn-gradient {
        background: linear-gradient(135deg, #ff7eb3, #ff758c);
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(135deg, #ff758c, #ff7eb3);
        transform: scale(1.05);
    }

    table {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    thead tr {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
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

    .alert-success {
        background-color: rgba(92, 184, 92, 0.2);
        border: none;
        color: #5CB85C;
        padding: 10px;
        border-radius: 5px;
    }
</style>
@endsection
