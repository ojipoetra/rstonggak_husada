<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if (isset($_POST['masuk'])) {
    if ($_POST['username'] == "mikosetiawan") {
        if ($_POST['password'] == 123) {
            header("Location:../pages/cek-jadwal-penerbangan?pesan=berhasil-masuk");
        } else {
            echo "<script> alert('Silahkan coba lagi!'); window.location.href='../../masuk' </script>";
        }
    } else {
        echo "<script> alert('Silahkan coba lagi!'); window.location.href='../../masuk'  </script>";
    }
} else {
    echo "<script> alert('Silahkan coba lagi!'); window.location.href='../../masuk' </script>";
}
