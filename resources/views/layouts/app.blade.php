<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIBUAS')</title>
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <style>
        .text-custom:hover {
            color: #FF7F27;
        }
    </style>
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
            @show
        </header>
    @else
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
                            {{-- <li class="dropdown-container">
                                <a href="javascript:void(0);" class="dropbtn text-custom">SPT <i class="arrow-down"></i></a>
                                <div class="dropdown">
                                    <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT </a>
                                    <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                                </div>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            @show    
        </header>
    @endif

    {{-- <header>
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
                        <li class="dropdown-container">
                            <a href="javascript:void(0);" class="dropbtn text-custom">SPT <i class="arrow-down"></i></a>
                            <div class="dropdown">
                                <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT </a>
                                <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                            </div>
                        </li>
                        <li><a href="{{url('/login')}}" class="text-custom">Login</a></li>
                    </ul>
                </nav>
            </div>
        @show    
    </header> --}}

    {{-- @guest
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
                            <li class="dropdown-container">
                                <a href="javascript:void(0);" class="dropbtn text-custom">SPT <i class="arrow-down"></i></a>
                                <div class="dropdown">
                                    <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT</a>
                                    <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                                </div>
                            </li>
                            <li><a href="{{url('/login')}}" class="text-custom">Login</a></li>
                        </ul>
                    </nav>
                </div>
            @show
        </header>
    @endguest --}}

    {{-- @auth
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
                                    <a href="{{url('/form-spt')}}" class="text-custom">Buat SPT</a>
                                    <a href="{{url('/riwayat-spt')}}" class="text-custom">Riwayat SPT</a>
                                </div>
                            </li>
                            <li><a href="{{url('/login')}}" class="text-custom">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            @show    
        </header>
    @endauth --}}

    <main>
        @yield('content')
    </main>

    @if (@empty($hideFooter))
        <footer>
            @section('footer')
                <p>Copyright ©SIBUAS 2024</p>
            @show
        </footer>
    @endif

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    @stack('scripts')
</body>

</html>
