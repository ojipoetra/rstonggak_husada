<?php 
 
$server = "localhost";
$user = "u1579055_cs-nyokterbang";
$pass = "sayabisa01";
$database = "u1579055_nyokterbang";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>