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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('css/bukutamu.css') }}">
</head>

<body>
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
                        <li><a href="{{url('/')}}" class="text-custom">Home</a></li>
                        <li><a href="{{url('/buku-tamu')}}" class="text-custom">Buku Tamu</a></li>
                        <li><a href="{{url('/login')}}" class="text-custom">Login</a></li>
                    </ul>
                </nav>
            </div>
        @show    
    </header>

    <section id="subTitle">
        <h4>BUKU TAMU</h4>
        <p>Silahkan isi buku tamu dibawah ini</p>
    </section>

    <section class="card">
        <div class="card-header">
            <h3 class="card-title">Form Buku Tamu</h3>
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
        @endif

        <form action="{{ route('buku-tamu.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="InputNamaPengunjung">Nama</label>
                    <input type="text" class="form-control" id="InputNamaPengunjung" name="nama_tamu"
                        placeholder="Masukkan Nama Pengunjung" style="text-transform: capitalize">
                </div>
                <div class="form-group">
                    <label for="InputAsalInstansi">Asal Instansi</label>
                    <input type="text" class="form-control" id="InputAsalInstansi" name="asal_instansi"
                        placeholder="Masukkan Asal Instansi">
                    <label style="font-size: 10px; font-style:italic">*Jika keperluan individu maka ditulis "Pribadi"</label>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                        <option selected="selected"></option>
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputnoHP">
                        </i> No. HP
                    </label>
                    <input type="text" class="form-control" id="inputnoHP" name="no_hp" placeholder="Masukkan nomor HP">

                    <script>
                        // Blokir input selain angka
                        inputnoHP.addEventListener('keypress', function (e) {
                            const charCode = e.charCode || e.keyCode;

                            // Izinkan angka (0-9) saja
                            if (charCode < 48 || charCode > 57) {
                                e.preventDefault();
                            }
                        });

                        // Untuk validasi angka yang diinputkan hanya 10-13 angka
                        document.getElementById('inputnoHP').addEventListener('input', function () {
                            const input = this;
                            const value = input.value.trim();

                            // Periksa apakah panjang nomor HP valid
                            if (value.length >= 10 && value.length <= 13) {
                                input.classList.add('is-valid');   // Tambahkan kelas sukses
                                input.classList.remove('is-invalid'); // Hapus kelas error jika ada
                            } else {
                                input.classList.add('is-invalid'); // Tambahkan kelas error
                                input.classList.remove('is-valid');   // Hapus kelas sukses jika ada
                            }
                        });
                    </script>
                </div>
                <div class="form-group">
                    <label for="InputTanggalPengunjung">Tanggal Pengunjung</label>
                    <input type="date" class="form-control" id="InputTanggalPengunjung" name="tgl_pengunjung"
                        placeholder="Masukkan Tanggal Pengunjung" value="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group">
                    <label for="InputKeperluan">Keperluan</label>
                    <textarea class="form-control" id="InputKeperluan" name="keperluan" placeholder="Masukkan Keperluan" rows="5"></textarea>
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
    <script src="{{ asset('js/main.js') }}"></script>

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
    </script>
</body>
</html>

{{-- @extends('layouts.app') 

@push('styles')
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('css/bukutamu.css') }}">
@endpush

@section('content')
    <section id="subTitle">
        <h4>BUKU TAMU</h4>
        <p>Silahkan isi buku tamu dibawah ini</p>
    </section>

    <section class="card">
        <div class="card-header">
            <h3 class="card-title">Form Buku Tamu</h3>
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
        @endif

        <form action="{{ route('buku-tamu.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="InputNamaPengunjung">Nama</label>
                    <input type="text" class="form-control" id="InputNamaPengunjung" name="nama_tamu"
                        placeholder="Masukkan Nama Pengunjung" style="text-transform: capitalize">
                </div>
                <div class="form-group">
                    <label for="InputAsalInstansi">Asal Instansi</label>
                    <input type="text" class="form-control" id="InputAsalInstansi" name="asal_instansi"
                        placeholder="Masukkan Asal Instansi">
                    <label style="font-size: 10px; font-style:italic">*Jika keperluan individu maka ditulis "Pribadi"</label>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                        <option selected="selected"></option>
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputnoHP">
                        </i> No. HP
                    </label>
                    <input type="text" class="form-control" id="inputnoHP" name="no_hp" placeholder="Masukkan nomor HP">

                    <script>
                        // Blokir input selain angka
                        inputnoHP.addEventListener('keypress', function (e) {
                            const charCode = e.charCode || e.keyCode;

                            // Izinkan angka (0-9) saja
                            if (charCode < 48 || charCode > 57) {
                                e.preventDefault();
                            }
                        });

                        // Untuk validasi angka yang diinputkan hanya 10-13 angka
                        document.getElementById('inputnoHP').addEventListener('input', function () {
                            const input = this;
                            const value = input.value.trim();

                            // Periksa apakah panjang nomor HP valid
                            if (value.length >= 10 && value.length <= 13) {
                                input.classList.add('is-valid');   // Tambahkan kelas sukses
                                input.classList.remove('is-invalid'); // Hapus kelas error jika ada
                            } else {
                                input.classList.add('is-invalid'); // Tambahkan kelas error
                                input.classList.remove('is-valid');   // Hapus kelas sukses jika ada
                            }
                        });
                    </script>
                </div>
                <div class="form-group">
                    <label for="InputTanggalPengunjung">Tanggal Pengunjung</label>
                    <input type="date" class="form-control" id="InputTanggalPengunjung" name="tgl_pengunjung"
                        placeholder="Masukkan Tanggal Pengunjung" value="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group">
                    <label for="InputKeperluan">Keperluan</label>
                    <textarea class="form-control" id="InputKeperluan" name="keperluan" placeholder="Masukkan Keperluan" rows="5"></textarea>
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
    <script src="{{ asset('js/main.js') }}"></script>

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
    </script>

@endpush --}}