<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>

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

    <!-- Tambahkan pustaka JsBarcode dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>

</head>

<body>




    <?php

    include 'php/config.php';


    $nik = $_GET['nik'];
    $data = mysqli_query($conn, "SELECT * from datapendaftaran WHERE nik='$nik'");
    $d = mysqli_fetch_array($data)


    ?>



    <div class="container px-5 py-5">
        <div class="row">
            <div class="card shadow-sm" style="border-radius: 25px" id="printableArea">
                <div class="card-body">
                    <div class="my-4">
                        <h3 class="text-center" style="color: #72bb36;">BUKTI PENDAFTARAN</h3>
                    </div>
                    <div class="mb-3 text-center">
                        <p>ID DAFTAR</p>
                        <!-- Tempatkan elemen HTML untuk barcode di sini -->
                        <canvas id="barcodeCanvas"></canvas>
                    </div>
                    <div class="mb-3 text-center">
                        <h5>Nama Lengkap</h5>
                        <p><?= $d['namaLengkap']; ?></p>
                    </div>
                    <div class="mb-3 text-center">
                        <h5>Tempat/Tanggal Lahir</h5>
                        <p><?= $d['tmpLahir']; ?>/<?= $d['tglLahir']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-12">
                <div class="my-2">
                    <button class="btn-green" id="saveButton"><i class="bi bi-download"></i> Unduh</button>
                </div>
                <!-- <div class="my-2">
                    <a href="javascript:void(0);" onclick="printPageArea('printableArea')"><button class="btn-orange"><i class="bi bi-printer"></i> Print</button></a>
                </div> -->
            </div>
        </div>
    </div>


    <script>
        const canvas = document.getElementById("barcodeCanvas");
        const saveButton = document.getElementById("saveButton");
        const data = "<?= $d['idDaftar']; ?><?= $d['nik']; ?>";

        // Membuat barcode di elemen canvas
        JsBarcode(canvas, data, {
            format: "CODE128",
            width: 2,
            height: 50,
        });

        saveButton.addEventListener("click", function() {
            // Mengambil data URL dari elemen canvas
            const imageDataUrl = canvas.toDataURL("image/png");

            // Membuat elemen <a> untuk menautkan dan mengunduh gambar
            const downloadLink = document.createElement("a");
            downloadLink.href = imageDataUrl;
            downloadLink.download = "barcode.png";
            document.body.appendChild(downloadLink);

            // Mengklik elemen <a> untuk memulai unduhan
            downloadLink.click();

            // Menghapus elemen <a> setelah selesai
            document.body.removeChild(downloadLink);
        });
    </script>

    <script>
        function printPageArea(areaID) {
            var printContent = document.getElementById(areaID).innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>


</body>

</html>