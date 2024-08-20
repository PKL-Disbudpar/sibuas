@extends('layouts.app')

@section('title', 'SIBUAS')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
@endpush
    
@section('content')
    <section class="hero">
        <div class="hero-text">
            <h1>Selamat Datang di</h1>
            <h2>SISTEM INFORMASI BUKU TAMU DAN SPT (SIBUAS)</h2>
            <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
            <div class="buttons">
                <a href="{{url('/buku-tamu')}}" class="btn">Buku Tamu</a>
                <a href="{{url('/form-spt')}}" class="btn">SPT</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero.png') }}" alt="Hero Image">
        </div>
    </section>

    <section class="about">
        <div class="about-image">
            <img src="{{ asset('images/about.png') }}" alt="About Image">
        </div>
        <div class="about-text">
            <h2>SIBUAS</h2>
            <p>SIBUAS menyediakan solusi inovatif untuk pencatatan kunjungan tamu dan Surat Perintah Tugas (SPT) untuk
                Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur. Dengan sistem Buku Tamu, pengelolaan data kunjungan
                dapat dilakukan lebih akurat dan sistematis, serta mempermudah pengelolaan data oleh adminstrasi. Sistem
                SPT memungkinkan pengelolaan serta pelacakan tugas secara efisien, memberikan kemudahan akses, validitas
                data, dan komparasi data untuk analisis yang lebih baik.</p>
            <p>Kami berkomitmen untuk memberikan layanan terbaik melalui teknologi terkini, mendukung Anda dalam
                menciptakan lingkungan yang lebih teratur, aman, dan efisien.</p>
        </div>
    </section>
@endsection

@section('footer')
    <div class="footer-content">
        <div class="address">
            <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
            <p>Jalan Wisata Menanggal, Dukuh Menanggal, Kec. Gayungan</p>
            <p>Kota Surabaya, Provinsi Jawa Timur 60234</p>
            <p><span style="font-weight: bold">Phone:</span> (031) 8531816 Fax: (031) 8531822</p>
            <p><span style="font-weight: bold">Email:</span> disbudpar@jatimprov.go.id</p>
            <p style="font-weight: bold">Jam Pelayanan:</p>
            <p>Senin s/d Kamis (08.00 - 16.00 WIB)</p>
            <p>Jum'at (07.00 - 16.00 WIB)</p>
        </div>
        <div class="social-media">
            <h3>Sosial Media</h3>
            <a href="#"><img src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('images/ig.png') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('images/tiktok.png') }}" alt="Tiktok"></a>
            <a href="#"><img src="{{ asset('images/youtube.png') }}" alt="Youtube"></a>
        </div>
        <div class="services">
            <h3>Layanan</h3>
            <a href="{{url('/buku-tamu')}}">Buku Tamu</a>
            <a href="{{url('/form-spt')}}">SPT</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © SIBUAS 2024</p>
        <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
    </div>
@endsection
