<?php
    session_start();

    if($_POST['pin'] == "Tgh010114"){
        $_SESSION['admin'] = "Admin TGH";
        echo "<script>alert('PIN Benar silahkan kelola konten!');window.location.href='../dashboard-media';</script>";
    }else {
        echo "<script>alert('PIN Salah silahkan veriksa PIN anda!');window.location.href='../login';</script>";
    }

?>