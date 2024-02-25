<?php

include '../assets/php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard-karir");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard-karir?alert=berhasil-login");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Karir | rstonggakhusada.go.id</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

    <!-- Section nav -->
    <section id="contact-nav">
        <div class="container bg-green py-2 rounded-bottom shadow-sm">
        </div>
    </section>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg margin-center py-3 sticky-top shadow">
        <div class="container-fluid">
            <img src="../assets/img/logo.png" alt="tonggakhusada" class="logo-size px-3">
            <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list line-green fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link px-3" aria-current="page" href="../">Beranda</a>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../?=#latarbelakang">Latar Belakang</a></li>
                            <li><a class="dropdown-item" href="../?=#sambutan">Sambutan</a></li>
                            <li><a class="dropdown-item" href="../?=#asuransi">Rekanan Asuransi</a></li>
                            <li><a class="dropdown-item" href="../?=#lokasi">Lokasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../layanan/poliklinik-anak">Poliklinik Anak</a></li>
                            <li><a class="dropdown-item" href="../layanan/poliklinik-penyakit-dalam">Poliklinik Penyakit Dalam</a></li>
                            <li><a class="dropdown-item" href="../layanan/poliklinik-bedah-umum">Poliklinik Bedah Umum</a></li>
                            <li><a class="dropdown-item" href="../layanan/poliklinik-kebidanan-dan-kandungan">Poliklinik Kebidanan dan Kandungan</a></li>
                            <li><a class="dropdown-item" href="../layanan/poliklinik-umum">Poliklinik Umum</a></li>
                            <li><a class="dropdown-item" href="../layanan/poliklinik-gigi">Poliklinik Gigi</a></li>
                            <li><a class="dropdown-item" href="../layanan/jadwal-dokter">Jadwal Dokter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas Penunjang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../ruangan/ugd">UGD</a></li>
                            <li><a class="dropdown-item" href="../ruangan/farmasi">Instalasi Farmasi</a></li>
                            <li><a class="dropdown-item" href="../ruangan/laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="../ruangan/radiologi">Radiologi</a></li>
                            <li><a class="dropdown-item" href="../ruangan/operasi">Ruang Operasi</a></li>
                            <li><a class="dropdown-item" href="../ruangan/bersalin">Ruang Bersalin</a></li>
                            <li><a class="dropdown-item" href="../ruangan/ranap">Ruang Rawat Inap</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../ruangan/ambulan">Ambulan</a></li>
                            <li><a class="dropdown-item" href="../ruangan/kantin">Kantin</a></li>
                            <li><a class="dropdown-item" href="../ruangan/mushola">Musholah</a></li>
                            <li><a class="dropdown-item" href="../ruangan/parkiran-dan-halaman-depan">Halaman Parkir dan Taman</a></li>
                        </ul>
                    </li>
                    <?php
                        include "../assets/php/config.php";
                        $data = mysqli_query($conn, "SELECT * from tb_karir");
                        // menghitung data barang
                        $totKarir = mysqli_num_rows($data);
                    ?>
                    <a class="nav-link px-3" aria-current="page" href="index">Karir <span class="badge bg-danger"><?php echo $totKarir; ?></span></a>
                    <a class="nav-link px-3 active-green" aria-current="page" href="login">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-2">
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'berhasil-keluar') {
        ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> Berhasil keluar
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal-login") {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal login!</strong>coba lagi
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
        }
        ?>
    </div>


    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center py-5 px-5">
            <div class="col-lg-6 my-2 shadow px-3 py-3 rounded">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
                    <p>( Untuk tambahkan karir )</p>
                    <div class="input-group mb-3">
                        <input class="form-control" type="email" placeholder="Masukan Email.." name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="password" placeholder="Masukan Password.." name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <button name="submit" class="btn-green">Login</button>
                    </div>
                    <!-- <p class="login-register-text">Anda belum punya akun? <a href="register">Register</a></p> -->
                    <p class="text-start">Belum punya akun hubungi admin terkait. <a href="https://wa.me/+6285779178942?text=Saya%20mau%20buat%20akun%20login%20di%20web%20rstonggakhusada.co.id">Hubungi</a></p>
                </form>
            </div>
            <div class="col-lg-6 my-2">
                <h5>Menu Karir</h5>
                <h3>RS Tonggak Husada</h3>
                <img src="../assets/img/doctor/dr.alll.png" alt="" class="w-75">
            </div>
        </div>
    </div>


    <a href="https://wa.me/+6285100579666" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>


    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>