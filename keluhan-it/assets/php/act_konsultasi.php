<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$nama_lengkap = $_POST['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$devisi = $_POST['devisi'];
$isi = $_POST['isi'];
$waktu = $_POST['waktu'];
$status = "Segera di Perbaiki";
 
// menginput data ke database
mysqli_query($conn,"insert into tb_konsultasi values('','$nama_lengkap','$tanggal','$devisi','$isi','$waktu','$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../index?pesan=berhasil");
