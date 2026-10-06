<?php

// =====================================================
// DATA KURSUS
// =====================================================

$daftar_kursus = [
    "Pemrograman Web",
    "Desain Grafis",
    "Microsoft Office",
    "Digital Marketing",
    "Data Science",
    "Cyber Security",
    "Fotografi"
];


// =====================================================
// HARGA MASING-MASING KURSUS
// =====================================================

$harga_kursus_list = [
    "Pemrograman Web" => 750000,
    "Desain Grafis" => 650000,
    "Microsoft Office" => 500000,
    "Digital Marketing" => 700000,
    "Data Science" => 900000,
    "Cyber Security" => 1000000,
    "Fotografi" => 600000
];


// =====================================================
// DISKON BERDASARKAN JENIS PESERTA
// =====================================================

$diskon_peserta = [
    "Guru" => 20,
    "Mahasiswa" => 15,
    "Umum" => 5
];


// =====================================================
// DAFTAR MINAT
// =====================================================

$daftar_minat = [
    "Pemrograman",
    "UI/UX Design",
    "Editing Video",
    "Artificial Intelligence",
    "Desain Grafis",
    "Digital Marketing"
];


// =====================================================
// VARIABEL FORM
// =====================================================

$nama_lengkap = "";
$email = "";
$no_hp = "";
$program_studi = "";
$kursus = "";
$jenis_peserta = "";
$minat_tambahan = [];
$catatan = "";


// =====================================================
// VARIABEL PERHITUNGAN
// =====================================================

$harga_kursus = 0;
$persentase_diskon = 0;
$jumlah_diskon = 0;
$total_bayar = 0;


// =====================================================
// PESAN
// =====================================================

$errors = [];
$pesan_sukses = "";


