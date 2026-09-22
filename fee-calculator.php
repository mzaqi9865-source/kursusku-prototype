<?php

require_once "helpers.php";

$harga = 500000;
$jumlah = 2;
$diskon = 10;

$totalSebelumDiskon = hitungBiayaKursus($harga, $jumlah);
$totalSetelahDiskon = hitungDiskon($totalSebelumDiskon, $diskon);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator Biaya - Kursusku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2563eb;
            margin-bottom: 25px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .total {
            font-size: 22px;
            font-weight: bold;
            color: #166534;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>💰 Kalkulator Biaya Kursus</h1>

        <div class="row">
            <span>Harga per kursus</span>
            <strong><?= formatRupiah($harga) ?></strong>
        </div>

        <div class="row">
            <span>Jumlah kursus</span>
            <strong><?= $jumlah ?></strong>
        </div>

        <div class="row">
            <span>Diskon</span>
            <strong><?= $diskon ?>%</strong>
        </div>

        <div class="row">
            <span>Total sebelum diskon</span>
            <strong><?= formatRupiah($totalSebelumDiskon) ?></strong>
        </div>

        <div class="total">
            Total Bayar:
            <?= formatRupiah($totalSetelahDiskon) ?>
        </div>

        <a href="index.php">Kembali ke Katalog</a>

    </div>

</div>

</body>
</html>