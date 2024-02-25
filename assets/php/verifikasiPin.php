<?php

// echo $_POST['pin'];

if ($_POST['pin'] == "tgh010114") {
    echo "
        <script>alert('Berhasil terverifikasi!'); window.location.href='../../update-kamar?pesan=welcome';</script>
    ";
} else {
    echo "
    <script>alert('Gagal terverifikasi! coba lagi!'); window.location.href='../../index';</script>
    ";
}
