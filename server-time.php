<?php
date_default_timezone_set("Asia/Jakarta");

$serverTime = date("d-m-Y H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Time - Kursusku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            text-align: center;
            padding-top: 100px;
        }

        .box {
            background: white;
            width: 90%;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2563eb;
        }

        .time {
            font-size: 28px;
            font-weight: bold;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            color: white;
            background: #2563eb;
            padding: 10px 18px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Waktu Server Kursusku</h1>

    <p>Waktu yang ditampilkan berasal dari PHP server.</p>

    <div class="time">
        <?= $serverTime ?>
    </div>

    <a href="index.php">Kembali ke Katalog</a>

</div>

</body>
</html>