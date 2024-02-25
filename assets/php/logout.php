<?php 
 
session_start();
session_destroy();
 
header("Location: ../../karir/login.php?alert=berhasil-keluar");
