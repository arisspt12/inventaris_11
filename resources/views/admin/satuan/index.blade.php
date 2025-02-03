@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-4">
        <h4>Daftar Satuan</h4>
        <a href="{{ route('satuan.create') }}" class="btn btn-primary btn-rounded">Tambah Satuan</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel dalam Card -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th style="width: 10%; text-align: center;">No</th>
                        <th>Satuan</th>
                        <th style="width: 20%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($satuans as $satuan)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                            <td>{{ $satuan->satuan }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('satuan.edit', $satuan->id_satuan) }}" class="btn btn-sm btn-warning btn-rounded">Edit</a>
                                <form action="{{ route('satuan.destroy', $satuan->id_satuan) }}" method="POST" style="display:inline-block;">
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

