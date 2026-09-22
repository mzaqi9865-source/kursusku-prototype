<?php

$kursus = [
    [
        "nama" => "Pemrograman Web Dasar",
        "kategori" => "Web Development",
        "durasi" => "8 Minggu",
        "harga" => 500000,
        "status" => "Tersedia"
    ],
    [
        "nama" => "PHP & MySQL",
        "kategori" => "Backend Development",
        "durasi" => "10 Minggu",
        "harga" => 750000,
        "status" => "Tersedia"
    ],
    [
        "nama" => "UI/UX Design",
        "kategori" => "Design",
        "durasi" => "6 Minggu",
        "harga" => 600000,
        "status" => "Penuh"
    ],
    [
        "nama" => "Python untuk Pemula",
        "kategori" => "Programming",
        "durasi" => "8 Minggu",
        "harga" => 650000,
        "status" => "Tersedia"
    ],
    [
        "nama" => "Digital Marketing",
        "kategori" => "Marketing",
        "durasi" => "6 Minggu",
        "harga" => 550000,
        "status" => "Penuh"
    ],
    [
        "nama" => "Data Analysis",
        "kategori" => "Data Science",
        "durasi" => "10 Minggu",
        "harga" => 800000,
        "status" => "Tersedia"
    ]
];

?>

<!DOCTYPE html>

<html lang="id">

<head>

```
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Kursusku Prototype - Platform katalog kursus online">

<title>Kursusku - Katalog Kursus</title>

<style>

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f4f6f8;
        color: #222;
        line-height: 1.6;
    }

    /* HEADER */

    header {
        background: #2563eb;
        color: white;
        padding: 35px 20px;
        text-align: center;
    }

    header h1 {
        font-size: 36px;
        margin-bottom: 8px;
    }

    header p {
        font-size: 16px;
    }

    /* NAVBAR */

    .navbar {
        background: #1d4ed8;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 12px;
        flex-wrap: wrap;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 7px;
        background: rgba(255, 255, 255, 0.12);
        transition: 0.2s;
    }

    .navbar a:hover {
        background: white;
        color: #1d4ed8;
    }

    /* CONTAINER */

    .container {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto;
    }

    /* HERO */

    .hero {
        background: white;
        padding: 35px;
        border-radius: 14px;
        margin-bottom: 35px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .hero h2 {
        color: #2563eb;
        font-size: 28px;
        margin-bottom: 10px;
    }

    .hero p {
        color: #555;
    }

    /* KATALOG */

    .section-title {
        margin-bottom: 20px;
        color: #1f2937;
    }

    .kursus-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .kursus {
        background: white;
        padding: 22px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s;
    }

    .kursus:hover {
        transform: translateY(-3px);
    }

    .kursus h3 {
        color: #1d4ed8;
        margin-bottom: 12px;
    }

    .kursus p {
        margin-bottom: 8px;
        color: #555;
    }

    .harga {
        font-size: 18px;
        font-weight: bold;
        color: #111827;
        margin-top: 12px;
    }

    /* STATUS */

    .status {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: bold;
        margin-top: 10px;
    }

    .tersedia {
        background: #dcfce7;
        color: #166534;
    }

    .penuh {
        background: #fee2e2;
        color: #991b1b;
    }

    /* KOMPONEN */

    .component-section {
        margin-top: 45px;
    }

    .components {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .component {
        background: white;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    }

    .component h3 {
        margin-bottom: 10px;
        color: #1d4ed8;
    }

    .component p {
        color: #666;
        margin-bottom: 18px;
    }

    .button {
        display: inline-block;
        text-decoration: none;
        background: #2563eb;
        color: white;
        padding: 10px 18px;
        border-radius: 7px;
        transition: 0.2s;
    }

    .button:hover {
        background: #1d4ed8;
    }

    /* MEDIA */

    .media-section {
        margin-top: 45px;
    }

    .media-box {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    }

    .media-box h3 {
        color: #1d4ed8;
        margin-bottom: 15px;
    }

    .media-box img {
        width: 100%;
        max-height: 350px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .media-box video {
        width: 100%;
        border-radius: 10px;
    }

    /* FOOTER */

    footer {
        margin-top: 60px;
        padding: 25px;
        text-align: center;
        background: #1f2937;
        color: white;
    }

    /* RESPONSIVE */

    @media (max-width: 768px) {

        .kursus-grid,
        .components {
            grid-template-columns: 1fr;
        }

        .container {
            width: 94%;
        }

        header h1 {
            font-size: 28px;
        }

        .navbar {
            flex-direction: column;
        }

        .navbar a {
            width: 100%;
            text-align: center;
        }
    }

</style>
```

