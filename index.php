<?php
require 'koneksi.php';
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// Query untuk mengambil data barang
$query = "SELECT * FROM data";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Index</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal Pembuatan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['id_barang']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['tanggal_pembuatan']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="edit.php?id_barang=<?php echo $row['id_barang']; ?>">Edit</a>
                    <a href="hapus.php?id_barang=<?php echo $row['id_barang']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <a href="tambah_barang.php">Tambah Barang</a>
    </table>

    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
</body>
</html>