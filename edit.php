<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

$id = $_GET['id'] ?? 0;
$result = $conn->query("SELECT * FROM produk WHERE id_produk = $id");

if ($result->num_rows == 0) {
    die("Produk tidak ditemukan.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - NekoNeko</title>
    <link rel="stylesheet" href="./crud-style/style.css">
    <link rel="icon" type="img/jpg" href="img/icon/icon.jpg">
</head>
<body>
    <div class = "edit-form">
        <h2>Edit Produk</h2>
        <form class = "form" method="POST" enctype="multipart/form-data" action="proses_edit.php">
            <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>">
            
            <label>Nama Produk:</label><br>
            <input type="text" name="nama_produk" value="<?php echo htmlspecialchars($row['nama_produk']); ?>" required ><br>

            <label>Tipe Produk:</label><br>
            <input type="text" name="tipe_produk" value="<?php echo htmlspecialchars($row['tipe_produk']); ?>" required ><br>

            <label>Kategori Produk:</label><br>
            <input type="text" name="kategori_produk" value="<?php echo htmlspecialchars($row['kategori_produk']); ?>" required ><br>

            <label>Harga Produk:</label><br>
            <input type="number" name="harga_produk" value="<?php echo $row['harga_produk']; ?>" required ><br>

            <label>Gambar Saat Ini:</label><br>
            <img src="img/figure/<?php echo htmlspecialchars($row['gambar_produk']); ?>" alt="Gambar Produk" width="100" style="margin: 5px 0;"><br>

            <label>Ganti Gambar (opsional):</label><br>
            <input type="file" name="gambar_produk" accept="image/*" ><br><br>

            <button class = "create-button" type="submit">Update Produk</button>
            <a class = "a-button" href="dashboard.php">Batal</a>
        </form>
    </div>
</body>
</html>