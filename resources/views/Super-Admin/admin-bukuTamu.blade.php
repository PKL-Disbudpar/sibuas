<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIBUAS</title>

    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('css/style_admin-dashboard.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/admin-dashboard') }}" class="brand-link">
            <img src="{{ asset('images/logoJatim.svg') }}" alt="AdminLTE Logo" class="brand-image elevation-3">
            <span class="brand-text font-weight-bold ml-2">SIBUAS</span>
        </a>

        <hr class="mb-1">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
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

    <section class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header bg-white">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard SIBUAS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin-dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Buku Tamu</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">


            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Buku Tamu</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Instansi</th>
                                <th>Jenis Kelamin</th>
                                <th>No.HP</th>
                                <th>Tgl Pengunjung</th>
                                <th>Keperluan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bukuTamus as $item)
                                <tr>
                                    <td style="width: 10%">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_tamu }}</td>
                                    <td>{{ $item->asal_instansi }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->tgl_pengunjung }}</td>
                                    <td>{{ $item->keperluan }}</td>
                                    <td class="project-actions text-right" style="width: 20%">
                                        <form action="{{ route('bukuTamu.destroy', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Belum Tersedia.
                                </div>
                            @endforelse

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer fixed-bottom">
            <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Disbudpar</a>.</strong>
            All rights reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            });
        </script>
</body>

</html>
