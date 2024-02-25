<?php
include "../assets/php/config.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah karir | rstonggakhusada.go.id</title>

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
                    <a class="nav-link px-3 active-green" aria-current="page" href="../assets/php/logout.php" onclick="return confirm('Apakah yakin ingin keluar ?')">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-2">
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Upps!</strong>Ekstensi Tidak Diperbolehkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal_ukuran") {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upps!</strong>Ukuran file terlalu besar
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil") {
            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> disimpan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <div class="container">
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Upps!</strong>Ekstensi Tidak Diperbolehkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil-login") {
            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> login! selamat datang, <?php echo $_SESSION['username']; ?>!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <div class="container py-5 px-5">
        <h2 style="text-align: center;" class="bi bi-person-plus-fill"> Tambah Karir</h2>
        <form action="../assets/php/act_karir.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label>Judul Karir</label>
                <input type="text" class="form-control" placeholder="Masukkan Judul Lowongan karir.." name="judul_karir" required="required">
            </div>
            <div class="form-group mb-3">
                <label>Kualifikasi Karir</label>
                <textarea type="text" class="form-control" placeholder="Masukkan Kualifikasi karir.." name="kualifikasi_karir" required="required"></textarea>
            </div>
            <div class="form-group mb-3">
                <label>Tanggal Karir</label>
                <input type="date" class="form-control" placeholder="Masukkan Nama" name="tanggal_karir" required="required">
            </div>
            <div class="form-group mb-3">
                <label>Foto Karir :</label><br>
                <input type="file" name="foto" required="required" class="form-control">
                <p class="text-danger">* Ukurannya profesional 1280 x 720 px | Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
            </div>
            <input type="submit" name="" value="Simpan" class="btn-green">
        </form>
    </div>


    <div class="container">
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Upps!</strong>Ekstensi Tidak Diperbolehkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil-dihapus") {
            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> data karir dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <!-- Tampilkan lowongan -->
    <div class="container px-5">
        <h3 class="py-2 bi bi-table"> Data Postingan Karir</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul Karir</th>
                    <th>Kualifikasi</th>
                    <th>Tanggal berakhir</th>
                    <th>Gambar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $batas = 5;
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
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['judul_karir']; ?></td>
                        <td><?php echo $d['kualifikasi_karir']; ?></td>
                        <td><?php echo $d['tanggal_karir']; ?></td>
                        <td><img src="../assets/img/karir/<?php echo $d['foto'] ?>" class="w-50"></td>
                        <td>
                            <a href="../assets/php/hapus-karir.php?id=<?php echo $d['id_karir']; ?>" class="btn btn-danger"> Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman > 1) {
                        echo "href='?halaman=$previous'";
                    } ?>>Previous</a>
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
                    } ?>>Next</a>
                </li>
            </ul>
        </nav>
    </div>














    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>