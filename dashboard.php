<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

if (isset($_GET['user']) && $_GET['user'] === $username) {
    $displayUser = $_GET['user'];
} else {
    $displayUser = $username;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - NekoNeko Figure</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a class="logo" href="">Neko<span>NEKO</span></a>
            <nav class="nav">
                <a href="#">Home</a>
                <a href="#category">Kategori</a>
                <a href="#product">Produk</a>
                <a href="#testimonials">Testimoni</a>
                <a href="#contact">Hubungi kami</a>
            </nav>
            <div class="icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <button class="btn-primary"><a href="logout.php">
               Logout
            </a></button>
        </div>
    </header>
    <section class="hero">
        <div class="hero-top">
            <div class="hero-section">
                <h1 class="hero-title">Welcome to NekoNeko Halo, <?php echo htmlspecialchars($displayUser); ?>  <span class="title-span">San</span></h1>
                <p class="hero-subtitle">Mari hiasi kamar dengan waifu dan husbu kalian</p>
                <a href="#"><button class="btn-secondary">Mari Khilaf</button></a>
            </div>
            <img class="hero-img" src="Lilith.jpg" alt="NekoNeko Figure">
        </div>

        <div class="hero-social">
            <div class="hero-social-item">
                <i class="fa-solid fa-money-bills"></i>
                <div class="hero-social-text">
                    <h3>Murah</h3>
                    <p>Harga murah mulai dari <span>100 ribuan</span> saja</p>
                </div>
            </div>
            <div class="hero-social-item">      
                <i class="fa-solid fa-people-carry-box"></i>
                <div class="hero-social-text">
                    <h3>Aman</h3>
                    <p>Pengiriman aman sampai tujuan</p>
                </div>
            </div>
            <div class="hero-social-item">             
                <i class="fa-solid fa-comments"></i>
                <div class="hero-social-text">
                    <h3>Aktif 24 jam</h3>
                    <p>Kami aktif 24 jam</p>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($_GET['user'])): ?>
        <div style="margin-top: 20px; padding: 10px; background: #f0f0f0; border-radius: 5px;">
            <strong>Query String:</strong> User yang ditampilkan via URL: <code><?php echo htmlspecialchars($_GET['user']); ?></code>
        </div>
    <?php endif; ?>
</body>
</html>