<?php
require 'koneksi.php';

$id = $_GET['id_barang'];
mysqli_query($koneksi, "DELETE FROM data WHERE id_barang = '$id'");
header("Location: index.php");

?>
