<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $tipe_produk = $_POST['tipe_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $harga_produk = $_POST['harga_produk'];
    $gambar_produk = $_FILES['gambar_produk']['name'];
    $temp_file = $_FILES['gambar_produk']['tmp_name'];
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $ext = strtolower(pathinfo($gambar_produk, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        die("Hanya file jpg, jpeg, png, gif");
    }
    $upload_dir = "img/figure/";
    $target_file = $upload_dir . basename($gambar_produk);

    if (move_uploaded_file($temp_file, $target_file)) {
        $stmt = $conn->prepare("INSERT INTO produk (nama_produk, tipe_produk, kategori_produk, harga_produk, gambar_produk) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama_produk, $tipe_produk, $kategori_produk, $harga_produk, $gambar_produk);
        $stmt->execute();

        header("Location: dashboard.php");
        exit();
    } else {
        echo "upload gagal";
    }
}
?>