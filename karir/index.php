<?php
include "../assets/php/config.php";

?>


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
                    
                    <a class="nav-link px-3 active-green" aria-current="page" href="">Karir</a>
                    <a class="nav-link px-3" aria-current="page" href="login">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php
            $batas = 1;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($conn, "select * from tb_karir");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_pegawai = mysqli_query($conn, "select * from tb_karir limit $halaman_awal, $batas");
            $nomor = $halaman_awal + 1;
            while ($d = mysqli_fetch_array($data_pegawai)) {
            ?>

                <div class="col-lg-12 py-5 px-5" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../assets/img/karir/<?php echo $d['foto'] ?>" class="img-fluid rounded shadow">
                    <div class="py-3">
                        <h2 class="py-2">Lowongan Pekerjaan <?php echo $d['judul_karir']; ?></h2>
                        <img src="../assets/img/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                        <hr>
                        <div class="py-5">
                            <h2><?php echo $d['judul_karir']; ?></h2>
                            <h6 class="py-2">Kualifikasi :</h6>
                            <ul>
                                <li>Pria / Wanita</li>
                                <li>STR Aktif</li>
                            </ul>
                            <!--<h6 class="py-2">Deskripsi Pekerjaan :</h6>-->
                            <!--<ul>-->
                            <!--    <li>Membuat laporan harian maupun bulanan</li>-->
                            <!--    <li>Surat menyuratInput data & filling dokumen</li>-->
                            <!--    <li>Supporting & mengorganisir dokumen</li>-->
                            <!--</ul>-->
                        </div>
                        <h5>Kirim CV melalui email :</h5>
                        <h6><b>hrdtonggakhusada@gmail.com</b></h6>
                        <br>
                        <h5>Atau kirim langsung ke :</h5>
                        <h6><b>RS Tonggak Husada Jl. Raya Bojonegara Kp. Tunggak Ds. Kertasan Kec. Bojonegara Serang -Banten</b> <a href="https://goo.gl/maps/2MpFCdM7bZA1vZXK7" target="_blank"><span class="badge bg-danger">Lihat Lokasi</span></a></h6>
                        <h6>Sebelum tanggal : <span class="text-danger"><?php echo $d['tanggal_karir']; ?></span></h6>
                    </div>

                <?php
            }
                ?>
                </div>

                <nav class="py-2">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman > 1) {
                                                        echo "href='?halaman=$previous'";
                                                    } ?>>Kembali</a>
                        </li>
                        <?php
                        for ($x = 1; $x <= $total_halaman; $x++) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                        <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                        echo "href='?halaman=$next'";
                                                    } ?>>Lanjut</a>
                        </li>
                    </ul>
                </nav>

                <!-- <div class="col-lg-4 py-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="shadow bg-green text-white rounded px-3 py-3">
                        <h5>Pengumuman :</h5>
                        <p><span class="text-warning">*</span> Hasil dari seleksi ditentukan ketika sudah dinyatakan diterima</p>
                    </div>
                    <div class="shadow my-2 rounded px-3 py-3">
                        <h5>Informasi lowongan lainya</h5>
                        <a href=""><button class="btn shadow active-green">Dokter Spesialis Radiologi</button></a>
                    </div>
                </div> -->

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