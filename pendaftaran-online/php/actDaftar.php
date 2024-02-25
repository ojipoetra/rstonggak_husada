<?php

include("../../assets/php/config.php");

// TANGKAP METHOD

$nik = $_POST['nik'];
$namaLengkap = $_POST['namaLengkap'];
$noTlp = $_POST['noTlp'];
$tmpLahir = $_POST['tmpLahir'];
$tglLahir = $_POST['tglLahir'];
$jk = $_POST['jk'];
$golDar = $_POST['golDar'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelDes = $_POST['kelDes'];
$kec = $_POST['kec'];
$agama = $_POST['agama'];
$statusKawin = $_POST['statusKawin'];
$statusWarga = $_POST['statusWarga'];
$konsultasi = $_POST['konsultasi'];

// mysqli_query($conn, "INSERT INTO datapendaftaran VALUES('','$nik','$namaLengkap','$noTlp','$tmpLahir','$tglLahir','$jk','$golDar','$alamat','$rt','$rw','$kelDes','$kec','$agama','$statusKawin','$statusWarga','$konsultasi')");

// mysqli_query($conn,"INSERT into datapendaftaran VALUES('','$nik','$namaLengkap','$noTlp','$tmpLahir','$tglLahir','$jk','$golDar','$alamat','$rt','$rw','$kelDes','$kec','$agama','$statusKawin','$statusWarga','$konsultasi')");

$data = mysqli_query($conn, "SELECT * FROM datapendaftaran WHERE nik='$nik'");
$d = mysqli_fetch_array($data);

echo "<BR>". $d['namaLengkap'] . "<br>";
echo $d['nik'];

echo "<script>alert('Pendaftaran berhasil disimpan!');window.location.href='../index?nik=$d[nik]';</script>";

