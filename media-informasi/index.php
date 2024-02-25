<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media informasi | rstonggakhusada.co.id</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/media-informasi.css">
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


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .slider,
        .nav-btn {
            height: 50px;
            width: 50px;
            border-radius: 50px;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .nav-btn::before,
        .nav-btn::after {
            font-size: 25px;
            color: #fff;

        }

        .swiper-button-next {
            right: 50px;
        }

        .swiper-button-prev {
            left: 50px;
        }

        .swiper-pagination-bullet {
            opacity: 1;
            height: 12px;
            width: 12px;
            background-color: #fff;
        }

        .swiper-pagination-bullet-active {
            border: none;
            background-color: #72bb36;
        }

        #more {
            display: none;
        }
    </style>

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
                    <a class="nav-link px-3" aria-current="page" href="/">Beranda</a>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../#latarbelakang">Latar Belakang</a></li>
                            <li><a class="dropdown-item" href="../#sambutan">Sambutan</a></li>
                            <li><a class="dropdown-item" href="../#asuransi">Rekanan Asuransi</a></li>
                            <li><a class="dropdown-item" href="../#lokasi">Lokasi</a></li>
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
                    <a class="nav-link px-3" aria-current="page" href="../karir">Karir <span class="badge bg-danger"><?php echo $totKarir; ?></span></a>
                    <a class="nav-link px-3 active-green" aria-current="page" href="karir">Media Informasi</a>
                    <a class="nav-link px-3" aria-current="page" href="login"> Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar hero -->
    <div class="container py-3">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <img src="../assets/img/media-informasi/banner-hero001.jpg" alt="" class="img-fluid rounded shadow-lg swiper-slide">
                <img src="../assets/img/media-informasi/banner-hero002.jpg" alt="" class="img-fluid rounded shadow-lg swiper-slide">
                <img src="../assets/img/media-informasi/banner-hero001.jpg" alt="" class="img-fluid rounded shadow-lg swiper-slide">
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="container">
        <div class="py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../" class="beranda-link">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog - Media Informasi</li>
                </ol>
            </nav>

            <!-- Navigasi menu media -->
            <div class="row">
                <div class="col-lg-6 col-12 py-3">
                    <a href="" class="btn-active-green">Blog</a>
                    <a href="" class="btn-blog">Karir</a>
                    <a href="" class="btn-blog">Youtube</a>
                    <!-- <a href="" class="btn-blog">Youtube</a> -->
                </div>
                <div class="col-lg-6 my-2 col-12">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="btn-seacrh" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include '../assets/php/config.php';
        $get_data = mysqli_query($conn, "SELECT * FROM tb_blog ORDER BY id DESC");
        $row = mysqli_fetch_array($get_data);
        ?>


        <div class="container">
            <div class="row py-5">
                <h3>Blog Media</h3>
                <p><i>Post Terbaru</i></p>
                <div class="col-lg-6 py-5">
                    <div class="zoom-effect2">
                        <div class="kotak2">
                            <img src="gambar/<?= $row['gambar_blog']; ?>" class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-5">
                    <div class="py-2">
                        <h4><?= $row['judul_blog']; ?></h4>
                        <p><i class="bi bi-calendar-event"> <?= $row['tanggal_blog']; ?></i></p>
                        <hr>
                        <p><?= $row['isi_blog']; ?></p>
                        <a href="detail_blog.php?id=<?= $row['id'] ?>"><button class="btn-jadwal-dokter">Lanjut baca ></button></a>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lainya</li>
            </ol>
        </nav>

        <!-- Postingan blog -->
        <div class="container">
            <div class="row py-5">
                <h3>Berbagai informasi seputar kesehatan</h3>
                <?php
                include '../assets/php/config.php';

                $no = 1;
                $get_data = mysqli_query($conn, "SELECT * FROM tb_blog");
                while ($data = mysqli_fetch_array($get_data)) {
                ?>

                    <div class="col-lg-3 py-4 col-6 my-2 rounded">
                        <div class="zoom-effect">
                            <div class="kotak">
                                <img src="gambar/<?php echo $data['gambar_blog']; ?>" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="py-2 px-2">
                            <a href="detail_blog.php?id=<?= $data['id'] ?>" style="text-decoration: none; color:#72bb36;">
                                <h5><?= $data['judul_blog']; ?></h5>
                            </a>
                            <span class="bi bi-calendar-event"> <?php echo date($data['tanggal_blog']); ?></span>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>




    </div>






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>