<?php
require 'koneksi.php';

// Periksa apakah ada parameter id_barang dan data yang dikirimkan
if (isset($_POST['id_barang']) && isset($_POST['nama_barang']) && isset($_POST['tanggal_pembuatan']) && isset($_POST['harga'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $tanggal_pembuatan = $_POST['tanggal_pembuatan'];
    $harga = $_POST['harga'];

    // Query untuk memperbarui data barang dalam database
    $query = "UPDATE data SET nama_barang = '$nama_barang', tanggal_pembuatan = '$tanggal_pembuatan', harga = '$harga' WHERE id_barang = '$id_barang'";
    $result = mysqli_query($koneksi, $query);
    
    // Periksa hasil update
    if ($result) {
        // Data barang berhasil diperbarui, arahkan kembali ke halaman index
        header("Location: index.php");
        exit;
    } else {
        // Jika terjadi kesalahan saat update, tampilkan pesan error
        echo "Terjadi kesalahan. Silakan coba lagi.";
    }
} else {
    echo "Data tidak lengkap.";
    exit;
}
?>