</head>

<body>

<!-- HEADER -->

<header>

```
<h1>📚 Kursusku</h1>

<p>
    Platform belajar online untuk meningkatkan keterampilanmu
</p>
```

</header>

<!-- NAVIGATION -->

<nav class="navbar">

```
<a href="index.php">
    🏠 Katalog
</a>

<a href="server-time.php">
    🕐 Server Time
</a>

<a href="fee-calculator.php">
    💰 Kalkulator
</a>

<a href="test-functions.php">
    🧪 Test Functions
</a>
```

</nav>

<!-- MAIN -->

<div class="container">

```
<!-- HERO -->

<section class="hero">

    <h2>
        Temukan Kursus Pilihanmu
    </h2>

    <p>
        Pilih kursus sesuai kebutuhanmu dan
        tingkatkan kemampuan bersama Kursusku.
    </p>

</section>


<!-- KATALOG -->

<section>

    <h2 class="section-title">
        📚 Katalog Kursus
    </h2>

    <div class="kursus-grid">

        <?php foreach ($kursus as $item): ?>

            <div class="kursus">

                <h3>
                    <?= htmlspecialchars($item["nama"]) ?>
                </h3>

                <p>
                    <strong>Kategori:</strong>
                    <?= htmlspecialchars($item["kategori"]) ?>
                </p>

                <p>
                    <strong>Durasi:</strong>
                    <?= htmlspecialchars($item["durasi"]) ?>
                </p>

                <p class="harga">
                    Rp <?= number_format($item["harga"], 0, ',', '.') ?>
                </p>


                <?php if ($item["status"] === "Tersedia"): ?>

                    <span class="status tersedia">
                        ✓ Tersedia
                    </span>

                <?php else: ?>

                    <span class="status penuh">
                        ✕ Penuh
                    </span>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- KOMPONEN -->

<section class="component-section">

    <h2 class="section-title">
        ⚙️ Komponen Aplikasi
    </h2>

    <div class="components">


        <!-- SERVER TIME -->

        <div class="component">

            <h3>
                🕐 Server Time
            </h3>

            <p>
                Menampilkan waktu yang diproses
                langsung oleh PHP server.
            </p>

            <a
                class="button"
                href="server-time.php"
            >
                Buka Server Time
            </a>

        </div>


        <!-- KALKULATOR -->

        <div class="component">

            <h3>
                💰 Kalkulator Biaya
            </h3>

            <p>
                Menghitung biaya kursus dan
                potongan harga secara otomatis.
            </p>

            <a
                class="button"
                href="fee-calculator.php"
            >
                Buka Kalkulator
            </a>

        </div>


        <!-- TEST -->

        <div class="component">

            <h3>
                🧪 Test Functions
            </h3>

            <p>
                Menguji fungsi PHP dengan
                enam test otomatis.
            </p>

            <a
                class="button"
                href="test-functions.php"
            >
                Buka Testing
            </a>

        </div>

    </div>

</section>


<!-- MEDIA -->

<section class="media-section">

    <h2 class="section-title">
        🎬 Media Kursus
    </h2>

    <div class="media-box">

        <h3>
            Video Intro Kursusku
        </h3>

        <video controls>

            <source
                src="assets/video/intro-kursus.mp4"
                type="video/mp4"
            >

            Browser kamu tidak mendukung
            pemutaran video.

        </video>

    </div>

</section>
```

</div>

<!-- FOOTER -->

<footer>

```
<p>
    &copy; 2026 Kursusku Prototype
</p>
```

</footer>

</body>

</html>
