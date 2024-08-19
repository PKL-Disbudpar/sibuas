<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIBUAS')</title>
    @stack('styles')
    <style>
        .text-custom:hover {
            color: #FF7F27;
        }
    </style>
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
                    <li><a href="{{url('/')}}" class="text-custom">Home</a></li>
                    <li><a href="{{url('/buku-tamu')}}" class="text-custom">Buku Tamu</a></li>
                    <li class="dropdown-container">
                        <a href="javascript:void(0);" class="dropbtn text-custom">SPT <i class="arrow-down"></i></a>
                        <div class="dropdown">
                            <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT</a>
                            <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @section('footer')
            <p>Copyright ©SIBUAS 2024</p>
        @show
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
