<script>
    window.print();
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Booking <?php echo $_POST['nama-lengkap'] ?>! | JWB Digitalent ke-5</title>

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

<body class="bg-img">

    <div class="container px-3 py-3 my-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white px-5 py-5 rounded-5 position-relative">
                    <div class="py-2">
                        <h2>Bukti Booking Penerbangan <span class="badge bg-danger">Invoice</span></h2>
                        <h4>#nyokTerbang</h4>
                    </div>
                    <hr class="border-dashed"><br>
                    <div class="border-dashed text-center px-3 py-3 rounded-3">
                        <h1><b><?= $_POST['maskapai'] ?></b></h1>
                    </div><br>

                    <p>Nama Lengkap</p>
                    <h4><?= $_POST['nama-lengkap'] ?></h4><br>

                    <p>Jadwal Penerbangan</p>
                    <h4><?= $_POST['jadwal-penerbangan'] ?></h4><br>

                    <hr class="border-dashed"><br>
                    <img src="assets/img/bull.png" alt="" class="sz-img position-absolute top-50 start-0 translate-middle">
                    <img src="assets/img/bull.png" alt="" class="sz-img position-absolute top-50 start-100 translate-middle">


                    <p>Nama Wisata</p>
                    <h4><?= $_POST['alamat']; ?></h4><br>

                </div>
            </div>
        </div>
    </div>




</body>

</html>