<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>
    <h1>Edit Data Barang</h1>

    <?php
    require 'koneksi.php';

    // Periksa apakah ada parameter id_barang yang dikirimkan
    if (isset($_GET['id_barang'])) {
        $id_barang = $_GET['id_barang'];

        // Query untuk mengambil data barang berdasarkan id_barang
        $query = "SELECT * FROM data WHERE id_barang = '$id_barang'";
        $result = mysqli_query($koneksi, $query);

        // Periksa hasil query
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $nama_barang = $row['nama_barang'];
            $tanggal_pembuatan = $row['tanggal_pembuatan'];
            $harga = $row['harga'];
        } else {
            echo "Data barang tidak ditemukan.";
            exit;
        }
    } else {
        echo "ID Barang tidak ditemukan.";
        exit;
    }
    ?>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang; ?>" required><br>

        <label for="tanggal_pembuatan">Tanggal Pembuatan:</label>
        <input type="date" id="tanggal_pembuatan" name="tanggal_pembuatan" value="<?php echo $tanggal_pembuatan; ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" step="0.01" value="<?php echo $harga; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
