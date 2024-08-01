<!DOCTYPE html>
<html lang="en">
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

    <link rel="stylesheet" href="{{asset('css/style_admin-dashboard.css')}}">
<body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/bidang-dashboard')}}" class="brand-link">
          <img src="{{asset('images/logoJatim.svg')}}" alt="AdminLTE Logo" class="brand-image elevation-3">
          <span class="brand-text font-weight-bold ml-2">SIBUAS</span>
        </a>

        <hr class="mb-1">
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/bidang-dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/bidang-suratTugas')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Surat Perintah Tugas
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
                  <li class="breadcrumb-item"><a href="{{url('/bidang-dashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">Surat Tugas</li>
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
                <h3 class="card-title">Daftar Surat Perintah Tugas</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 1%" >
                                No
                            </th>
                            <th style="width: 30%">
                                Tujuan SPT
                            </th>
                            <th style="width: 10%">
                                Tanggal SPT
                            </th>
                            <th style="width: 20%">
                                Nama Pegawai
                            </th>
                            <th style="width: 20%">
                                TTD Oleh
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                1
                            </td>
                            <td>
                                Dinas ke  BPSDMP Kominfo Gedangan
                            </td>
                            <td class="date-column"></td>
                            <td>
                                Riedo
                            </td>
                            <td>
                                Kepala Bidang
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>
                                2
                            </td>
                            <td>
                                Kunjungan kerja Candi Sumberawan
                            </td>
                            <td class="date-column"></td>
                            <td>
                                Malikin, Nugroho, Dani
                            </td>
                            <td>
                                Kepala Bidang
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
          </section>
    </section>
    <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Disbudpar</a>.</strong>
        All rights reserved.
    </footer>

    <script>
        // Function to get current date
        function getCurrentDate() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
    
        // Function to set current date in the table
        function setCurrentDateInTable() {
            const dateColumns = document.querySelectorAll('.date-column');
            const currentDate = getCurrentDate();
    
            dateColumns.forEach(column => {
                column.textContent = currentDate;
            });
        }
    
        // Call the function to set current date when the page loads
        window.onload = setCurrentDateInTable;
    </script>
</body>
</html>