// =====================================================
// PROSES FORM
// =====================================================

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // -------------------------------------------------
    // AMBIL DATA FORM
    // -------------------------------------------------

    $nama_lengkap = trim($_POST["nama_lengkap"] ?? "");

    $email = trim($_POST["email"] ?? "");

    $no_hp = trim($_POST["no_hp"] ?? "");

    $program_studi = trim($_POST["program_studi"] ?? "");

    $kursus = trim($_POST["kursus"] ?? "");

    $jenis_peserta = trim($_POST["jenis_peserta"] ?? "");

    $minat_tambahan = $_POST["minat_tambahan"] ?? [];

    $catatan = trim($_POST["catatan"] ?? "");


    // Pastikan minat berbentuk array
    if (!is_array($minat_tambahan)) {
        $minat_tambahan = [];
    }


    // =================================================
    // VALIDASI
    // =================================================

    if ($nama_lengkap === "") {
        $errors[] = "Nama lengkap wajib diisi.";
    }


    if ($email === "") {

        $errors[] = "Email wajib diisi.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Format email tidak valid.";

    }


    if ($no_hp === "") {
        $errors[] = "Nomor HP wajib diisi.";
    }


    if ($program_studi === "") {
        $errors[] = "Program studi wajib diisi.";
    }


    if ($kursus === "") {

        $errors[] = "Silakan pilih kursus.";

    } elseif (!array_key_exists($kursus, $harga_kursus_list)) {

        $errors[] = "Kursus yang dipilih tidak tersedia.";

    }


    if ($jenis_peserta === "") {

        $errors[] = "Silakan pilih jenis peserta.";

    } elseif (!array_key_exists($jenis_peserta, $diskon_peserta)) {

        $errors[] = "Jenis peserta tidak valid.";

    }


    // =================================================
    // MENGAMBIL HARGA KURSUS
    // =================================================

    if (
        $kursus !== "" &&
        array_key_exists($kursus, $harga_kursus_list)
    ) {

        $harga_kursus = $harga_kursus_list[$kursus];

    }


    // =================================================
    // MENGAMBIL PERSENTASE DISKON
    // =================================================

    if (
        $jenis_peserta !== "" &&
        array_key_exists($jenis_peserta, $diskon_peserta)
    ) {

        $persentase_diskon =
            $diskon_peserta[$jenis_peserta];

    }


    // =================================================
    // MENGHITUNG JUMLAH POTONGAN DISKON
    // =================================================

    $jumlah_diskon =
        $harga_kursus *
        ($persentase_diskon / 100);


    // =================================================
    // MENGHITUNG TOTAL BAYAR
    // =================================================

    $total_bayar =
        $harga_kursus -
        $jumlah_diskon;


    // =================================================
    // PESAN BERHASIL
    // =================================================

    if (empty($errors)) {

        $pesan_sukses =
            "Pendaftaran kursus berhasil diproses.";

    }

}

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Kursusku - Pendaftaran Kursus
    </title>


    <style>

        /* =================================================
           RESET
           ================================================= */

        * {
            box-sizing: border-box;
        }


        /* =================================================
           BODY
           ================================================= */

        body {

            margin: 0;

            padding: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                #f4f6f8;

            color:
                #333;

        }


        /* =================================================
           CONTAINER
           ================================================= */

        .container {

            width: 90%;

            max-width: 900px;

            margin:
                40px auto;

        }


        /* =================================================
           CARD
           ================================================= */

        .card {

            background:
                white;

            padding:
                30px;

            border-radius:
                12px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.08);

        }


        /* =================================================
           JUDUL
           ================================================= */

        h1 {

            text-align:
                center;

            color:
                #1d4ed8;

            margin-bottom:
                10px;

        }


        .subtitle {

            text-align:
                center;

            color:
                #666;

            margin-bottom:
                30px;

        }


        /* =================================================
           FORM
           ================================================= */

        .form-group {

            margin-bottom:
                20px;

        }


        label {

            display:
                block;

            font-weight:
                bold;

            margin-bottom:
                8px;

        }


        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {

            width:
                100%;

            padding:
                12px;

            border:
                1px solid #ccc;

            border-radius:
                7px;

            font-size:
                15px;

        }


        input:focus,
        select:focus,
        textarea:focus {

            outline:
                none;

            border-color:
                #2563eb;

        }


        textarea {

            min-height:
                100px;

            resize:
                vertical;

        }


        /* =================================================
           RADIO DAN CHECKBOX
           ================================================= */

        .radio-group,
        .checkbox-group {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                12px;

        }


        .radio-item,
        .checkbox-item {

            display:
                flex;

            align-items:
                center;

            gap:
                6px;

            background:
                #f8fafc;

            padding:
                10px 14px;

            border:
                1px solid #ddd;

            border-radius:
                7px;

            cursor:
                pointer;

        }


        .radio-item input,
        .checkbox-item input {

            width:
                auto;

        }


        /* =================================================
           BUTTON
           ================================================= */

        .btn {

            width:
                100%;

            border:
                none;

            padding:
                14px;

            border-radius:
                8px;

            background:
                #2563eb;

            color:
                white;

            font-size:
                16px;

            font-weight:
                bold;

            cursor:
                pointer;

        }


        .btn:hover {

            background:
                #1d4ed8;

        }


        /* =================================================
           PESAN ERROR
           ================================================= */

        .error {

            background:
                #fee2e2;

            color:
                #991b1b;

            padding:
                15px;

            border-radius:
                8px;

            margin-bottom:
                20px;

        }


        .error ul {

            margin:
                5px 0 0 20px;

        }


        /* =================================================
           PESAN SUKSES
           ================================================= */

        .success {

            background:
                #dcfce7;

            color:
                #166534;

            padding:
                15px;

            border-radius:
                8px;

            margin-bottom:
                20px;

        }


        /* =================================================
           RINGKASAN
           ================================================= */

        .hasil {

            margin-top:
                30px;

            background:
                #eff6ff;

            border:
                1px solid #bfdbfe;

            border-radius:
                10px;

            padding:
                25px;

        }


        .hasil h2 {

            margin-top:
                0;

            color:
                #1d4ed8;

        }


        .hasil p {

            margin:
                10px 0;

        }


        /* =================================================
           RINCIAN BIAYA
           ================================================= */

        .harga-box {

            background:
                white;

            border-radius:
                8px;

            padding:
                15px;

            margin-top:
                20px;

        }


        .harga-box p {

            display:
                flex;

            justify-content:
                space-between;

            align-items:
                center;

            gap:
                20px;

            border-bottom:
                1px solid #eee;

            padding-bottom:
                10px;

        }


        .harga-box p:last-child {

            border-bottom:
                none;

        }


        /* =================================================
           POTONGAN
           ================================================= */

        .potongan {

            color:
                #dc2626;

            font-weight:
                bold;

        }


        /* =================================================
           TOTAL BIAYA
           ================================================= */

        .total {

            margin-top:
                15px;

            padding:
                18px;

            background:
                #dcfce7;

            border-radius:
                8px;

            color:
                #166534;

            font-size:
                21px;

            font-weight:
                bold;

            text-align:
                center;

        }


        /* =================================================
           MINAT
           ================================================= */

        .minat-list {

            margin-top:
                10px;

            padding-left:
                20px;

        }


        /* =================================================
           INFO KURSUS
           ================================================= */

        .kursus-info {

            margin-top:
                8px;

            color:
                #666;

            font-size:
                13px;

        }


        /* =================================================
           FOOTER
           ================================================= */

        footer {

            text-align:
                center;

            margin-top:
                25px;

            color:
                #777;

            font-size:
                13px;

        }


        /* =================================================
           RESPONSIVE
           ================================================= */

        @media (max-width: 600px) {

            .container {

                width:
                    95%;

                margin:
                    20px auto;

            }


            .card {

                padding:
                    20px;

            }


            .radio-group,
            .checkbox-group {

                flex-direction:
                    column;

            }


            .radio-item,
            .checkbox-item {

                width:
                    100%;

            }


            .harga-box p {

                flex-direction:
                    column;

                align-items:
                    flex-start;

                gap:
                    5px;

            }

        }

    </style>

