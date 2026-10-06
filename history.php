```php
<?php
// Data history registrasi dummy
$history = [
    [
        "nama" => "Muhamad Zaqi",
        "email" => "zaqi@gmail.com",
        "kursus" => "Web Development",
        "jenis_peserta" => "Mahasiswa",
        "harga" => 750000,
        "diskon" => 10,
        "tanggal" => "06-10-2026"
    ],
    [
        "nama" => "Rendy Risaldin",
        "email" => "rendy@gmail.com",
        "kursus" => "Digital Marketing",
        "jenis_peserta" => "Guru",
        "harga" => 650000,
        "diskon" => 15,
        "tanggal" => "05-10-2026"
    ],
    [
        "nama" => "Ahmad Fauzan",
        "email" => "ahmad@gmail.com",
        "kursus" => "Desain Grafis",
        "jenis_peserta" => "Mahasiswa",
        "harga" => 600000,
        "diskon" => 10,
        "tanggal" => "04-10-2026"
    ],
    [
        "nama" => "Siti Rahma",
        "email" => "siti@gmail.com",
        "kursus" => "Pemrograman PHP",
        "jenis_peserta" => "Guru",
        "harga" => 800000,
        "diskon" => 15,
        "tanggal" => "03-10-2026"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>History Registrasi - Kursusku</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #222;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 14px;
            text-align: center;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background: #f5f9ff;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .mahasiswa {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .guru {
            background: #dcfce7;
            color: #15803d;
        }

        .diskon {
            color: #dc2626;
            font-weight: bold;
        }

        .total {
            color: #15803d;
            font-weight: bold;
        }

        .back-button {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .back-button:hover {
            background: #1d4ed8;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>History Registrasi</h1>

    <p class="subtitle">
        Riwayat pendaftaran peserta Kursusku
    </p>

    <div class="table-wrapper">

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kursus</th>
                    <th>Jenis Peserta</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($history as $index => $data): ?>

                <?php
                $jumlahDiskon = $data["harga"] * $data["diskon"] / 100;
                $total = $data["harga"] - $jumlahDiskon;
                ?>

                <tr>

                    <td>
                        <?= $index + 1; ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data["nama"]); ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data["email"]); ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data["kursus"]); ?>
                    </td>

                    <td>

                        <?php if ($data["jenis_peserta"] === "Mahasiswa"): ?>

                            <span class="badge mahasiswa">
                                Mahasiswa
                            </span>

                        <?php else: ?>

                            <span class="badge guru">
                                Guru
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>
                        Rp <?= number_format($data["harga"], 0, ",", "."); ?>
                    </td>

                    <td class="diskon">

                        <?= $data["diskon"]; ?>%

                        <br>

                        -Rp <?= number_format($jumlahDiskon, 0, ",", "."); ?>

                    </td>

                    <td class="total">
                        Rp <?= number_format($total, 0, ",", "."); ?>
                    </td>

                    <td>
                        <?= $data["tanggal"]; ?>
                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

    <a href="registration.php" class="back-button">
        ← Kembali ke Form Registrasi
    </a>

</div>

</body>
</html>
```
