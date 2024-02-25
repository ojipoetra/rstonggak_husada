<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: masuk");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Admin | RS Tonggak Husada</title>

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
        <?php
        if (isset($_GET['pesan']) == "berhasil-konfirmasi") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <strong>Berhasil dikonfirmasi! </strong> semangat response nya yah 😁
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
                    ";
        }

        ?>
        <span class="position-absolute top-0 end-0 mx-5 py-5"><a href="keluar" class="txt-greens">Keluar</a></span>
        <div class="row d-flex justify-content-center">
            <h3 class="py-3 txt-greens text-center">Hai! <?php echo $_SESSION['username']; ?> <b class="txt-orange"> Balas Response</b></h3>
            <?php
            include 'assets/php/config.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM tb_konsultasi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-lg-3 mx-1 my-1 shadow-lg rounded-4 px-3 py-3">
                    <form action="assets/php/act_proses_kerjaan" method="POST">
                        <span class="txt-greens fs-2">ID<?= $no++; ?></span>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" name="nama_lengkap" value="<?= $d['nama_lengkap']; ?>">
                        <input type="text" class="form-control" name="tanggal" value="<?= $d['tanggal']; ?>">
                        <input type="text" class="form-control" name="devisi" value="<?= $d['devisi']; ?>">
                        <input type="text" class="form-control" name="isi" value="<?= $d['isi']; ?>">
                        <input type="text" class="form-control" name="waktu" value="<?= $d['waktu']; ?>">
                        <input name="status" type="radio" value="2"> <span>Sedang Diproses</span><br>
                        <input name="status" type="radio" value="1"> <span>Sudah Diproses</span>
                        <div class="my-3">
                            <button type="submit" class="btn-greens">Simpan</button>
                        </div>
                    </form>
                </div>

            <?php } ?>
        </div>
    </div>



</body>

</html>