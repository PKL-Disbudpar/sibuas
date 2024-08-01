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
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="row m-3">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>30</h3>
                    <p>Surat Perintah Tugas</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-document-text"></i>
                  </div>
                  <a href="{{url('/bidang-suratTugas')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Disbudpar</a>.</strong>
        All rights reserved.
    </footer>
</body>
</html>