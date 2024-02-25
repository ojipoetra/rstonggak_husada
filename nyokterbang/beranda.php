<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyok Terbang | JWB Digitalent ke-5</title>

    <!-- Icon Nyokterbang -->
    <link rel="shortcut icon" href="assets/img/ic_nyokTerbang.png" type="image/x-icon">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>


    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <img src="assets/img/ic_nyokTerbang.png" alt="" class="size-ico mx-5">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active-page" aria-current="page" href="#"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="assets/php/controller-page?page=1">Cek Jadwal & Penerbangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="assets/php/controller-page?page=2">Tentang Kami</a>
                    </li>
                    <?php
                    session_start();

                    if (isset($_SESSION['username'])) {
                        echo "
                        <li class='nav-item'>
                            <a href='assets/php/controller-page?page=4' class='nav-link btn-pesan-tiket'>Keluar</a>
                        </li>
                        ";
                    }

                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Content -->
    <div class="container py-5 px-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 my-3">
                <h1 class="text-orange fs-title"><b>Melayang</b></h1>
                <h1 class="text-orange">tentukan</h1>
                <h1><b class="text-orange-2 fs-title">Tujuanmu</b></h1>
                <button class="btn-fx my-3">
                    <h5>Bersama kami Nyok terbang!</h5>
                </button>
            </div>
            <div class="col-lg-4 my-3">
                <img src="assets/img/hero_pesawat.png" alt="" class="size_hero_img">
            </div>
            <div class="col-lg-4 my-3">
                <h3>Booking Tiket</h3>
                <p class="text-sub-title">Pesan dimana saja kapan aja bisa dan mudah.</p>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="assets/img/ticket.png" alt="" class="size_tiket">
                    </div>
                </div>
            </div>
        </div>

        <!-- Cek jadwal penerbangan -->
        <div class="container py-3 px-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 shadow-lg rounded-5 px-5 py-5 position-absolute bg-white">
                    <form action="pesan-tiket" method="post">
                        <h4>Yuk Pesan Tiket Penerbanganmu!</h4>
                        <?php

                        $file = "assets/json/data.json";
                        // Mendapatkan file json
                        $dataBandara = file_get_contents($file);

                        // Mendecode dataBandara.json
                        $data = json_decode($dataBandara, true);
                        asort($data);

                        ?>
                        <div class="mb-3">
                            <select name="maskapai" id="" class="form-select">
                                <option value="">- Pilih Maskapai -</option>
                                <?php
                                foreach ($data as $d) {
                                    echo "<option>" . $d['maskapai'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" class="btn-pesan-tiket" value="Pesan Tiket">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer section -->
    <footer class="container-fluid bg-orange-2 py-5 px-5">
        <div class="row position-relative my-footer d-flex align-items-center">
            <div class="col-lg-5 text-white">
                <h5>#NyokTerbang</h5>
                <h2>Bersama kami Penerbangan jadi Nyaman dan Aman</h2>
                <button class="btn-fx my-3">
                    <h5>Bersama kami Nyok terbang!</h5>
                </button>
            </div>
            <div class="line-vertical"></div>
            <div class="col-lg-3">
                <a href="" class="txt-footer">Jl. Raya Soekarno Hatta - Bandara Indonesia</a>
            </div>
            <div class="line-vertical"></div>
            <div class="col-lg-3">
                <a href="" class="txt-footer">Beranda</a><br>
                <a href="" class="txt-footer">Cek Jadwal & Penerbangan</a><br>
                <a href="" class="txt-footer">Tentang Kami</a>
            </div>
        </div>
    </footer>




</body>

</html>