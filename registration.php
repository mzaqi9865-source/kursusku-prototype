```php
<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $program_studi = $_POST["program_studi"];
    $kursus = $_POST["kursus"];
    $jenis_peserta = $_POST["jenis_peserta"];
    $minat_tambahan = $_POST["minat_tambahan"];
    $catatan = $_POST["catatan"];

    if (
        empty($nama_lengkap) ||
        empty($email) ||
        empty($no_hp) ||
        empty($program_studi) ||
        empty($kursus) ||
        empty($jenis_peserta)
    ) {
        $pesan = "Mohon lengkapi semua data yang wajib diisi.";
    } else {
        $pesan = "Registrasi berhasil dikirim!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration - Kursusku</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 600px;
            max-width: 90%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .deskripsi {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .wajib {
            color: red;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .pesan {
            padding: 12px;
            margin-bottom: 20px;
            background: #e8f7e8;
            color: #267326;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Form Registration Kursusku</h2>

    <p class="deskripsi">
        Silakan lengkapi data berikut untuk melakukan registrasi kursus.
    </p>

    <?php if ($pesan != ""): ?>
        <div class="pesan">
            <?= htmlspecialchars($pesan); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">

        <!-- Nama Lengkap -->
        <label>
            Nama Lengkap <span class="wajib">*</span>
        </label>

        <input
            type="text"
            name="nama_lengkap"
            placeholder="Masukkan nama lengkap"
            required
        >

        <!-- Email -->
        <label>
            Email <span class="wajib">*</span>
        </label>

        <input
            type="email"
            name="email"
            placeholder="Masukkan alamat email"
            required
        >

        <!-- Nomor HP -->
        <label>
            No HP / WhatsApp <span class="wajib">*</span>
        </label>

        <input
            type="tel"
            name="no_hp"
            placeholder="Contoh: 081234567890"
            required
        >

        <!-- Program Studi -->
        <label>
            Program Studi <span class="wajib">*</span>
        </label>

        <input
            type="text"
            name="program_studi"
            placeholder="Masukkan program studi"
            required
        >

        <!-- Kursus -->
        <label>
            Kursus yang Dipilih <span class="wajib">*</span>
        </label>

        <select name="kursus" required>
            <option value="">-- Pilih Kursus --</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Microsoft Office">Microsoft Office</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Data Science">Data Science</option>
        </select>

        <!-- Jenis Peserta -->
        <label>
            Jenis Peserta <span class="wajib">*</span>
        </label>

        <select name="jenis_peserta" required>
            <option value="">-- Pilih Jenis Peserta --</option>
            <option value="Pelajar">Pelajar</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Umum">Umum</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Guru">Guru</option>
        </select>

        <!-- Minat Tambahan -->
        <label>
            Minat Tambahan
        </label>

        <input
            type="text"
            name="minat_tambahan"
            placeholder="Contoh: UI/UX, editing video, AI"
        >

        <!-- Catatan -->
        <label>
            Catatan
        </label>

        <textarea
            name="catatan"
            placeholder="Tuliskan catatan atau kebutuhan khusus..."
        ></textarea>

        <!-- Tombol -->
        <button type="submit">
            Daftar Sekarang
        </button>

    </form>

</div>

</body>
</html>
```
