<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Buku Tamu dan SPT</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #226597;
            color: #ffffff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 90px;
            position: relative;
        }

        .navbar .logo {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .navbar .logo img {
            display: flex;
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .navbar .logo .judul {
            display: flex;
            flex-direction: column;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle .bar {
            height: 3px;
            width: 25px;
            background-color: #ffffff;
            margin: 4px 0;
            transition: 0.3s;
        }

        .nav-list {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-list li {
            margin-left: 20px;
        }

        .nav-list li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .nav-list li .dropdown {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0
        }

        .nav-list li .dropdown.active {
            display: block;
        }

        .nav-list li .dropdown a {
            color: #113f67;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 16px;
        }

        .nav-list li .dropdown a:hover {
            background-color: #f1f1f1;
        }

        .nav-list li .arrow-down {
            border: solid white;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 3px;
            margin-left: 5px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .hero .hero-text {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .hero .hero-text h1 {
            color: #ff7f27;
            font-size: 24px;
        }

        .hero .hero-text h2 {
            color: #113F67;
            font-size: 36px;
            margin: 10px 0px;
        }

        .hero .hero-text p {
            color: #666666;
            font-size: 18px;
        }

        .hero .hero-text .buttons {
            margin-top: 20px;
        }

        .hero .hero-text .buttons .btn {
            background-color: #ff7f27;
            color: #ffffff;
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .hero.hero-image {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .hero .hero-image img {
            width: 100%;
            max-width: 500px;
            margin-top: 30px;
        }

        .about {
            padding: 50px 20px;
            text-align: center;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .about .about-text {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 20px;
            width: 100%;
        }

        .about h2 {
            color: #ff7f27;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .about p {
            color: #666666;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .about .about-image {
            width: 100%; 
            display: flex; 
            justify-content: center; 
        }

        .about .about-image img {
            width: 7cm;
        }

        footer {
            background-color: #226597;
            color: #ffffff;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: start;
            padding: 0 20px;
            background-color: #065FAD;
        }

        .footer-content .address {
            text-align: left;
        }

        .footer-content div {
            width: 30%;
        }

        .footer-content .address p:first-child {
            margin: 18px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .footer-content p {
            margin: 5px 0;
        }

        .footer-content .social-media a {
            display: inline-block;
            margin-right: 10px;
        }

        .footer-content .social-media img {
            width: 30px;
            height: auto;
        }

        .footer-content .services {
            display: flex;
            flex-direction: column;
        }

        .footer-content .services a {
            text-decoration: none;
            color: #ffffff;
            margin: 5px 0;
        }

        .footer-bottom {
            margin-top: 10px;
            padding: 8px;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 18px 20px;
            }

            .menu-toggle {
                display: flex;
            }

            nav {
                display: none;
            }

            nav.active {
                display: block;
                position: absolute;
                top: 100%;
                right: 0;
                background-color: #226597;
                padding: 10px;
                text-align: center;
            }

            .nav-list {
                flex-direction: column;
            }

            .nav-list li {
                margin: 10px 0;
            }

            .nav-list li .dropdown {
                position: static;
            }

            .hero, .about {
                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
            }

            .footer-content div {
                width: 100%;
                margin-bottom: 20px;
            }
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#/BukuTamu">Buku Tamu</a></li>
                    <li class="dropdown-container">
                        <a href="javascript:void(0);" class="dropbtn">SPT <i class="arrow-down"></i></a>
                        <div class="dropdown">
                            <a href="#">Buat SPT</a>
                            <a href="#">Riwayat SPT</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Selamat Datang di</h1>
                <h2>SISTEM INFORMASI BUKU TAMU DAN SPT (SIBUAS)</h2>
                <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
                <div class="buttons">
                    <a href="#" class="btn">Buku Tamu</a>
                    <a href="#" class="btn">SPT</a>
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
    </main>

    <footer>
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
                <a href="#">Buku Tamu</a>
                <a href="#">SPT</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © SIBUAS 2024</p>
            <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
        </div>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>