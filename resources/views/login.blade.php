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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-icon">
            <img src="{{ asset('images/login-icon.png') }}" alt="Login Icon">
        </div>
        <h2>Login</h2>
        <form action="{{ route('login.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
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
</body>
</html> --}}