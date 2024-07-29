<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBUAS</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header>
        <div id="navbar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <div class="logo-text">
                    <span>Sistem Informasi Buku Tamu dan SPT</span>
                    <span>Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur</span>
                </div>
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
        <div class="login-container">
            <div class="login-icon">
                <img src="{{ asset('images/login-icon.png') }}" alt="Login Icon">
            </div>
            <h2>Login</h2>
            <form>
                <div class="input-group">
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-button">Masuk</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright ©SIBUAS 2024</p>
    </footer>
</body>

</html>
