<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tb_karir where id_karir='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../../karir/dashboard-karir.php?alert=berhasil-dihapus");
