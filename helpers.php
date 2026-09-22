<?php

function hitungDiskon($harga, $persenDiskon)
{
    $diskon = $harga * ($persenDiskon / 100);
    return $harga - $diskon;
}

function hitungBiayaKursus($harga, $jumlahKursus)
{
    return $harga * $jumlahKursus;
}

function formatRupiah($nominal)
{
    return "Rp " . number_format($nominal, 0, ',', '.');
}

function statusKursus($peserta, $kapasitas)
{
    if ($peserta >= $kapasitas) {
        return "Penuh";
    }

    return "Tersedia";
}

function hitungPersentase($nilai, $total)
{
    if ($total == 0) {
        return 0;
    }

    return ($nilai / $total) * 100;
}

function sapaPengguna($nama)
{
    return "Halo, " . $nama . "!";
}