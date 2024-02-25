<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat datang! | rstonggakhusada.go.id</title>

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
                        <a class="nav-link dropdown-toggle active-green" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas Penunjang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item active-green" href="../ruangan/ugd">UGD</a></li>
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
                        $data = mysqli_query($conn,"SELECT * from tb_karir");
                        // menghitung data barang
                        $totKarir = mysqli_num_rows($data);
                     ?>
                    <a class="nav-link px-3" aria-current="page" href="../karir">Karir <span class="badge bg-danger"><?php echo $totKarir; ?></span></a>
                    <a class="nav-link px-3" aria-current="page" href="../media-informasi/">Media Informasi</a>
                </div>
            </div>
        </div>
    </nav>



    <!-- CONTENT -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
                <img src="../assets/img/documention/ugd.jpeg" class="img-fluid shadow rounded">
                <div class="col py-3">
                    <h1>Ruangan UGD</h1>
                    <h5>Layan Kami Tersedia Ruangan UGD</h5>
                    <img src="../assets/img/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                    <hr>
                </div>
                <div class="col">
                    <p>
                        Unit Gawat Darurat (UGD) yang beroprasi selama 24 Jam, dilengkapi dengan peralatan medis dan perlengkapan medis yang canggih dan lengkap serta tenaga medis yang tanggap dan
                        cekatan sehingga dapat memberikan pertolongan - pertolongan pertama pada pasien gawat darurat dengan cepat.
                    </p>
                </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="list-group">
                    <button type="button" class="rounded-top btn-green-top" aria-current="true">
                        <b>DAFTAR FASILITAS</b>
                    </button>
                    <a href="ugd" class="a-none"><button type="button" class="list-group-item list-group-item-action active-green">UGD</button></a>
                    <a href="farmasi" class="a-none"><button type="button" class="list-group-item list-group-item-action">Instalasi Farmasi</button></a>
                    <a href="laboratorium" class="a-none"><button type="button" class="list-group-item list-group-item-action">Laboratorium</button></a>
                    <a href="radiologi" class="a-none"><button type="button" class="list-group-item list-group-item-action">Radiologi</button></a>
                    <a href="operasi" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ruang Operasi</button></a>
                    <a href="bersalin" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ruang Bersalin</button></a>
                    <li class="navbar-nav nav-item dropdown list-group-item list-group-item-action">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ruang Rawat Inap
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ranap-vip">VIP</a></li>
                            <li><a class="dropdown-item" href="ranap-deluxe">Deluxe</a></li>
                            <li><a class="dropdown-item" href="ranap">Bangsal</a></li>
                        </ul>
                    </li>
                    <a href="ambulan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ambulan</button></a>
                    <a href="kantin" class="a-none"><button type="button" class="list-group-item list-group-item-action">Kantin</button></a>
                    <a href="mushola" class="a-none"><button type="button" class="list-group-item list-group-item-action">Mushola</button></a>
                    <a href="parkiran-dan-halaman-depan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Halaman Parkir dan Taman</button></a>
                </div>
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