@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('css/style_riwayat-spt.css')}}">
@endpush

@section('content')
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
                        {{-- <th>Status</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suratTugas as $item)
                        <tr>
                            <td style="width: 10%">{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_bidang }}</td>
                            {{-- <td>25908</td> --}}
                            <td>{{ $item->nama_spt }}</td>
                            <td>{{ $item->tgl_spt }}</td>
                            <td>{{ $item->tujuan_spt }}</td>
                            {{-- <td>Disetujui</td> --}}
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
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
    {{-- <script src="../../dist/js/demo.js"></script> --}}
    <script src="{{ asset('js/main.js')}}"></script>

    <script>
        $(function () {
            $("#example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                })
                .buttons()
                .container()
                .appendTo("#example1_wrapper .col-md-6:eq(0)");
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
@endpush

@section('footer')
    <div id="footer" class="fixed-bottom">
        <p>Copyright ©SIBUAS 2024</p>
    </div>
@endsection

{{-- <!DOCTYPE html>
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
        <link rel="stylesheet" href="{{asset('css/style_riwayat-spt.css')}}">
    </head>
    <body>
        <header>
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
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/BukuTamu')}}">Buku Tamu</a></li>
                        <li class="dropdown-container">
                            <a href="javascript:void(0);" class="dropbtn">SPT <i class="arrow-down"></i></a>
                            <div class="dropdown">
                                <a href="{{url('/form-spt')}}">Buat SPT</a>
                                <a href="{{url('/riwayat-spt')}}">Riwayat SPT</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

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
                    <th>Nomor Surat</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal Input</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>118.1</td>
                    <td>25908</td>
                    <td>Riedo</td>
                    <td>18 Juli 2024</td>
                    <td>Dinas ke  BPSDMP Kominfo Gedangan</td>
                    <td>Disetujui</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>118.4</td>
                    <td>-</td>
                    <td>Malikin, Nugroho, Dani</td>
                    <td>19 Juli 2024</td>
                    <td>Kunjungan kerja Candi Sumberawan</td>
                    <td>Proses</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <footer class="fixed-bottom">
        <p>Copyright ©SIBUAS 2024</p>
        </footer>

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
        <script src="../../dist/js/demo.js"></script>
        <script src="{{ asset('js/main.js')}}"></script>

        <script>
            $(function () {
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: false,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script>
    </body>
</html> --}}