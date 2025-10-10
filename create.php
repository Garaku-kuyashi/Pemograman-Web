<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - NekoNeko</title>
    <link rel="stylesheet" href="./crud-style/style.css">
    <link rel="icon" type="img/jpg" href="img/icon/icon.jpg">
</head>
<body>
    <div class = "create-form">
        <h2>Tambah Produk Baru</h2>
        <form class ="form" method="POST" enctype="multipart/form-data" action="proses_create.php">
            <label>Nama Produk:</label><br>
            <input type="text" name="nama_produk" required><br>

            <label>Tipe Produk:</label><br>
            <input type="text" name="tipe_produk" required><br>

            <label>Kategori Produk:</label><br>
            <input type="text" name="kategori_produk" required><br>

            <label>Harga Produk:</label><br>
            <input type="number" name="harga_produk" required><br>

            <label>Gambar Produk:</label><br>
            <input type="file" name="gambar_produk" accept="image/*" required><br><br>

            <button class = "create-button" type="submit">Simpan Produk</button>
            <a class = "a-button" href="dashboard.php">Batal</a>
        </form>
    </div>
</body>
</html>