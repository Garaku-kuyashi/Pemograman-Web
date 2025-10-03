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
    <title>NekoNeko Figure</title>
    <link rel="icon" type="img/jpg" href="img/icon/icon.jpg">
    <link rel="stylesheet" href="./source/style.css">
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
                <a href="#testimonials">Testinomi</a>
                <a href="#contact">Hubungi kami</a>
            </nav>
            <div class="icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <a href="logout.php"><button class="btn-primary">Log out</button></a>
        </div>
    </header>
    <section class="hero">
        <div class="hero-top">
            <div class="hero-section">
                <h1 class="hero-title">Welcome to NekoNeko Halo, <?php echo htmlspecialchars($displayUser); ?>  <span class="title-span">San</span></h1>
                <p class="hero-subtitle">Mari hiasi kamar dengan waifu dan husbu kalian</p>
                <a href=""><button class="btn-secondary">Mari Khilaf</button></a>
            </div>
            <img class="hero-img" src="./img/picture.png" alt="NekoNeko Figure">
        </div>

        <div class="hero-social">
            <div class="hero-social-item">
                <i class="fa-solid fa-money-bills"></i>
                <div class="hero-social-text">
                    <h3>Murah</h3>
                    <P>Harga murah mulai dari <span>100 ribuan </span>saja</P>
                </div>
            </div>
            <div class="hero-social-item">      
                <i class="fa-solid fa-people-carry-box"></i>
                <div class="hero-social-text">
                    <h3>Aman</h3>
                    <P>Pengiriman aman sampai tujuan</P>
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

    <section class="category-section" id="category">
        <h2 class="category-title">Bermacam-macam Kategori</h2>
        <div class="category-grid" id="categoryGrid">
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Figma</h3>
                    <p class="category-count">45 Figures</p>
                </div>
            </div>
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Nendoroid</h3>
                    <p class="category-count">52 Figures</p>
                </div>
            </div>
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Plushies</h3>
                    <p class="category-count">38 Figures</p>
                </div>
            </div>
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Standard Figures</h3>
                    <p class="category-count">67 Figures</p>
                </div>
            </div>
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Statues</h3>
                    <p class="category-count">29 Figures</p>
                </div>
            </div>
            <div class="category-card animate">
                <div class="category-info">
                    <h3 class="category-name">Scale Models</h3>
                    <p class="category-count">22 Figures</p>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product">
        <h2 class="section-title">Produk Kami</h2>
        <div class="products-grid" id="productsGrid">
            <div class="product-card animate">
                <img src="./img/figure/castorice.jpg" alt="Castorice" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Castorice</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Honkai Starail</span>
                    <p class="product-price">$89.99</p>
                    <button class="add-to-cart" data-id="1" data-name="Castorice" data-price="89.99" data-image="https://placehold.co/400x400/8a2be2/ffffff?text=Castorice" data-type="figure" data-series="Honkai Starail">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/shiroko.jpg" alt="shiroko" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Sunaokami Shiroko</h3>
                    <span class="product-type">Figma</span>
                    <span class="product-category">Blue Archive</span>
                    <p class="product-price">$94.99</p>
                    <button class="add-to-cart" data-id="2" data-name="Sunaokami Shiroko" data-price="94.99" data-image="https://placehold.co/400x400/9d4edd/ffffff?text=SunaokamiShiroko" data-type="figma" data-series="bluearchive">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/kiana.jpg" alt="kiana" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Kiana Kaslana</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Honkai Impact 3rd</span>
                    <p class="product-price">$99.99</p>
                    <button class="add-to-cart" data-id="3" data-name="Kiana Kaslana" data-price="99.99" data-image="https://placehold.co/400x400/ff6b6b/ffffff?text=HonkaiImpact3rd" data-type="figure" data-series="HonkaiImpact3rd">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/w.jpg" alt="w"class="product-image">
                <div class="product-info">
                    <h3 class="product-name">W</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Arknights</span>
                    <p class="product-price">$87.99</p>
                    <button class="add-to-cart" data-id="4" data-name="w" data-price="87.99" data-image="https://placehold.co/400x400/4ecdc4/ffffff?text=w" data-type="figure" data-series="arknights">Add to Cart</button>
                </div>
            </div>
            
            <div class="product-card animate">
                <img src="./img/figure/citlali.jpg" alt="citlali" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Citlali</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Genshin Impact</span>
                    <p class="product-price">$49.99</p>
                    <button class="add-to-cart" data-id="5" data-name="citlali" data-price="49.99" data-image="https://placehold.co/400x400/8a2be2/ffffff?text=Citlali" data-type="figure" data-series="genshinimpact">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/smart falcon.jpg" alt="smart falcon" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Smart Falcon</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Uma Musume</span>
                    <p class="product-price">$54.99</p>
                    <button class="add-to-cart" data-id="6" data-name="Smart Falcon" data-price="54.99" data-image="https://placehold.co/400x400/9d4edd/ffffff?text=Smartfalcon" data-type="figure" data-series="umamusume">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/mizuki.jpg" alt="mizuki" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Yumemizuki Mizuki</h3>
                    <span class="product-type">Figure</span>
                    <span class="product-category">Genshin Impact</span>
                    <p class="product-price">$59.99</p>
                    <button class="add-to-cart" data-id="7" data-name="mizuki" data-price="59.99" data-image="https://placehold.co/400x400/ff6b6b/ffffff?text=mizuki" data-type="figure" data-series="genshinimpact">Add to Cart</button>
                </div>
            </div>
            <div class="product-card animate">
                <img src="./img/figure/elysia.jpg" alt="elysia" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">elysia</h3>
                    <span class="product-type">Nendoroid</span>
                    <span class="product-category">Honkai Impact 3rd</span>
                    <p class="product-price">$47.99</p>
                    <button class="add-to-cart" data-id="8" data-name="elysia" data-price="47.99" data-image="https://placehold.co/400x400/4ecdc4/ffffff?text=elysia" data-type="nendoroid" data-series="HonkaiImpact3rd">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    
    <section id="testimonials" class="testimonials">
        <h2 class="section-title">Customer Reviews</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card animate">
                <p class="testimonial-text">"Murah beneran alamak, beli dah lumayan bisa bawa pulang bini"</p>
                <div class="testimonial-author">
                    <img src="https://placehold.co/100x100/f0f0f0/333333?text=SG" alt="Shira Gurd" class="author-avatar">
                    <div>
                        <h4 class="author-name">Shira Gurd</h4>
                        <p class="author-role">Shiroko Figure</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card animate">
                <p class="testimonial-text">"Puas banget belin disini, adminnya ramah, kalau gini kan jadi bisa langganan"</p>
                <div class="testimonial-author">
                    <img src="https://placehold.co/100x100/f0f0f0/333333?text=SM" alt="Sarah Miller" class="author-avatar">
                    <div>
                        <h4 class="author-name">Sarah Miller</h4>
                        <p class="author-role">Uma Musume Figure</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card animate">
                <p class="testimonial-text">"omagaaa beutiful ini kan my bini, terbaik lah"</p>
                <div class="testimonial-author">
                    <img src="https://placehold.co/100x100/f0f0f0/333333?text=GK" alt="Garaku Kuyashi" class="author-avatar">
                    <div>
                        <h4 class="author-name">Garaku Kuyashi</h4>
                        <p class="author-role">Castorice Figure</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card animate">
                <p class="testimonial-text">"Infokan my bini bang"</p>
                <div class="testimonial-author">
                    <img src="https://placehold.co/100x100/f0f0f0/333333?text=J" alt="Juned" class="author-avatar">
                    <div>
                        <h4 class="author-name">Juned</h4>
                        <p class="author-role">Arknights Figure</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="contact">
        <h1>Silahkan Hubungi Kami</h1>
        <p>Jika ada pertanyaan, silahkan hubungi kami melalui form dibawah ini</p>
        <form class="hubungi">
            <input type="text" placeholder="Masukkan Pesan">
            <button type="submit" class="btn-contact">Kirim</button>
        </form>
    </section>

    <footer class="footer">
    <div class="footer-content">
        <div class="footer-brand">
        <div class="logo-foot">NEKO<span>NEKO</span></div>
        <p class="brand-desc">Memberdayakan otaku dengan figur anime premium. Dapatkan waifu dan husbu-mu hari ini</p>
        <div class="footer-social">
        <a href="#"><i class="fa-brands fa-x"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
        </div>

        <div class="footer-links">
        <div class="link-col">
            <h4>Site Map</h4>
            <ul>
            <li><a href="#">Homepage</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="link-col">
            <h4>Legal</h4>
            <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Refund Policy</a></li>
            </ul>
        </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>Copyright © 2025 NekoNeko Figure. All Rights Reserved.</p>
    </div>
    </footer>


    <script src="./source/script.js"></script>
    
    <?php if (isset($_GET['user'])): ?>
        <div style="margin-top: 20px; padding: 10px; background: #f0f0f0; border-radius: 5px;">
            <strong>Query String:</strong> User yang ditampilkan via URL: <code><?php echo htmlspecialchars($_GET['user']); ?></code>
        </div>
        <?php endif; ?>
    </body>
</html>