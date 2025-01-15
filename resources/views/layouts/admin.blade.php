<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIBUAS - ADMIN</title>
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @stack('styles')
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ url('/admin-dashboard') }}" class="brand-link">
            <img src="{{ asset('images/logoJatim.svg') }}" alt="AdminLTE Logo" class="brand-image elevation-3">
            <span class="brand-text font-weight-bold ml-2">SIBUAS</span>
        </a>

        <hr class="mb-1">

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ url('/admin-dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-bukuTamu') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Buku Tamu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-suratTugas') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Surat Perintah Tugas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-masterPegawai') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Master Pegawai
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-bidang') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Master Bidang
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-pengguna') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Master Pengguna
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin-role') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Master Role
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <main>
        @yield('content')
    </main>

    <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Disbudpar</a>.</strong>
        All rights reserved.
    </footer>
</body>

</html>