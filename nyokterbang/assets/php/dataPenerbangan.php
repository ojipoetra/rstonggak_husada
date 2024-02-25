<?php

include "arrayPenerbangan.php";

// Ambil data dari Post 
$maskapai = $_POST['maskapai'];
$bandaraAsal = $_POST['bandaraAsal'];
$bandaraTujuan = $_POST['bandaraTujuan'];
$hargaTiket = $_POST['hargaTiket'];


// Logika Harga Pajak Bandara Asal
if ($bandaraAsal == $dataPenerbangan['BA']['1']['bandaraAsal']) {
    $hargaPajakAsal = 50000;
} elseif ($bandaraAsal == $dataPenerbangan['BA']['2']['bandaraAsal']) {
    $hargaPajakAsal = 30000;
} elseif ($bandaraAsal == $dataPenerbangan['BA']['3']['bandaraAsal']) {
    $hargaPajakAsal = 40000;
} elseif ($bandaraAsal == $dataPenerbangan['BA']['4']['bandaraAsal']) {
    $hargaPajakAsal = 40000;
} else {
    echo "Data belum diselect!";
}


// Logika Harga Pajak Bandara Tujuan
if ($bandaraTujuan == $dataPenerbangan['BT']['1']['bandaraTujuan']) {
    $hargaPajakTujuan = 80000;
} elseif ($bandaraTujuan == $dataPenerbangan['BT']['2']['bandaraTujuan']) {
    $hargaPajakTujuan = 70000;
} elseif ($bandaraTujuan == $dataPenerbangan['BT']['3']['bandaraTujuan']) {
    $hargaPajakTujuan = 90000;
} elseif ($bandaraTujuan == $dataPenerbangan['BT']['4']['bandaraTujuan']) {
    $hargaPajakTujuan = 70000;
} else {
    echo "Data belum diselect!";
}


// Running Sample
echo "Maskapai : " . $maskapai . "<br>";
echo "Bandar Asal :" . $bandaraAsal . "<br>";
echo "Harga Pajak :" . $hargaPajakAsal . "<br>";
echo "========================== <br>";
echo "Bandar Tujuan :" . $bandaraTujuan . "<br>";
echo "Harga Pajak :" . $hargaPajakTujuan . "<br>";


// Fungsi Rumus Total Pajak Asal dan Tujuan
function totalPajak($bandaraAsal, $bandaraTujuan)
{
    return  $totalPajak = $bandaraAsal + $bandaraTujuan;
}

$hargaPajak = totalPajak($hargaPajakAsal, $hargaPajakTujuan);

// Running Sample
echo "================== <br>";
echo "Total Pajak adalah : " . totalPajak($hargaPajakAsal, $hargaPajakTujuan) . "<br>";

echo "================== <br>";
echo "Harga Tiket : " . $hargaTiket . "<br>";


// Fungsi Rumus Total Keselurahan tiket dan pajak
function totalHargaTiket($hargaPajak, $hargaTiket)
{
    return $totalHargaTiket = $hargaPajak + $hargaTiket;
}


// Running Sample
echo "================== <br>";
echo "Total Keselurahan : " . totalHargaTiket($hargaPajak, $hargaTiket);
$totalHarga = totalHargaTiket($hargaPajak, $hargaTiket);


// Memasukan data ke JSON data.json
$file = "../json/data.json";
$bandara = file_get_contents($file);

$data = json_decode($bandara, true);

// Data array baru dari form post
$data[] = array(
    "maskapai" => $maskapai,
    "bandaraAsal" => $bandaraAsal,
    "bandaraTujuan" => $bandaraTujuan,
    "hargaTiket" => $hargaTiket,
    "pajak" => $hargaPajak,
    "totalHarga" => $totalHarga
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam data.json
$bandara = file_put_contents($file, $jsonfile);

header("Location:../pages/cek-jadwal-penerbangan?pesan=berhasil-disimpan");