```php
<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kursusku - Beranda</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background: #007bff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 10px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-menu a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-menu .register {
            background: white;
            color: #007bff;
            font-weight: bold;
        }

        /* Hero */
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: white;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #666;
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn:hover {
            background: #0056b3;
        }

        /* Program */
        .program {
            padding: 50px 20px;
            text-align: center;
        }

        .program h2 {
            margin-bottom: 30px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            width: 250px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            color: #007bff;
        }

        .card p {
            color: #666;
            line-height: 1.5;
        }

        /* Footer */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        /* Mobile */
        @media (max-width: 600px) {
            .navbar {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGASI -->
<nav class="navbar">

    <a href="index.php" class="logo">
        Kursusku
    </a>

    <div class="nav-menu">
        <a href="index.php">Beranda</a>
        <a href="#program">Program</a>
        <a href="registration.php" class="register">
            Registrasi
        </a>
    </div>

</nav>


<!-- HERO -->
<section class="hero">

    <h1>Selamat Datang di Kursusku</h1>

    <p>
        Platform pembelajaran untuk meningkatkan keterampilan
        dan pengetahuan melalui berbagai program kursus.
    </p>

    <a href="registration.php" class="btn">
        Daftar Kursus Sekarang
    </a>

</section>


<!-- PROGRAM -->
<section class="program" id="program">

    <h2>Program Kursus</h2>

    <div class="cards">

        <div class="card">
            <h3>Pemrograman Web</h3>
            <p>
                Belajar membuat website menggunakan HTML,
                CSS, PHP, dan teknologi web lainnya.
            </p>
        </div>

        <div class="card">
            <h3>Desain Grafis</h3>
            <p>
                Pelajari dasar desain grafis dan pembuatan
                berbagai media visual.
            </p>
        </div>

        <div class="card">
            <h3>Digital Marketing</h3>
            <p>
                Pelajari strategi pemasaran digital melalui
                berbagai platform online.
            </p>
        </div>

    </div>

</section>


<!-- FOOTER -->
<footer>

    <p>
        &copy; 2026 Kursusku. All Rights Reserved.
    </p>

</footer>

</body>
</html>
```
