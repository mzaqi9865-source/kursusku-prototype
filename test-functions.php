<?php

require_once "helpers.php";

$tests = [];

/* TEST 1 */
$hasil = hitungDiskon(100000, 10);
$tests[] = [
    "nama" => "Test hitungDiskon()",
    "hasil" => ($hasil == 90000)
];

/* TEST 2 */
$hasil = hitungBiayaKursus(500000, 2);
$tests[] = [
    "nama" => "Test hitungBiayaKursus()",
    "hasil" => ($hasil == 1000000)
];

/* TEST 3 */
$hasil = formatRupiah(500000);
$tests[] = [
    "nama" => "Test formatRupiah()",
    "hasil" => ($hasil == "Rp 500.000")
];

/* TEST 4 */
$hasil = statusKursus(20, 20);
$tests[] = [
    "nama" => "Test statusKursus()",
    "hasil" => ($hasil == "Penuh")
];

/* TEST 5 */
$hasil = hitungPersentase(25, 100);
$tests[] = [
    "nama" => "Test hitungPersentase()",
    "hasil" => ($hasil == 25)
];

/* TEST 6 */
$hasil = sapaPengguna("Zaqi");
$tests[] = [
    "nama" => "Test sapaPengguna()",
    "hasil" => ($hasil == "Halo, Zaqi!")
];

$totalTest = count($tests);
$totalPass = 0;

foreach ($tests as $test) {
    if ($test["hasil"]) {
        $totalPass++;
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Functions - Kursusku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px 20px;
        }

        .container {
            max-width: 700px;
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
            margin-bottom: 10px;
        }

        .summary {
            background: #dcfce7;
            color: #166534;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-weight: bold;
        }

        .test {
            display: flex;
            justify-content: space-between;
            padding: 14px;
            margin: 10px 0;
            border-radius: 8px;
            background: #f0fdf4;
        }

        .pass {
            color: #166534;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>🧪 Test Functions</h1>

        <p>
            Pengujian fungsi PHP pada aplikasi Kursusku.
        </p>

        <div class="summary">
            <?= $totalPass ?> / <?= $totalTest ?> TEST PASS
        </div>

        <?php foreach ($tests as $test): ?>

            <div class="test">

                <span>
                    <?= htmlspecialchars($test["nama"]) ?>
                </span>

                <?php if ($test["hasil"]): ?>

                    <span class="pass">
                        PASS
                    </span>

                <?php else: ?>

                    <span>
                        FAIL
                    </span>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

        <a href="index.php">
            Kembali ke Katalog
        </a>

    </div>

</div>

</body>
</html>