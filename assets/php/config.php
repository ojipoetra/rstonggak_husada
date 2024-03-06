<?php 
$conn = mysqli_connect("localhost","u826981306_rstgh","@Tgh010114","u826981306_db_rstonggak");
// $conn = mysqli_connect("localhost","root","","u1579055_db_rstonggakhusada");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>