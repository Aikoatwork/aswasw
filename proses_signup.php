<?php
require 'koneksi.php';

// Periksa proses signup
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username sudah ada dalam database
    $query = "SELECT * FROM data_user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    // Jika username sudah ada, tampilkan pesan error
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan gunakan username lain.";
        header("Location: signup.php");
        exit;
    } else {
        // Jika username belum ada, simpan data pengguna baru ke database
        $query = "INSERT INTO data_user (username, password) VALUES ('$username', '$password')";
        $insertResult = mysqli_query($koneksi, $query);

        // Periksa hasil insert
        if ($insertResult) {
            // Signup berhasil, arahkan ke halaman login
            header("Location: login.php");
            exit;
        } else {
            // Jika terjadi kesalahan saat insert, tampilkan pesan error
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
    }
}

?>
