<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../../masuk");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Jadwal & Penerbangan | Nyok Terbang | JWB Digitalent ke-5</title>

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
                        <a class="nav-link mx-2 active-page" href="../php/controller-page?page=1">Cek Jadwal & Penerbangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="../php/controller-page?page=2">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="../php/controller-page?page=4" class="nav-link btn-pesan-tiket">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Daftar Penerbangan -->
    <div class="container py-3 px-5 my-table">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 shadow-lg rounded-5 px-5 py-5 position-absolute bg-white py-ppendaftaran">
                <?php
                    if(isset($_GET['pesan'])) {
                        if($_GET['pesan'] == "berhasil-disimpan"){
                            echo "
                            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                            <strong>Data Berhasil disimpan!</strong> Perikasa kembali data yang dimasukan!.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            ";
                        } elseif($_GET['pesan'] == "gagal-disimpan") {
                            echo "
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Data Gagal menyimpan!</strong> cek datanya apakah sudah benar!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            ";
                        } elseif($_GET['pesan'] == "berhasil-login"){
                            echo "
                            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                            <strong>Berhasil masuk!</strong> Yuk jelajahi harimu 😊🙌!.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            ";
                        } else {
                            echo "
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Coba lagi gagal menyimpan!</strong> cek datanya apakah sudah benar!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            ";
                        }
                        
                    }
                ?>
                <form action="../php/dataPenerbangan.php" method="post">
                    <h4>Pendaftaran Rute Penerbangan</h4>
                    <div class="mb-3">
                        <label for="">Maskapai</label>
                        <input type="text" name="maskapai" class="form-control" placeholder="Masukan Maskapai...">
                    </div>
                    <div class="mb-3">
                        <label for="">Bandara Asal</label>
                        <select name="bandaraAsal" id="" class="form-select">
                            <option value="">- Pilih -</option>
                            <?php
                            include "../php/arrayPenerbangan.php";

                            foreach ($dataPenerbangan['BA'] as $data) {
                                echo "<option>" . $data['bandaraAsal'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Bandara Tujuan</label>
                        <select name="bandaraTujuan" id="" class="form-select">
                            <option value="">- Pilih -</option>
                            <?php
                            include "../php/arrayPenerbangan.php";

                            foreach ($dataPenerbangan['BT'] as $data) {
                                echo "<option>" . $data['bandaraTujuan'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Harga Tiket</label>
                        <input type="number" name="hargaTiket" class="form-control" placeholder="Rp.">
                    </div>

                    <input name="simpan" type="submit" class="btn-pesan-tiket" value="Simpan">
                </form>
            </div>
        </div>
    </div>

    <!-- Data Table Penerbangan -->
    <div class="container py-3 px-5 my-table-2">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 shadow-lg rounded-5 px-5 py-5 position-absolute bg-white scroller">
                <h4>Daftar Rute Tersedia</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Maskapai</th>
                                <th scope="col">Asal Penerbangan</th>
                                <th scope="col">Tujuan Penerbangan</th>
                                <th scope="col">Harga Tiket</th>
                                <th scope="col">Pajak</th>
                                <th scope="col">Total Harga Tiket</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // File json yang akan dibaca (full path file)
                            $file = "../json/data.json";
                            $no = 1;
                            // Mendapatkan file json
                            $dataBandara = file_get_contents($file);

                            // Mendecode dataBandara.json
                            $data = json_decode($dataBandara, true);
                            asort($data);

                            // Membaca data array menggunakan foreach

                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>" . $no++ .  "</td>";
                                echo  "<td>" . $row['maskapai'] . "</td>";
                                echo  "<td>" . $row['bandaraAsal'] . "</td>";
                                echo  "<td>" . $row['bandaraTujuan'] . "</td>";
                                echo  "<td> Rp. " . number_format($row['hargaTiket']) . "</td>";
                                echo  "<td> Rp. " . number_format($row['pajak']) . "</td>";
                                echo  "<td> Rp. " . number_format($row['totalHarga']) . "</td>";
                                echo "</tr>";
                            }


                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer section -->
    <footer class="container-fluid bg-orange-2 py-5 px-5">
        <div class="row position-relative my-footer-2 d-flex align-items-center">
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