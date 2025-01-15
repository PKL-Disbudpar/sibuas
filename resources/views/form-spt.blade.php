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
    <link rel="stylesheet" href="{{ asset('css/style_form-spt.css') }}">
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
                                    <i class="fa fa-regular fa-user rounded-circle border p-1 ml-2"></i>
                                    <span class="pl-2">{{ Session::get('username') }}</span>
                                    <i class="arrow-down ml-2"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="{{ route('logout') }}" class="text-custom" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
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

    <section id="subTitle">
        <h4>FORM DATA SPT</h4>
        <p>Silahkan diisi untuk pemenuhan data Surat Perintah Tugas (SPT)</p>
    </section>

    <section class="card">
        <div class="card-header">
            <h3 class="card-title">Form SPT</h3>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert" style="margin-top: 0.5cm">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(function() {
                    const alertElement = document.getElementById('success-alert');
                    if (alertElement) {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('fade');
                        alertElement.addEventListener('transitionend', () => alertElement.remove());
                    }
                }, 2000);
            </script>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="danger-alert" style="margin-top: 0.5cm">
                {{ session('error') }}
            </div>

            <script>
                setTimeout(function() {
                    const alertElement = document.getElementById('danger-alert');
                    if (alertElement) {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('fade');
                        alertElement.addEventListener('transitionend', () => alertElement.remove());
                    }
                }, 5000);
            </script>
        @endif

        <form action="{{ route('form-spt.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="InputTanggalSPT">Tanggal SPT</label>
                    <input type="date" class="form-control" name="tgl_spt" id="InputTanggalSPT" placeholder="Masukkan Tanggal SPT" value="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <th class="col md-6">Nama</th>
                                <th><button type="button" class="btn btn-primary ml-3" id="add-nama"><i class="fas fa-plus"></i></button></th>
                            </thead>
                            <tbody id="dataNama">
                                <!-- Row input will be added dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputTujuanSPT">Tujuan SPT</label>
                    <textarea class="form-control" name="tujuan_spt" id="InputTujuanSPT" placeholder="Masukkan Tujuan SPT" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>TTD Oleh</label>
                    <select class="form-control select2" name="ttd" style="width: 100%;">
                        <option selected="selected">Kepala Bidang</option>
                        <option>Kepala Dinas</option>
                    </select>
                </div>
            </div>
            <div id="buttons">
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Batal</button>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </section>

    <footer>
        <p>Copyright ©SIBUAS 2024</p>
    </footer>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function () {
            // Initialize Select2
            $('.select2').select2();

            let dataRowDetail = 0;
            $("#add-nama").click(() => {
                dataRowDetail++;
                inputRowDetail(dataRowDetail);
            });

            function inputRowDetail(i) {
                let tr = `<tr id="input-tr-${i}">
                            <td class="form-group">
                                <select class="form-control select2bs4" style="width: 100%" name="nip_pegawai[]" required>
                                    @foreach ($data as $item)
                                        <option value="{{ $item->nip_pegawai }}">
                                            {{ $item->nama }} - {{ $item->bidang->nama_bidang ?? 'Bidang tidak ditemukan' }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-danger delete-obyek float-right" data-ido="${i}">Hapus</a>
                            </td>
                          </tr>`;
                $("#dataNama").append(tr);
                $('.select2').select2();  // Reinitialize Select2 for dynamically added rows
            }

            $("#dataNama").on("click", ".delete-obyek", function () {
                let id = $(this).attr("data-ido");
                $("#input-tr-" + id).remove();
            });
        });
    </script>
</body>
</html>


{{-- @extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style_form-spt.css') }}">
@endpush

@section('content')
    <section id="subTitle">
      <h4>FORM DATA SPT</h4>
      <p>Silahkan diisi untuk pemenuhan data Surat Perintah Tugas (SPT)</p>
    </section>

    <section class="card">
        <div class="card-header">
            <h3 class="card-title">Form SPT</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('form-spt.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="InputTanggalSPT">Tanggal SPT</label>
                    <input type="date" class="form-control" id="InputTanggalSPT" name="tgl_spt"
                        placeholder="Masukkan Tanggal SPT">
                </div>
                <div class="form-group">
                    <div class="row">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <th class="col md-6">Nama</th>

                                <th><button type="button" class="btn btn-primary ml-3" id="add-nama"><i
                                            class="fas fa-plus"></i></button></th>
                            </thead>
                            <tbody id="dataNama">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputTujuanSPT">Tujuan SPT</label>
                    <textarea class="form-control" id="InputTujuanSPT" name="tujuan_spt" placeholder="Masukkan Tujuan SPT" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>TTD Oleh</label>
                    <select class="form-control select2" name="ttd" style="width: 100%;">
                        <option selected="selected">Kepala Bidang</option>
                        <option>Kepala Dinas</option>
                    </select>
                </div>
            </div>
            <div id="buttons">
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Batal</button>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Proses</button>
                </div>
            </div>
        </form>
    </section>
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
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="../../dist/js/demo.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2').colorpicker()
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());

            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
    </script>

    <script type="text/javascript">
      let dataRowDetail = 0;
      $("#add-nama").click(() => {
        dataRowDetail++;
        inputRowDetail(dataRowDetail);
      });
      
      inputRowDetail = (i) => {

        let tr = `<tr id="input-tr-${i}">
                    <td class="form-group">
                        <select
                          class="form-control select2bs4"
                          style="width: 100%"
                          name="nama_spt"
                          required
                        >` + 
                        
                        "@foreach($data as $item) <option value='{{ $item->nip_pegawai }}'>{{ $item->nama }} - {{ $item->bidang->nama_bidang ?? 'Bidang tidak ditemukan' }}</option> @endforeach"

                        // `@foreach($data as $item)
                        //     <option value='{{ $item->nip_pegawai }}' data-nama="{{ $item->nama }}" data-bidang="{{ $item->bidang->nama_bidang ?? '' }}">
                        //         {{ $item->nama }} - {{ $item->bidang->nama_bidang ?? 'Bidang tidak ditemukan'}}
                        //     </option>
                        //   @endforeach`
                        
                        + `
                                            
                    
                        </select>
                      </td>
                    <td><a class="btn btn-sm btn-danger delete-obyek float-right" data-ido="${i}">Hapus</a></td>
                  </tr>`;
      
        $("#dataNama").append(tr);
      };

      $("#dataNama").on("click", ".delete-obyek", function () {
            let id = $(this).attr("data-ido");
            $("#input-tr-" + id).remove();
          });
    </script>
@endpush --}}