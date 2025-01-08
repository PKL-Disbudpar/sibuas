@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp

@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
@endpush

@section('navbar')
    
@endsection

@section('content')
    <div class="login-container">
        <div class="login-icon">
            <img src="{{ asset('images/login-icon.png') }}" alt="Login Icon">
        </div>
        <h2>Login</h2>
        <form action="{{ route('login.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                {{-- <div class="invalid-feedback">Username tidak boleh kosong</div> --}}
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"  required>
                <i class="eye-password fa fa-regular fa-eye-slash" onclick="showHide()"></i>
                @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
    </div>
@endsection

@push('script')
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function showHide() {
            var inputan = document.getElementById("password");
            if (inputan.type === "password") {
                inputan.type = "text";
            } else {
                inputan.type = "password";
            }
        }
    </script>
@endpush

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBUAS</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <div class="judul">
                    <span>Sistem Informasi Buku Tamu dan SPT</span>
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

    <main>
        <div class="login-container">
            <div class="login-icon">
                <img src="{{ asset('images/login-icon.png') }}" alt="Login Icon">
            </div>
            <h2>Login</h2>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-button">Masuk</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright ©SIBUAS 2024</p>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html> --}}