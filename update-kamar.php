<?php
// Array Status Ruang Ranap atau option update ruang
$status = array("Terisi", "Kosong");
session_start();
if (!isset($_SERVER['HTTP_REFERER'])) {
    // jika tidak ada referrer, block access
    echo "<script>alert('Tidak bisa akses sebelum verifikasi! PIN'); window.location.href='index'</script>";
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kamar Ranap | rstonggakhusada.go.id</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .nav-btn {
            margin: 20px 20px;
            height: 50px;
            width: 50px;
            border-radius: 50px;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .nav-btn::before,
        .nav-btn::after {
            font-size: 25px;
            color: #fff;

        }

        /* Swipper */
        .swiper-pagination-bullet-active {
            border: none;
            background-color: #72bb36;
        }
    </style>

    <!--Adsense Iklan-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8846372281633802" crossorigin="anonymous"></script>

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
            <img src="assets/img/logo.png" alt="tonggakhusada" class="logo-size px-3">
            <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list line-green fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link px-3" aria-current="page" href="/">Beranda</a>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#latarbelakang">Latar Belakang</a></li>
                            <li><a class="dropdown-item" href="#sambutan">Sambutan</a></li>
                            <li><a class="dropdown-item" href="#asuransi">Rekanan Asuransi</a></li>
                            <li><a class="dropdown-item" href="#lokasi">Lokasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="layanan/poliklinik-anak">Poliklinik Anak</a></li>
                            <li><a class="dropdown-item" href="layanan/poliklinik-penyakit-dalam">Poliklinik Penyakit Dalam</a></li>
                            <li><a class="dropdown-item" href="layanan/poliklinik-bedah-umum">Poliklinik Bedah Umum</a></li>
                            <li><a class="dropdown-item" href="layanan/poliklinik-kebidanan-dan-kandungan">Poliklinik Kebidanan dan Kandungan</a></li>
                            <li><a class="dropdown-item" href="layanan/poliklinik-umum">Poliklinik Umum</a></li>
                            <li><a class="dropdown-item" href="layanan/poliklinik-gigi">Poliklinik Gigi</a></li>
                            <li><a class="dropdown-item" href="layanan/jadwal-dokter">Jadwal Dokter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas Penunjang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ruangan/ugd">UGD</a></li>
                            <li><a class="dropdown-item" href="ruangan/farmasi">Instalasi Farmasi</a></li>
                            <li><a class="dropdown-item" href="ruangan/laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="ruangan/radiologi">Radiologi</a></li>
                            <li><a class="dropdown-item" href="ruangan/operasi">Ruang Operasi</a></li>
                            <li><a class="dropdown-item" href="ruangan/bersalin">Ruang Bersalin</a></li>
                            <li><a class="dropdown-item" href="ruangan/ranap">Ruang Rawat Inap</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="ruangan/ambulan">Ambulan</a></li>
                            <li><a class="dropdown-item" href="ruangan/kantin">Kantin</a></li>
                            <li><a class="dropdown-item" href="ruangan/mushola">Musholah</a></li>
                            <li><a class="dropdown-item" href="ruangan/parkiran-dan-halaman-depan">Halaman Parkir dan Taman</a></li>
                        </ul>
                    </li>
                    <?php
                    include "assets/php/config.php";
                    $data = mysqli_query($conn, "SELECT * from tb_karir");
                    // menghitung data barang
                    $totKarir = mysqli_num_rows($data);
                    ?>
                    <a class="nav-link px-3" aria-current="page" href="karir">Karir <span class="badge bg-danger"><?php echo $totKarir; ?></span></a>
                    <a class="nav-link px-3" aria-current="page" href="media-informasi/">Media Informasi</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container py-5 px-5">
        <div class="row justify-content-center">

            <?php
            if ($_GET['pesan']) {
                if ($_GET['pesan'] == "berhasil-direfresh") {
                    echo "
                            <div class='alert alert-primary' role='alert'>
                            <b>Berhasil direfresh Data harian !</b><br>
                            </div>
                            <div class='alert alert-warning' role='alert'>
                            2. Selanjutnya masukan data kamar yang baru!
                            </div>
                            ";
                } elseif ($_GET['pesan'] == "welcome") {
                    echo "
                            <div class='alert alert-warning' role='alert'>
                            Data Kamar<b> Kosong</b> anda belum Input data kamar!<br>
                            Jika sudah diupdate nanti akan ada tombol <b>Refresh data 1 x
                            </div>
                            ";
                } elseif ($_GET['pesan'] == "berhasil-diupdate") {
                    echo "
                            <div class='alert alert-primary' role='alert'>
                            <b>Berhasil Disimpan Data harian !</b><br>
                            </div>
                            <div class='alert alert-warning' role='alert'>
                            1 .Silahkan Untuk update data <b>Klik 1 x</b> Refresh Data Harian terlebih dahulu!<br>
                            2. Selanjutnya masukan data kamar yang baru!
                            </div>
                            ";
                }
            }
            ?>

            <?php
            include 'assets/php/config.php';
            $data = mysqli_query($conn, "SELECT * from db_update_kamar");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <a href="assets/php/act_hapus_update_kamar?id=<?= $d['id']; ?>" class="btn btn-danger bi bi-arrow-clockwise"> 1 x REFRESH DATA HARIAN</a><br><br>
            <?php } ?>



            <div class="col-lg-12 my-3 rounded-5 bg-white px-4 py-4 shadow">
                <div class="text-center">
                    <h3 class="py-2">Form Update Kamar (Ranap)</h3>
                </div>
                <div class="table-responsive">
                    <form action="assets/php/act_update-kamar.php" method="post">
                        <table class="table table-hover">

                            <!-- KElas delux     -->
                            <tr>
                                <th colspan="5" class="text-center">DELUX</th>
                            </tr>
                            <!-- iSI -->
                            <tr>
                                <td>R. Selamat <select name="Rselamat" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                
                                </td>
                                <td colspan="4">R. Sehat <select name="Rsehat" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select></td>
                            </tr>
                            <!-- end KElas delux -->

                            <!-- KElas VIP     -->
                            <tr>
                                <th colspan="5" class="text-center">VIP</th>
                            </tr>
                            <!-- iSI -->
                            <tr>
                                <td>R. Sejahtera <select name="Rsejahtera" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select></td>
                                <td>R. Bahagia <select name="Rbahagia" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select></td>
                                <td colspan="3">R. Bersama <select name="Rbersama" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select></td>

                            </tr>
                            <!-- end KElas VIP -->

                            <!-- KElas BANGSAL     -->
                            <tr>
                                <th colspan="5" class="text-center">BANGSAL</th>
                            </tr>
                            <!-- iSI -->
                            <tr>
                                <td>R. Adenium <select name="Radenium" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                    <input type="number" class="form-control" name="qtyRadenium" maxlength="1" placeholder="Masukan Sisa 1-6">
                                </td>
                                <td>R. Camelia <select name="Rcamelia" id="" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                    <input type="number" class="form-control" name="qtyRcamelia" maxlength="1" placeholder="Masukan Sisa 1-6">
                                </td>
                                <td>R. Bugenvil <select name="Rbugenvil" id="" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                    <input type="number" class="form-control" name="qtyRbugenvil" maxlength="1" placeholder="Masukan Sisa 1-6">
                                </td>
                                <td>R. Edelweis <select name="Redelweis" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                    <input type="number" class="form-control" name="qtyRedelweis" maxlength="1" placeholder="Masukan Sisa 1-6">
                                </td>
                                <td>R. Dandalion <select name="Rdandalion" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <?php
                                        foreach ($status as $data) {
                                            echo "
                                                <option> $data </option>
                                            ";
                                        }

                                        ?>
                                    </select>
                                    <input type="number" class="form-control" name="qtyRdandalion" maxlength="1" placeholder="Masukan Sisa 1-6">
                                </td>

                            </tr>
                            <!-- end KElas BANGSAL -->

                        </table>
                        <div class="mb-3 py-3">
                            <input type="submit" name="simpan" id="" value="UPDATE !" class="btn-green">
                        </div>
                    </form>
                    <a href="index?pesan=berhasil-keluar" class="btn btn-success">Keluar</a>
                </div>
            </div>
        </div>
    </div>





    <!-- FOOTER -->
    <div class="container-fluid py-5 bg-green text-white">
        <div class="py-5 px-2">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <h4 class="py-1">RS TONGGAK HUSADA</h4>
                    <p>Jl. Raya Bojonegara No.8, Kertasana, Kec. Bojonegara, Kota Cilegon, Banten</p>
                    <hr>
                    <p>Copyright &copy; 2023 rstonggakhusada</p>
                </div>
                <div class="col-lg-4 align-self-center">
                    <h4 class="py-3"> Hubungi kami</h4>
                    <hr>
                    <div class="col">
                        <i class="bi bi-telephone-fill text-white text-start"> (0254) 8494205</i><br>
                        <i class="bi bi-whatsapp text-white text-start"> +62812-2289-0288</i><br>
                        <i class="bi bi-envelope-fill text-white text-start"> tonggak_husada@yahoo.com</i><br>
                        <hr>
                        <a href="https://www.instagram.com/rs_tonggakhusada/" class="bi bi-instagram text-white text-start" target="_blank"></a>
                        <a href="https://www.facebook.com/tito.boleno" class="bi bi-facebook text-white text-start mx-1" target="_blank"></a>
                        <a href="https://www.youtube.com/@rstonggakhusada4193" class="bi bi-youtube text-white text-start" target="_blank"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Jam Buka</h4>
                    <hr>
                    <p>Senin - Minggu 24 Jam
                    <p><b>IGD</b> 24 Jam</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/+6285100579666" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>



    <div class="popbox hide" id="popbox">
        <div aria-label='Close' class="pop-overlay" onclick='document.getElementById("popbox").style.display="none";removeClassonBody();' role="button" tabindex="0" />
        <div class="pop-content">
            <a rel="noopener noreferrer" title="box">
                <div class="popcontent">

                    <!--<a href="https://wa.me/+6285100579666"><img src="assets/img/content/024.jpg" alt="banner" width="850" height="450" /></a>-->
                    <a href="mudik_sehat_2023/"><img src="assets/img/content/mudiksehat2023.jpg" alt="banner" width="850" height="450" /></a>
                </div>
            </a>
            <button aria-label='Close' class='popbox-close-button' onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>&times;</button>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>