@php
    if (!Session::has('username')) {
        echo redirect('login')->send();
        exit();
    }
@endphp

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
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('css/style_riwayat-spt.css')}}">
    </head>
    <body>
        @if (Session::has('username'))
            <header>
                @section('navbar')
                    <div class="navbar">
                        <div class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo">
                            <div class="judul">
                                <span>Sistem Informasi Buku Tamu dan SPT</span>
                                <span>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</span>
                            </div>
                        </div>
                        <div class="menu-toggle" id="mobile-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                        <nav>
                            <ul class="nav-list">
                                <li class="dropdown-container">
                                    <a href="javascript:void(0);" class="dropbtn text-custom">SPT <i class="arrow-down"></i></a>
                                    <div class="dropdown">
                                        <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT </a>
                                        <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                                    </div>
                                </li>
                                <li class="dropdown-container d-flex">
                                    <a href="javascript:void(0)" class="dropbtn text-custom d-flex">
                                        <i class="dropbtn fa fa-regular fa-user rounded-circle border p-1 ml-2"></i>
                                        <span class="pl-2">{{ Session::get('username') }}</span>
                                    </a>
                                    <div class="dropdown">
                                        <a href="{{ url('/') }}" class="text-custom">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @show
            </header>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat SPT</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Bidang</th> 
                            {{-- <th>Nomor Surat</th> --}}
                            <th>Nama Pegawai</th>
                            <th>Tanggal Input</th>
                            <th>Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suratTugas as $item)
                            <tr>
                                <td style="width: 10%">{{ $loop->iteration }}</td>
                                <td>{{ $item->bidang->kode_bidang }}</td>
                                {{-- <td>25908</td> --}}
                                <td>{{ $item->nama_spt }}</td>
                                <td>{{ $item->tgl_spt }}</td>
                                <td>{{ $item->tujuan_spt }}</td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="footer">
            <p>Copyright ©SIBUAS 2024</p>
        </div>

        <script src="../../plugins/jquery/jquery.min.js"></script>
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
        <script src="../../dist/js/adminlte.min.js"></script>
        <script>
            $(function () {
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: true,
                        autoWidth: false,
                        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script>
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>