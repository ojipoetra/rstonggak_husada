<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response | RS Tonggak Husada</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>


    <div class="container py-5 px-5">
        <span class="position-absolute top-0 end-0 mx-5 py-5"><a href="masuk" class="txt-greens">Masuk | Admin</a></span>
        <div class="row d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-12">
                    <a href="index" style="text-decoration: none;"><i class="bi bi-arrow-90deg-left fw-bold txt-orange fs-5"> Kembali</i></a>
                </div>
            </div>
            <h3 class="py-3 txt-greens text-center">Cek <b class="txt-orange">Response</b> Keluhan IT disini</h3>
            <?php
            include 'assets/php/config.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM tb_konsultasi");
            while ($d = mysqli_fetch_array($data)) {

            ?>
                <div class="col-lg-3 mx-1 my-1 shadow-lg rounded-4 px-3 py-3">
                    <span class="txt-greens fs-2">ID<?= $no++; ?></span>
                    <h3 class="py-4">" <?= $d['isi']; ?> "</h3>
                    <h6>Devisi : <?= $d['devisi']; ?> (<?= $d['nama_lengkap']; ?>)</h6>
                    <hr>
                    <span><b>Status</b> (
                        <?php

                        if ($d['status'] == 1) {
                            echo  "<td><b class='text-primary'> Sudah Selesai Diproses</b class='text-danger'></span></td>";
                        } elseif ($d ['status'] == 2) {
                            echo "<td><b class='text-success'> Sedang Diproses</b class='text-danger'></span></td>";
                        } else {
                            echo "<td><b class='text-danger'> Segera di Perbaiki</b></span></td>";
                        }

                        ?>
                        )</span>
                    <p class="bi bi-clock-fill"> Dikirim pada : <?= $d['tanggal']; ?> / <?= $d['waktu']; ?></p>
                </div>

            <?php } ?>
        </div>
    </div>



</body>

</html>