<?php
    include 'config.php';


    $judul_karir = $_POST['judul_karir'];
    $kualifikasi_karir = $_POST['kualifikasi_karir'];
    $tanggal_karir = $_POST['tanggal_karir'];

    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location: ../../karir/dashboard-karir?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../img/karir/' . $rand . '_' . $filename);
            mysqli_query($conn, "INSERT INTO tb_karir VALUES(NULL,'$judul_karir','$kualifikasi_karir','$tanggal_karir','$xx')");
            header("location: ../../karir/dashboard-karir?alert=berhasil");
        } else {
            header("location: ../../karir/dashboard-karir?alert=gagak_ukuran");
        }
    }
