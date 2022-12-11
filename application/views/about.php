<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrancar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("")?>assets/css/style.css">
</head>
<body>
<header class="header">
    <a href="<?= base_url("welcome")?>" class="logo">Arrancar</a>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
</header>
<section class="about" id="about">
    <h1 class="heading"> <span>Tentang</span> Kami </h1>
    <div class="row">
        <div class="image">
            <img src="<?= base_url("")?>/assets/image/home.png" alt="">
        </div>
        <div class="content">
            <h3>Kenapa memilih kami</h3>
            <p>Berdiri sejak 2021, Arrancar menjamin kualitas up time server 99.5%, dukungan customer service 24 jam, 
                dan memberikan harga termurah dan terpercaya. Kami juga berkomitmen untuk senantiasa memenuhi berbagai
                kebutuhan customer. Tempat hosting tercepat dan terjangkau harganya, menjadi prioritas kelebihan jasa 
                kami untuk membantu dalam wesbite kalian. telah dipercaya lebih dari 5000 klien yang terdaftar di seluruh 
                indonesia. Arrancar selalu berkomitmen menyajikan teknologi tebaik untuk kesuksesan online kalian. 
                Bergabunglah dan temukan kemudahan menciptakan website imipian Anda bersama Arrancar.</p>
        </div>
    </div>
</section>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Sitemap</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> Tentang kami </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> pelayanan </a>
            <a href="#reveiew"> <i class="fas fa-chevron-right"></i> review customer kami </a>
            <a href="#contact"> <i class="fas fa-chevron-right"></i> hubungi kami </a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 021-8985-458 </a>
            <a href="#"> <i class="fas fa-phone"></i> 021-8985-458 </a>
            <a href="#"> <i class="fas fa-envelope"></i> Arrancar@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Arrancar@outlook.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia - 12810 </a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://id-id.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://id.linkedin.com/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="<?= base_url("C_about")?>" > <i class="fas fa-chevron-right"></i> about our company </a>
        </div>
    </div>
    <div class="credit"> &copy; copyright @ 2021 by <span>Arrancar</span> </div>
</section>
<script src="<?= base_url("")?>/assets/js/script.js"></script>
</body>
</html>