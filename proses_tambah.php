<?php
require 'koneksi.php';

// Periksa proses tambah barang
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $tanggal_pembuatan = $_POST['tanggal_pembuatan'];
    $harga = $_POST['harga'];

    // Query untuk menambahkan data barang ke database
    $query = "INSERT INTO data (nama_barang, tanggal_pembuatan, harga) VALUES ('$nama_barang', '$tanggal_pembuatan', '$harga')";
    $result = mysqli_query($koneksi, $query);

    // Periksa hasil insert
    if ($result) {
        // Data barang berhasil ditambahkan, arahkan kembali ke halaman index
        header("Location: index.php");
        exit;
    } else {
        // Jika terjadi kesalahan saat insert, tampilkan pesan error
        echo "Terjadi kesalahan. Silakan coba lagi.";
    }
}

?>
