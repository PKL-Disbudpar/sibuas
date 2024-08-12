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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/BukuTamu') }}">Buku Tamu</a></li>
                    <li class="dropdown-container">
                        <a href="javascript:void(0);" class="dropbtn">SPT <i class="arrow-down"></i></a>
                        <div class="dropdown">
                            <a href="{{ url('/form-spt') }}">Buat SPT</a>
                            <a href="{{ url('/riwayat-spt') }}">Riwayat SPT</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="subTitle">
        <h4>BUKU TAMU</h4>
        <p>Silahkan isi buku tamu dibawah ini</p>
    </section>

    <section class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Buku Tamu</h3>
        </div>

        <form action="{{ route('bukutamu.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="InputNamaPengunjung">Nama</label>
                    <input type="text" class="form-control" id="InputNamaPengunjung" name="nama_tamu"
                        placeholder="Masukkan Nama Pengunjung">
                </div>
                <div class="form-group">
                    <label for="InputAsalInstansi">Asal Instansi</label>
                    <input type="text" class="form-control" id="InputAsalInstansi" name="asal_instansi"
                        placeholder="Masukkan Asal Instansi">
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
                    <label for="InputNoHp">No.Hp</label>
                    <input type="text" class="form-control" id="InputNoHp" name="no_hp"
                        placeholder="Masukkan No.Hp">
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
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </section>

    <footer class>
        <p>Copyright ©SIBUAS 2024</p>
    </footer>

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
    <!-- AdminLTE App
    <script src="../../dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes
    <script src="../../dist/js/demo.js"></script> -->
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
