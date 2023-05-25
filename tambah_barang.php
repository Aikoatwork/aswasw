<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>

    <form action="proses_tambah.php" method="POST">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required><br>

        <label for="tanggal_pembuatan">Tanggal Pembuatan:</label>
        <input type="date" id="tanggal_pembuatan" name="tanggal_pembuatan" required><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" step="0.01" required><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
