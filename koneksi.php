<?php
$host = 'localhost';
$username = 'root';
$password = 'fahri123';    
$database = 'nekoneko';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>