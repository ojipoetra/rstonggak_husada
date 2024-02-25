<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn ,"DELETE FROM db_update_kamar WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../update-kamar?pesan=berhasil-direfresh");
 
?>