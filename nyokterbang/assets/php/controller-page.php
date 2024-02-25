<?php

// Logika Respnsive page 
if (isset($_GET['page'])) {

    $page = $_GET['page'];

    switch ($page) {

        case "1":
            // header("Location:../../masuk");
            header("Location:../../loader-masuk");
            break;

        case "2":
            // header("Location:../pages/tentang-kami");
            header("Location:../pages/loader-tentang-kami");
            break;
        case "3":
            header("Location:../../index");
            break;
        case "4":
            header("Location:../../loader-masuk-act-keluar");
            break;
        default:
            echo "Maaf halaman tidak tersedia!";
    }
} else {
    echo "Coba lagi halaman tidak tersedia!";
}
