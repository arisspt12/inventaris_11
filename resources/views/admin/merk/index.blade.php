@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Title Section -->
    <div class="d-flex justify-content-between mb-3">
        <h4 class="text-primary font-weight-bold">Daftar Merk</h4>
        <a href="{{ route('merk.create') }}" class="btn btn-success btn-gradient">Tambah Merk</a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Table Section (Using Card Layout) -->
    <div class="card shadow-lg rounded">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($merks as $merk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $merk->merk }}</td>
                            <td>{{ $merk->keterangan }}</td>
                            <td>
                                <a href="{{ route('merk.edit', $merk->id_merk) }}" class="btn btn-warning btn-sm btn-gradient">Edit</a>
                                <form action="{{ route('merk.destroy', $merk->id_merk) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm btn-gradient" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* Button styles with gradient background */
    .btn-gradient {
        background: linear-gradient(135deg, #ff7eb3, #ff758c);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(135deg, #ff758c, #ff7eb3);
        transform: scale(1.05);
    }

    /* Table styles */
    table {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    thead tr {
        background: #4e73df;
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

    /* Success alert style */
    .alert-success {
        background-color: rgba(92, 184, 92, 0.2);
        border: none;
        color: #5CB85C;
        padding: 10px;
        border-radius: 5px;
    }

    .card {
        border-radius: 10px;
    }

    /* Adjust card body padding */
    .card-body {
        padding: 1.5rem;
    }

    /* Table row hover effect */
    tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }
</style>

@endsection
