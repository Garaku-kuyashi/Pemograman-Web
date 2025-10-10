<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$tipe_produk = $_POST['tipe_produk'];
$kategori_produk = $_POST['kategori_produk'];
$harga_produk = $_POST['harga_produk'];

$result = $conn->query("SELECT gambar_produk FROM produk WHERE id_produk = $id");
$old_row = $result->fetch_assoc();
$old_image = $old_row['gambar_produk'];

$new_image = $_FILES['gambar_produk']['name'];
$temp_file = $_FILES['gambar_produk']['tmp_name'];

if (!empty($new_image)) {
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $ext = strtolower(pathinfo($new_image, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        die("Hanya file JPG, JPEG, PNG, GIF yang diperbolehkan.");
    }

    $upload_dir = "img/figure/";
    $target_file = $upload_dir . basename($new_image);

    if (move_uploaded_file($temp_file, $target_file)) {
        if ($old_image !== 'default.jpg' && file_exists("img/figure/" . $old_image)) {
            unlink("img/figure/" . $old_image);
        }
        $gambar_produk = $new_image;
    } else {
        die("upload gagal");
    }
} else {    
    $gambar_produk = $old_image;
}

$stmt = $conn->prepare("UPDATE produk SET nama_produk=?, tipe_produk=?, kategori_produk=?, harga_produk=?, gambar_produk=? WHERE id_produk=?");
$stmt->bind_param("sssssi", $nama_produk, $tipe_produk, $kategori_produk, $harga_produk, $gambar_produk, $id);
$stmt->execute();

header("Location: dashboard.php");
exit();
?>