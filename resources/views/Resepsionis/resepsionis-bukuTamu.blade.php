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
        <a href="{{url('/resepsionis-dashboard')}}" class="brand-link">
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
                    <a href="{{url('/resepsionis-dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/resepsionis-bukuTamu')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Buku Tamu
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
                  <li class="breadcrumb-item"><a href="{{url('/resepsionis-dashboard')}}">Home</a></li>
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
                    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                
                <div class="row mx-3 mt-4">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">
                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button>
                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button>
                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button>
                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button>
                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>
                            <div class="btn-group">
                                <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-end align-items-center">
                        <div id="example1_filter" class="dataTables_filter  text-align-right">
                            <label class="d-flex font-weight-normal">
                                Search:
                                <input type="search" class="form-control form-control-sm ml-2" placeholder="" aria-controls="example1">
                            </label>
                        </div>
                    </div>
                </div>

              <div class="card-body mx-1">
                <table class="table table-bordered table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                No
                            </th>
                            <th style="width: 15%">
                                Nama
                            </th>
                            <th style="width: 20%">
                                Asal Instansi
                            </th>
                            <th>
                                Jenis Kelamin
                            </th>
                            <th style="width: 10%" class="text-center">
                                No. HP
                            </th>
                            <th style="width: 10%">
                                Tgl Pengunjung
                            </th>
                            <th style="width: 20%">
                                Keperluan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Kartika Sari
                            </td>
                            <td>
                                UPN Veteran Jawa Timur
                            </td>
                            <td>
                                Perempuan
                            </td>
                            <td>
                                081330203325
                            </td>
                            <td class="date-column"></td>
                            <td>
                                Keperluan Mengenai PKL
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
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                John Doe
                            </td>
                            <td>
                                Dinas Komunikasi dan Informatika Provinsi Jatim
                            </td>
                            <td>
                                Laki-laki
                            </td>
                            <td>
                                085753951258
                            </td>
                            <td class="date-column"></td>
                            <td>
                                Keperluan Kerjasama dengan Dinkominfo Jatim
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

    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
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

        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
  });
    </script>
</body>
</html>