<?php

// CRUD
include 'config.php';


$Rselamat = $_POST['Rselamat'];
$Rsehat = $_POST['Rsehat'];
$Rsejahtera = $_POST['Rsejahtera'];
$Rbahagia = $_POST['Rbahagia'];
$Rbersama = $_POST['Rbersama'];
$Radenium = $_POST['Radenium'];
$Rcamelia = $_POST['Rcamelia'];
$Rbugenvil = $_POST['Rbugenvil'];
$Redelweis = $_POST['Redelweis'];
$Rdandalion = $_POST['Rdandalion'];
$qtyRadenium = $_POST['qtyRadenium'];
$qtyRcamelia = $_POST['qtyRcamelia'];
$qtyRbugenvil = $_POST['qtyRbugenvil'];
$qtyRedelweis = $_POST['qtyRedelweis'];
$qtyRdandalion = $_POST['qtyRdandalion'];


mysqli_query($conn, "INSERT INTO db_update_kamar VALUES('','$Rselamat','$Rsehat','$Rsejahtera','$Rbahagia','$Rbersama','$Radenium','$Rcamelia','$Rbugenvil','$Redelweis','$Rdandalion','$qtyRadenium','$qtyRcamelia','$qtyRbugenvil','$qtyRedelweis','$qtyRdandalion')");

header("Location:../../update-kamar?pesan=berhasil-diupdate");
