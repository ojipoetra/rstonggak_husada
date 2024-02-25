<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        echo "<script>alert('Tidak bisa akses login dulu!');window.location.href='login';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media informasi | rstonggakhusada.co.id</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/media-informasi.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .slider,
        .nav-btn {
            height: 50px;
            width: 50px;
            border-radius: 50px;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .nav-btn::before,
        .nav-btn::after {
            font-size: 25px;
            color: #fff;

        }

        .swiper-button-next {
            right: 50px;
        }

        .swiper-button-prev {
            left: 50px;
        }

        .swiper-pagination-bullet {
            opacity: 1;
            height: 12px;
            width: 12px;
            background-color: #fff;
        }

        .swiper-pagination-bullet-active {
            border: none;
            background-color: #72bb36;
        }

        #more {
            display: none;
        }
    </style>

</head>

<body>



    <!-- Section nav -->
    <!-- <section id="contact-nav">
        <div class="container bg-green py-2 rounded-bottom shadow-sm">
        </div>
    </section> -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg margin-center py-3 sticky-top shadow">
        <div class="container-fluid">
            <img src="../assets/img/logo.png" alt="tonggakhusada" class="logo-size px-3">
            <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list line-green fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <b><span style="color:#72bb36;">Dashboard | All Media Informasi</span></b>
                <div class="navbar-nav mx-auto me-5">
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <?= $_SESSION['admin']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="php/act_logout.php">Keluar</a></li>
                        </ul>
                    </li>

                </div>
            </div>
        </div>
    </nav>



    <div class="container py-5 px-5">
        <div class="row">
            <h3>Form Content Blog - Media Informasi</h3>
            <!-- PESAN -->
            <?php if (isset($_GET['pesan'])) { ?>
                <?php if ($_GET['pesan'] == "berhasil") { ?>
                    <div class="alert alert-primary" role="alert">
                        Berhasil Mengubah Data Siswa
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal Mengubah Data Siswa
                    </div>
                <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>
                    <div class="alert alert-warning" role="alert">
                        Ekstensi File Harus PNG Dan JPG
                    </div>
                <?php } elseif ($_GET['pesan'] == "size") { ?>
                    <div class="alert alert-warning" role="alert">
                        Size File Tidak Boleh Lebih Dari 2 MB
                    </div>
                <?php } elseif ($_GET['pesan'] == "hapus") { ?>
                    <div class="alert alert-primary" role="alert">
                        Berhasil Menghapus Data Siswa
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagalhapus") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal Menghapus Data Siswa
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="col-lg-12">
                <div class="card px-3 py-3">
                    <div class="card-body">
                        <form action="php/act_add_blog" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Gambar Blog</label>
                                <input name="pas_foto" type="file" class="form-control" placeholder="Isi : Misalkan 8 Tips sehatkan badan..">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Judul Blog</label>
                                <input name="judul_blog" type="text" class="form-control" placeholder="Isi : Misalkan 8 Tips sehatkan badan..">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi Blog</label>
                                <textarea name="isi_blog" type="text" class="form-control" placeholder="Isi : Diisi sesuai konten judul.." cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Post Blog</label>
                                <input name="tanggal_blog" type="date" class="form-control" placeholder="Isi : Misalkan 8 Tips sehatkan badan..">
                            </div>
                            <button type="submit" class="bi bi-send-fill btn-green"> Kirim / Post</button>
                        </form>
                    </div>
                </div>

                <div class="card my-3">
                    <div class="card-body">
                        <h3>Data Blog Content</h3>
                        <table class="table table-bordered mt-4" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">No</th>
                                    <th scope="col">Judul Blog</th>
                                    <th scope="col">Tanggal Blog / Post</th>
                                    <th scope="col" width="20%">Gambar Blog</th>
                                    <th scope="col" width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../assets/php/config.php';

                                $no = 1;
                                $get_data = mysqli_query($conn, "SELECT * FROM tb_blog");
                                while ($data = mysqli_fetch_array($get_data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['judul_blog']; ?></td>
                                        <td><?php echo $data['tanggal_blog']; ?></td>
                                        <td>
                                            <?php
                                            if ($data['gambar_blog'] == "") { ?>
                                                <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
                                            <?php } else { ?>
                                                <img src="gambar/<?php echo $data['gambar_blog']; ?>" style="width:100px;height:100px;">
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="php/act_edit_blog?id=<?php echo $data['id'] ?>" class="btn btn-warning text-white">Edit</a>
                                            <a href="php/act_delete_blog?id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>








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


    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>