</head>


<body>


<div class="container">


    <div class="card">


        <!-- =================================================
             JUDUL
             ================================================= -->

        <h1>
            Kursusku
        </h1>


        <p class="subtitle">
            Formulir Pendaftaran Kursus
        </p>


        <!-- =================================================
             ERROR
             ================================================= -->

        <?php if (!empty($errors)): ?>

            <div class="error">

                <strong>
                    Terjadi kesalahan:
                </strong>


                <ul>

                    <?php foreach ($errors as $error): ?>

                        <li>
                            <?= htmlspecialchars($error); ?>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        <?php endif; ?>


        <!-- =================================================
             SUCCESS
             ================================================= -->

        <?php if ($pesan_sukses !== ""): ?>

            <div class="success">

                <?= htmlspecialchars($pesan_sukses); ?>

            </div>

        <?php endif; ?>


        <!-- =================================================
             FORM PENDAFTARAN
             ================================================= -->

        <form
            method="POST"
            action=""
        >


            <!-- NAMA -->

            <div class="form-group">

                <label for="nama_lengkap">
                    Nama Lengkap
                </label>


                <input
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    value="<?= htmlspecialchars($nama_lengkap); ?>"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email
                </label>


                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= htmlspecialchars($email); ?>"
                    placeholder="contoh@email.com"
                    required
                >

            </div>


            <!-- NOMOR HP -->

            <div class="form-group">

                <label for="no_hp">
                    Nomor HP
                </label>


                <input
                    type="tel"
                    id="no_hp"
                    name="no_hp"
                    value="<?= htmlspecialchars($no_hp); ?>"
                    placeholder="08xxxxxxxxxx"
                    required
                >

            </div>


            <!-- PROGRAM STUDI -->

            <div class="form-group">

                <label for="program_studi">
                    Program Studi
                </label>


                <input
                    type="text"
                    id="program_studi"
                    name="program_studi"
                    value="<?= htmlspecialchars($program_studi); ?>"
                    placeholder="Masukkan program studi"
                    required
                >

            </div>


            <!-- =================================================
                 KURSUS
                 ================================================= -->

            <div class="form-group">

                <label for="kursus">
                    Pilih Kursus
                </label>


                <select
                    name="kursus"
                    id="kursus"
                    required
                >

                    <option value="">
                        -- Pilih Kursus --
                    </option>


                    <?php foreach ($daftar_kursus as $item_kursus): ?>

                        <option
                            value="<?= htmlspecialchars($item_kursus); ?>"
                            <?= ($kursus === $item_kursus)
                                ? "selected"
                                : ""; ?>
                        >

                            <?= htmlspecialchars($item_kursus); ?>

                            -
                            Rp
                            <?= number_format(
                                $harga_kursus_list[$item_kursus],
                                0,
                                ",",
                                "."
                            ); ?>

                        </option>

                    <?php endforeach; ?>

                </select>


                <div class="kursus-info">

                    Harga setiap kursus ditampilkan pada pilihan
                    kursus.

                </div>

            </div>


            <!-- =================================================
                 JENIS PESERTA
                 ================================================= -->

            <div class="form-group">

                <label>
                    Jenis Peserta
                </label>


                <div class="radio-group">


                    <?php foreach (
                        $diskon_peserta
                        as $peserta => $diskon
                    ): ?>


                        <label class="radio-item">


                            <input
                                type="radio"
                                name="jenis_peserta"
                                value="<?= htmlspecialchars($peserta); ?>"
                                <?= ($jenis_peserta === $peserta)
                                    ? "checked"
                                    : ""; ?>
                                required
                            >


                            <span>

                                <?= htmlspecialchars($peserta); ?>

                                - Diskon
                                <?= $diskon; ?>%

                            </span>


                        </label>


                    <?php endforeach; ?>


                </div>

            </div>


            <!-- =================================================
                 MINAT TAMBAHAN
                 ================================================= -->

            <div class="form-group">

                <label>
                    Minat Tambahan
                </label>


                <div class="checkbox-group">


                    <?php foreach ($daftar_minat as $minat): ?>


                        <label class="checkbox-item">


                            <input
                                type="checkbox"
                                name="minat_tambahan[]"
                                value="<?= htmlspecialchars($minat); ?>"
                                <?= in_array(
                                    $minat,
                                    $minat_tambahan,
                                    true
                                )
                                    ? "checked"
                                    : ""; ?>
                            >


                            <span>
                                <?= htmlspecialchars($minat); ?>
                            </span>


                        </label>


                    <?php endforeach; ?>


                </div>

            </div>


            <!-- =================================================
                 CATATAN
                 ================================================= -->

            <div class="form-group">

                <label for="catatan">
                    Catatan
                </label>


                <textarea
                    id="catatan"
                    name="catatan"
                    placeholder="Tuliskan catatan jika ada..."
                ><?= htmlspecialchars($catatan); ?></textarea>

            </div>


            <!-- =================================================
                 TOMBOL
                 ================================================= -->

            <button
                type="submit"
                class="btn"
            >

                Daftar Sekarang

            </button>


        </form>


        <!-- =================================================
             RINGKASAN PENDAFTARAN
             ================================================= -->

        <?php if (
            $_SERVER["REQUEST_METHOD"] === "POST"
            && empty($errors)
        ): ?>


            <div class="hasil">


                <h2>
                    Ringkasan Pendaftaran
                </h2>


                <!-- =================================================
                     DATA PESERTA
                     ================================================= -->

                <div class="harga-box">


                    <p>

                        <strong>
                            Nama Lengkap
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $nama_lengkap
                            ); ?>
                        </span>

                    </p>


                    <p>

                        <strong>
                            Email
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $email
                            ); ?>
                        </span>

                    </p>


                    <p>

                        <strong>
                            No. HP
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $no_hp
                            ); ?>
                        </span>

                    </p>


                    <p>

                        <strong>
                            Program Studi
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $program_studi
                            ); ?>
                        </span>

                    </p>


                    <p>

                        <strong>
                            Kursus
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $kursus
                            ); ?>
                        </span>

                    </p>


                    <p>

                        <strong>
                            Jenis Peserta
                        </strong>

                        <span>
                            <?= htmlspecialchars(
                                $jenis_peserta
                            ); ?>
                        </span>

                    </p>


                </div>


                <!-- =================================================
                     RINCIAN BIAYA
                     ================================================= -->

                <h2 style="margin-top: 25px;">

                    Rincian Biaya

                </h2>


                <div class="harga-box">


                    <!-- HARGA -->

                    <p>

                        <strong>
                            Harga Kursus
                        </strong>

                        <span>

                            Rp
                            <?= number_format(
                                $harga_kursus,
                                0,
                                ",",
                                "."
                            ); ?>

                        </span>

                    </p>


                    <!-- PERSENTASE DISKON -->

                    <p>

                        <strong>
                            Diskon Peserta
                        </strong>

                        <span>

                            <?= $persentase_diskon; ?>%

                        </span>

                    </p>


                    <!-- JUMLAH POTONGAN -->

                    <p>

                        <strong>
                            Potongan Diskon
                        </strong>

                        <span class="potongan">

                            - Rp
                            <?= number_format(
                                $jumlah_diskon,
                                0,
                                ",",
                                "."
                            ); ?>

                        </span>

                    </p>


                    <!-- TOTAL -->

                    <div class="total">

                        TOTAL BIAYA

                        <br>

                        Rp
                        <?= number_format(
                            $total_bayar,
                            0,
                            ",",
                            "."
                        ); ?>

                    </div>


                </div>


                <!-- =================================================
                     MINAT TAMBAHAN
                     ================================================= -->

                <h2 style="margin-top: 25px;">

                    Minat Tambahan

                </h2>


                <?php if (!empty($minat_tambahan)): ?>


                    <ul class="minat-list">


                        <?php foreach (
                            $minat_tambahan
                            as $minat
                        ): ?>


                            <li>

                                <?= htmlspecialchars(
                                    $minat
                                ); ?>

                            </li>


                        <?php endforeach; ?>


                    </ul>


                <?php else: ?>


                    <p>
                        Tidak ada minat tambahan.
                    </p>


                <?php endif; ?>


                <!-- =================================================
                     CATATAN
                     ================================================= -->

                <h2 style="margin-top: 25px;">

                    Catatan

                </h2>


                <p>


                    <?php if ($catatan !== ""): ?>


                        <?= nl2br(
                            htmlspecialchars($catatan)
                        ); ?>


                    <?php else: ?>


                        Tidak ada catatan.


                    <?php endif; ?>


                </p>


            </div>


        <?php endif; ?>


    </div>


    <!-- =================================================
         FOOTER
         ================================================= -->

    <footer>

        &copy;
        <?= date("Y"); ?>

        Kursusku -
        Sistem Pendaftaran Kursus

    </footer>


</div>


<!-- =====================================================
     JAVASCRIPT
     ===================================================== -->

<script>

    // Data harga kursus
    const daftarHarga = {

        "Pemrograman Web": 750000,

        "Desain Grafis": 650000,

        "Microsoft Office": 500000,

        "Digital Marketing": 700000,

        "Data Science": 900000,

        "Cyber Security": 1000000,

        "Fotografi": 600000

    };


    // Ambil elemen select kursus
    const selectKursus =
        document.getElementById("kursus");


    // Ketika kursus dipilih
    if (selectKursus) {

        selectKursus.addEventListener(
            "change",
            function () {

                const kursusDipilih =
                    this.value;


                if (daftarHarga[kursusDipilih]) {

                    console.log(
                        "Kursus:",
                        kursusDipilih
                    );

                    console.log(
                        "Harga:",
                        daftarHarga[kursusDipilih]
                    );

                }

            }
        );

    }

</script>


</body>

</html>