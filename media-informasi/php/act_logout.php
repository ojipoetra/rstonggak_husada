<?php
    session_start();
    session_unset();
    session_destroy();

    echo "<script>alert('Berhasil keluar!');window.location.href='../login';</script>";

?>