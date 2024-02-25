<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online / Booking</title>

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
    <nav class="navbar navbar-expand-lg margin-center py-3 sticky-top shadow bg-white">
        <div class="container-fluid">
            <img src="../assets/img/logo.png" alt="tonggakhusada" class="logo-size px-3">
            <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list line-green fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link px-3 active-green" aria-current="page" href="/">Beranda</a>
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
                    <!-- <button class="btn-green disabled">DAFTAR ONLINE</button> -->
                </div>
            </div>
        </div>
    </nav>


    <?php

    include 'php/config.php';


    $nik = $_GET['nik'];
    $data = mysqli_query($conn, "SELECT * from datapendaftaran WHERE nik='$nik'");
    $d = mysqli_fetch_array($data)
    
    
    ?>


    <div class="container px-3 py-3 my-5">
        <div class="row d-flex justify-content-center align-items-center">
            <?php
            if (isset($_GET['nik'])) {
                if (isset($_GET['nik']) == true) {
            ?>
                    <div class="alert alert-success" role="alert">
                        Pendaftaran Berhasil! Lihat detail berikan bukti pendaftaran ke petugas! <a href="detailPasien?nik=<?= $d['nik']; ?>" target="_blank" class="alert-link">Cek</a>.
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Pendaftaran Gagal silahkan coba lagi!
                    </div>
            <?php
                }
            }
            ?>

            <h2 class="my-3">Form Pendaftaran / Booking</h2>
            <div class="col-lg-6">
                <form action="php/actDaftar.php" method="POST">
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> NIK (KTP)</label>
                        <input type="number" name="nik" class="form-control" placeholder="..." required>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Nama Lengkap</label>
                        <input type="text" name="namaLengkap" class="form-control" placeholder="..." required>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> No.Telepon/Whatsapp</label>
                        <input type="number" name="noTlp" class="form-control" placeholder="+62" required>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Tempat Lahir / Tgl Lahir</label>
                        <div class="input-group">
                            <input type="text" name="tmpLahir" class="form-control" placeholder="..." required>
                            <input type="date" name="tglLahir" class="form-control" placeholder="..." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Jenis Kelamin</label>
                        <select name="jk" id="" class="form-select" required>
                            <option value="">- Pilih -</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Gol. Darah</label>
                        <select name="golDar" id="" class="form-select">
                            <option value="">- Pilih -</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="Lainya..">Lainya..</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Alamat Lengkap (KTP)</label>
                        <textarea name="alamat" id="" cols="10" rows="3" class="form-control" placeholder="..." required></textarea>
                        <div class="row my-2">
                            <div class="col-lg-6">
                                <label for=""><span class="text-danger">*</span> RT.</label>
                                <input type="text" name="rt" class="form-control" placeholder="000" required maxlength="3">
                            </div>
                            <div class="col-lg-6">
                                <label for=""><span class="text-danger">*</span> RW.</label>
                                <input type="text" name="rw" class="form-control" placeholder="000" required maxlength="3">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-lg-6">
                                <label for=""><span class="text-danger">*</span> Kel/Desa</label>
                                <input type="text" name="kelDes" class="form-control" placeholder="..." required>
                            </div>
                            <div class="col-lg-6">
                                <label for=""><span class="text-danger">*</span> Kecamatan</label>
                                <input type="text" name="kec" class="form-control" placeholder="..." required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Agama</label>
                        <select name="agama" id="" class="form-select">
                            <option value="">- Pilih -</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Katolik">Katolik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Status Perkawinan</label>
                        <select name="statusKawin" id="" class="form-select" required>
                            <option value="">- Pilih -</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Lajang">Lajang</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for=""><span class="text-danger">*</span> Kewarganegaraan</label>
                        <select name="statusWarga" id="" class="form-select" required>
                            <option value="">- Pilih -</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="my-3 px-3 py-3 bg-green" style="border-radius:25px 0px 25px 0px;">
                        <div class="mb-3 text-center">
                            <h1 class="bi bi-chat-dots text-white"></h1>
                            <h5 class="text-white fw-bold"><span class="text-white">*</span> KONSULTASI</h5>
                            <textarea name="konsultasi" id="" cols="30" rows="5" class="form-control" placeholder="Ada yang bisa kami bantu?"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn-greens">DAFTAR</button>
                    </div>

                </form>
            </div>

            <div class="col-lg-6 px-5 py-5">
                <img src="img/jdwl.jpg" class="img-fluid border rounded" alt="">
                <img src="img/mudah.jpg" class="img-fluid my-2 border rounded" alt="">
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



    <script>
        //<![CDATA[
        setTimeout(function() {
            document.getElementById('popbox').classList.remove('hide');
            document.body.className += " flowbox"
        }, 5000);

        function removeClassonBody() {
            var element = document.body;
            element.className = element.className.replace(/\bflowbox\b/g, "")
        }
        //]]>
    </script>




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            autoplaySpeed: 2500,
            slidesPerView: 1,
            loop: true,
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

    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>