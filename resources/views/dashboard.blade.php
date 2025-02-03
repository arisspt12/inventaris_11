@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <div class="row justify-content-center text-center mb-4">
        <div class="col-md-8">
            <h1 class="h4 fw-bold text-primary">🎉 Selamat Datang di Dashboard</h1>
            <p class="text-muted">Kelola aset dengan mudah dan efisien melalui sistem ini.</p>
        </div>
    </div>

    <!-- Feature Cards Section -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        @php
        $features = [
            ['title' => 'Kategori Aset', 'description' => 'Kelola kategori aset.', 'route' => route('kategori-asset.index'), 'btnClass' => 'btn-primary'],
            ['title' => 'Master Barang', 'description' => 'Lihat dan kelola master barang.', 'route' => route('master-barang.index'), 'btnClass' => 'btn-secondary'],
            ['title' => 'Lokasi Aset', 'description' => 'Lacak dan perbarui lokasi aset.', 'route' => route('lokasi.index'), 'btnClass' => 'btn-primary'],
            ['title' => 'Subkategori', 'description' => 'Kelola subkategori aset.', 'route' => route('sub-kategori-asset.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Distributor', 'description' => 'Kelola distributor aset.', 'route' => route('distributor.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Merk Aset', 'description' => 'Atur dan kelola merk aset.', 'route' => route('merk.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Satuan', 'description' => 'Kelola satuan aset.', 'route' => route('satuan.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Depresiasi', 'description' => 'Kelola perhitungan depresiasi.', 'route' => route('depresiasi.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Pengadaan', 'description' => 'Pantau aktivitas pengadaan.', 'route' => route('pengadaan.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Opname', 'description' => 'Lacak opname aset.', 'route' => route('opname.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Mutasi Lokasi', 'description' => 'Lacak mutasi aset.', 'route' => route('mutasi-lokasi.index'), 'btnClass' => 'btn-outline-primary'],
            ['title' => 'Hitung Depresiasi', 'description' => 'Lakukan perhitungan depresiasi aset.', 'route' => route('hitung-depresiasi.index'), 'btnClass' => 'btn-outline-primary'],
        ];
        @endphp

        @foreach($features as $feature)
        <div class="col">
            <div class="card h-100 shadow border-0 rounded-lg">
                <div class="card-body text-center p-3">
                    <h6 class="card-title fw-semibold text-primary">{{ $feature['title'] }}</h6>
                    <p class="card-text text-muted small">{{ $feature['description'] }}</p>
                    <a href="{{ $feature['route'] }}" class="btn {{ $feature['btnClass'] }} btn-sm w-100">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
