<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Buku Tamu dan SPT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #001f54;
            color: #ffffff;
            padding: 10px 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .navbar .logo {
            display: flex;
            flex-direction: column;
        }

        .navbar .logo img {
            width: 50px;
            height: auto;
        }

        .navbar nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar nav ul li {
            margin-left: 20px;
        }

        .navbar nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
        }

        .hero h1 {
            color: #ff7f27;
            font-size: 24px;
        }

        .hero h2 {
            color: #004080;
            font-size: 36px;
        }

        .hero p {
            color: #666666;
            font-size: 18px;
        }

        .hero .buttons {
            margin-top: 20px;
        }

        .hero .buttons .btn {
            background-color: #ff7f27;
            color: #ffffff;
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .hero .hero-image img {
            width: 100%;
            max-width: 500px;
            margin-top: 30px;
        }

        .about {
            padding: 50px 20px;
            text-align: center;
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

        .about .about-image img {
            width: 100%;
            max-width: 500px;
        }

        footer {
            background-color: #001f54;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: start;
            padding: 0 20px;
        }

        .footer-content div {
            width: 30%;
        }

        .footer-content h3 {
            margin-bottom: 10px;
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

        .footer-bottom {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="path/to/logo.png" alt="Logo">
                <span>Sistem Informasi Buku Tamu dan SPT</span>
                <span>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Buku Tamu</a></li>
                    <li><a href="#">SPT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Selamat Datang di</h1>
            <h2>SISTEM INFORMASI BUKU TAMU DAN SPT (SIBUAS)</h2>
            <p>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</p>
            <div class="buttons">
                <a href="#" class="btn">Buku Tamu</a>
                <a href="#" class="btn">SPT</a>
            </div>
            <div class="hero-image">
                <img src="path/to/hero-image.png" alt="Hero Image">
            </div>
        </section>

        <section class="about">
            <h2>SIBUAS</h2>
            <p>SIBUAS menyediakan solusi inovatif untuk pencatatan kunjungan tamu dan Surat Perintah Tugas (SPT) untuk
                Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur. Dengan sistem Buku Tamu, pengelolaan data kunjungan
                dapat dilakukan lebih akurat dan sistematis, serta mempermudah pengelolaan data oleh adminstrasi. Sistem
                SPT memungkinkan pengelolaan serta pelacakan tugas secara efisien, memberikan kemudahan akses, validitas
                data, dan komparasi data untuk analisis yang lebih baik.</p>
            <p>Kami berkomitmen untuk memberikan layanan terbaik melalui teknologi terkini, mendukung Anda dalam
                menciptakan lingkungan yang lebih teratur, aman, dan efisien.</p>
            <div class="about-image">
                <img src="path/to/about-image.png" alt="About Image">
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="address">
                <h3>Dinas Kebudayaan dan Pariwisata</h3>
                <p>Provinsi Jawa Timur</p>
                <p>Jalan Pahlawan No. 1, Surabaya</p>
                <p>Tel: (031) 123456</p>
            </div>
            <div class="social-media">
                <h3>Sosial Media</h3>
                <a href="#"><img src="path/to/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="path/to/twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="path/to/instagram-icon.png" alt="Instagram"></a>
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
</body>

</html>
