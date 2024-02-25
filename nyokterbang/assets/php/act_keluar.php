<?php 
 
session_start();
session_destroy();
 
header("Location: ../../masuk?pesan=berhasil-keluar");
