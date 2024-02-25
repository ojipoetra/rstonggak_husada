<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket! | JWB Digitalent ke-5</title>

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
                        <a class="nav-link mx-2" aria-current="page" href="assets/php/controller-page?page=3"><b>Beranda</b></a>
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


    <!-- Cek jadwal penerbangan -->
    <div class="container py-3 px-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 shadow-lg rounded-5 px-5 py-5 position-absolute bg-white">
                <form action="invoice-tiket" method="post">
                    <h4>Pesan Tiket #nyokTerbang</h4>
                    <div class="mb-3">
                        <input type="text" name="maskapai" value="<?php echo $_POST['maskapai'] ?>" class="form-control border-dashed fs-3">
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama-lengkap" class="form-control" placeholder="Masukan Nama Lengkap.." required>
                    </div>
                    <div class="mb-3">
                        <label for="">Jadwal Penerbangan</label>
                        <input type="date" name="jadwal-penerbangan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat.." required></textarea>
                    </div>
                    <input type="submit" value="Pesan" class="btn-pesan-tiket" name="pesan">
                </form>
            </div>
        </div>
    </div>


    <!-- Footer section -->
    <footer class="container-fluid bg-orange-2 py-5 px-5">
        <div class="row position-relative my-footer-4 d-flex align-items-center">
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