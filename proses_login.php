<?php
require 'koneksi.php';
session_start();

// Periksa login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kredensial pengguna
    $query = "SELECT * FROM data_user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    // Periksa hasil query
    if (mysqli_num_rows($result) === 1) {
        // Login berhasil, arahkan ke halaman utama atau halaman yang diinginkan
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan error atau arahkan kembali ke halaman login
        header("Location: login.php?error=1");
        exit();
    }
}

?>
