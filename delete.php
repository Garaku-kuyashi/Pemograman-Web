<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

$id = $_GET['id'] ?? 0;
$result = $conn->query("SELECT gambar_produk FROM produk WHERE id_produk = $id");
$row = $result->fetch_assoc();
$gambar = $row['gambar_produk'];

$conn->query("DELETE FROM produk WHERE id_produk = $id");

if ($gambar !== 'default.jpg' && file_exists("img/figure/" . $gambar)) {
    unlink("img/figure/" . $gambar);
}

header("Location: dashboard.php");
exit();
?>