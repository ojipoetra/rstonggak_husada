<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan IT | RS Tonggak Husada</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <?php
    date_default_timezone_set("Asia/jakarta");
    ?>

    <div class="container py-5 px-5">
        <div class="row">
            <img src="assets/img/txt_ic.png" alt="" class="w-100 my_ic">
            <?php
            if (isset($_GET['pesan']) == "berhasil") {
                echo "
                    <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                        <strong>Keluhan berhasil disimpan!</strong> <a href='response'>Bisa cek respont keluhan disini 😀</a>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
            }

            ?>
            <div class="col-lg-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <img src="assets/img/ic_banner03.png" alt="rstonggakhusada.co.id" class="sz_ic swiper-slide">
                        <img src="assets/img/ic_banner02.png" alt="rstonggakhusada.co.id" class="sz_ic swiper-slide">
                        <img src="assets/img/ic_banner.png" alt="rstonggakhusada.co.id" class="sz_ic swiper-slide">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="assets/php/act_konsultasi" method="POST">
                    <div class="mb-3">
                        <label class="form-label"><b>Nama Lengkap</b></label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Misalkan : Pak Udin" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Tanggal</b></label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p><b>Bagian / Devisi</b></p>
                        <input type="radio" name="devisi" value="Direktur"> <span> Direktur</span>
                        <input type="radio" name="devisi" value="Dokter"> <span> Dokter</span>
                        <input type="radio" name="devisi" value="Administasi"> <span> Administrasi</span>
                        <input type="radio" name="devisi" value="Pendaftaran"> <span> Pendaftaran</span><br>
                        <input type="radio" name="devisi" value="OK"> <span> OK</span>
                        <input type="radio" name="devisi" value="Farmasi"> <span> Farmasi</span>
                        <input type="radio" name="devisi" value="Radiologi"> <span> Radiologi</span>
                        <input type="radio" name="devisi" value="Laboratorium"> <span> Laboratorium</span><br>
                        <input type="radio" name="devisi" value="Ranap Atas"> <span> Ranap Atas</span>
                        <input type="radio" name="devisi" value="Ranap Bawah"> <span> Ranap Bawah</span>
                        <input type="radio" name="devisi" value="OB"> <span> OB</span>
                    </div>
                    <div class="mb-3">
                        <p><b>Keluhan / Masalah</b></p>
                        <textarea name="isi" class="form-control" cols="30" rows="10" placeholder="Misalkan : PC Mati pak.." required></textarea>
                    </div>
                    <input type="text" name="waktu" value="<?php echo date("H:i:s"); ?>" hidden>
                    <?php 
                        include 'assets/php/config.php';
                        $data = mysqli_query($conn, "SELECT * FROM tb_konsultasi");
                        $d = mysqli_fetch_array($data);
                    ?>
                    <input type="text" name="status" value="" hidden>
                    <button type="submit" class="btn-greens">Kirimkan</button>
                </form>
                <a href="response"><button class="btn-orange my-3">Lihat Response</button></a>
            </div>
        </div>
    </div>

    <footer class="bg-greens container-fluid py-5 px-5 text-center">
        <a href=""><span class="bi bi-youtube text-white fs-3 border-0 mx-3" style="text-decoration: none;"> RS Tonggak Husada</span></a>
        <a href=""><span class="bi bi-instagram text-white fs-3 border-0 mx-3" style="text-decoration: none;"> @rstonggakhusada</span></a>
        <a href=""><span class="bi bi-whatsapp text-white fs-3 border-0 mx-3" style="text-decoration: none;"> +6285779178942</span></a>
    </footer>



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



</body>

</html>