<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #4C7B8B;
        }

        #wrapper {
            height: 100vh;
        }

        #sidebar-wrapper {
            background-color: #343a40;
            color: #fff;
            width: 280px;
            transition: margin-left 0.4s ease-in-out;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -280px;
        }

        #footer {
            background-color: #343a40;
            color: #ddd;
            transition: margin-left 0.4s ease-in-out;
            width: 280px;
        }

        #wrapper.toggled footer {
            margin-left: -280px;
        }

        .sidebar-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FBFBFB;
            text-align: center;
        }

        .list-group-item {
            background-color: #344CB7;
            color: #ddd;
            border: none;
            padding: 12px 20px;
        }

        .list-group-item:hover {
            background-color: #495057;
            color: #fff;
            cursor: pointer;
        }

        .list-group-item i {
            margin-right: 10px;
        }

        .navbar {
            background-color: #3B6790;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-text {
            color: #343a40;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn {
            padding: 8px 16px;
        }

        .toggle-button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.5rem; /* Membuat ikon lebih besar */
            border-radius: 5px;
            margin-left: 10px;
        }

        .toggle-button:hover {
            background-color: #5a6268;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 240px;
            font-size: 1rem;
            color: #ddd;
        }

        .sidebar-footer a {
            color: #ddd;
            text-decoration: none;
        }

        .sidebar-footer a:hover {
            color: #ffc107;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-end" id="sidebar-wrapper">
            <div class="sidebar-heading py-4">
                <h4>Asset Management</h4>
            </div>
            <div class="list-group list-group-flush">
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('dashboard') }}" class="py-3 list-group-item list-group-item-action">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <a href="{{ route('kategori-asset.index') }}" class="list-group-item">
                        <i class="fas fa-layer-group"></i>Kategori Asset</a>

                    <a href="{{ route('sub-kategori-asset.index') }}" class="list-group-item">
                        <i class="fas fa-list-alt"></i>Sub Kategori Asset</a>

                    <a href="{{ route('distributor.index') }}" class="list-group-item">
                        <i class="fas fa-truck"></i>Distributor</a>

                    <a href="{{ route('merk.index') }}" class="list-group-item">
                        <i class="fas fa-tag"></i>Merk</a>

                    <a href="{{ route('satuan.index') }}" class="list-group-item">
                        <i class="fas fa-balance-scale"></i>Satuan</a>

                    <a href="{{ route('master-barang.index') }}" class="list-group-item">
                        <i class="fas fa-boxes"></i>Master Barang</a>
                @endif
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.depresiasi.index') : route('depresiasi.index')}}" class="list-group-item">
                    <i class="fas fa-calculator"></i>Depresiasi</a>

                <a href="{{ auth()->user()->role === 'admin' ? route('admin.pengadaan.index') : route('pengadaan.index')}}" class="list-group-item">
                    <i class="fas fa-shopping-cart"></i>Pengadaan</a>

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('lokasi.index') }}" class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i>Lokasi</a>

                    <a href="{{ route('mutasi-lokasi.index') }}" class="list-group-item">
                        <i class="fas fa-exchange-alt"></i>Mutasi Lokasi</a>
                @endif
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.opname.index') : route('opname.index')}}" class="list-group-item">
                    <i class="fas fa-clipboard-check"></i>Opname</a>

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('hitung-depresiasi.index') }}" class="list-group-item">
                        <i class="fas fa-chart-line"></i>Hitung Depresiasi</a>
                @endif
                <a href="#" class="list-group-item text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                <div class="container-fluid">
                    <!-- Ganti teks menjadi ikon hamburger -->
                    <button class="btn toggle-button" id="menu-toggle">
                        <i class="fas fa-bars"></i> <!-- Ikon hamburger -->
                    </button>
                    <span class="navbar-text ms-auto">
                        Welcome, {{ Auth::user()->name ?? 'User' }}
                    </span>
                </div>
            </nav>
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light py-4 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h5 class="text-uppercase mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('kategori-asset.index') }}" class="text-light text-decoration-none"><i class="fas fa-layer-group me-2"></i>Kategori Asset</a></li>
                        <li><a href="{{ route('distributor.index') }}" class="text-light text-decoration-none"><i class="fas fa-truck me-2"></i>Distributor</a></li>
                        <li><a href="{{ route('lokasi.index') }}" class="text-light text-decoration-none"><i class="fas fa-map-marker-alt me-2"></i>Lokasi</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <h5 class="text-uppercase mb-3">Follow Us</h5>
                    <a href="https://facebook.com" class="text-light me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://twitter.com" class="text-light me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://instagram.com" class="text-light"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">&copy; 2025 Aris</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>
</body>

</html>
