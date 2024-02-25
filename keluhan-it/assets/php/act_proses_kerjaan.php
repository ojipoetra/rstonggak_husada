<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$devisi = $_POST['devisi'];
$isi = $_POST['isi'];
$waktu = $_POST['waktu'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($conn,"UPDATE tb_konsultasi set nama_lengkap='$nama_lengkap', tanggal='$tanggal', devisi='$devisi', isi='$isi', waktu='$waktu', status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../dash_kelola_admin?pesan=berhasil-konfirmasi");
 
?>