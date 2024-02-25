<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | JWB Digitalent ke-5</title>

    <!-- Icon Nyokterbang -->
    <link rel="shortcut icon" href="../img/ic_nyokTerbang.png" type="image/x-icon">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/style.css">


</head>

<body>


    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <img src="../img/ic_nyokTerbang.png" alt="" class="size-ico mx-5">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="../php/controller-page?page=3"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="../php/controller-page?page=1">Cek Jadwal & Penerbangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active-page" href="../php/controller-page?page=2">Tentang Kami</a>
                    </li>
                    <?php
                    session_start();

                    if (isset($_SESSION['username'])) {
                        echo "
                        <li class='nav-item'>
                            <a href='../php/controller-page?page=4' class='nav-link btn-pesan-tiket'>Keluar</a>
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
                <h2>Tentang Kami</h2>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tentang kami
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <b>Dedikasi & Edukasi</b>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ipsa nisi repellendus harum cupiditate alias at doloremque a, natus tempora sint delectus impedit nam, atque aliquid nesciunt? Delectus facilis deleniti quibusdam blanditiis consectetur earum mollitia deserunt. Error autem doloremque ad reprehenderit minima consequuntur distinctio debitis sint eveniet, commodi dolorem excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tujuan Kami
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <b>Dedikasi & Edukasi</b>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ipsa nisi repellendus harum cupiditate alias at doloremque a, natus tempora sint delectus impedit nam, atque aliquid nesciunt? Delectus facilis deleniti quibusdam blanditiis consectetur earum mollitia deserunt. Error autem doloremque ad reprehenderit minima consequuntur distinctio debitis sint eveniet, commodi dolorem excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Program Kami
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <b>Dedikasi & Edukasi</b>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ipsa nisi repellendus harum cupiditate alias at doloremque a, natus tempora sint delectus impedit nam, atque aliquid nesciunt? Delectus facilis deleniti quibusdam blanditiis consectetur earum mollitia deserunt. Error autem doloremque ad reprehenderit minima consequuntur distinctio debitis sint eveniet, commodi dolorem excepturi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer section -->
    <footer class="container-fluid bg-orange-2 py-5 px-5">
        <div class="row position-relative my-footer-5 d-flex align-items-center">
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