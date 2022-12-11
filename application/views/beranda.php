<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrancar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("")?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <a href="<?= base_url("C_logadmin")?>">Login Admin</a>
    </nav>
</header>
<section class="home" id="home">
    <section class="home" id="home">
        <div class="content">
            <h3>Sukses tanpa batas Hosting Indonesia yang murah dan terpercaya</h3>
            <p>Fitur yang lengkap akan mempermudah proses pembuatan website, mulai dari instalasi WordPress, cPanel, 
                dan SSL gratis. Jaminan uptime server web anda tetap online </p>
        </div>
        <img src="<?= base_url("")?>/assets/image/pana.png" class="pic1" alt="...">
    </section>
</section>
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
                kebutuhan customer.</p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary"><a href="<?= base_url("C_about")?>" class="btn">
                <b>selengkapnya</b></a></button>
            </div>
        </div>
    </div>
</section>
<section class="services" id="services">
<h1 class="heading">Layanan Web Hosting Arrancar Indonesia</h1>
<div class="box-container">
    <div class="box">
        <h3>Pelajar</h3>
        <p>Sesuai untuk peronal branding dan blog pribadi</p>
        <p class="harga">Rp. 45.000  /bulan</p>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Database
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited SSD disk space
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Bandwith
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Hingga 20.000 pelanggan/bulan
            </li>
        </ul>
    </div>
    <div class="box">
        <h3>Mahasiswa</h3>
        <p>Sesuai untuk profil organisasi, komunitas, dan perusahaan. </p>
        <p class="harga">Rp. 105.000 /bulan</p>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Database
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited SSD disk space
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Bandwith
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Hingga 100.000 pelanggan/bulan
            </li>
        </ul>
    </div>
    <div class="box">
        <h3>Bisnis</h3>
        <p>Sesuai untuk website bisnis, portal berita, dan toko online.  </p>
        <p class="harga">Rp. 120.000  /bulan</p>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Database
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited SSD disk space
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Unlimited Bandwith
            </li>
        </ul>
        <ul>
            <li class="fitur" style=list-style:none;>
                <img src="<?= base_url("")?>/assets/image/centang.svg" alt=""> Hingga 150.000 pelanggan/bulan
            </li>
        </ul>
    </div>

</div>
</section>
<section class="review" id="review">
    <h1 class="heading"> <span>Review</span> customer kami </h1>
    <div class="box-container">
        <div class="box">
            <img src="<?= base_url("")?>/assets/image/testi1.jpg" alt="">
            <h3>Doni</h3>
            <p>Pelayanan hostingnya keren Cepet terjangkau harganya</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <img src="<?= base_url("")?>/assets/image/testi2.jpg" alt="">
            <h3>Dara</h3>
            <p>Keren banget pelayanan hostingnya di Arrancar</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="box">
            <img src="<?= base_url("")?>/assets/image/testi3.jpg" alt="">
            <h3>Fitri</h3>
            <p>Desain brosur untuk perusahaan ku disukai oleh banyak orang, terimakasih atas pelayanannya</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <img src="<?= base_url("")?>/assets/image/testi4.jpg" alt="">
            <h3>Nurfidiya</h3>
            <p>Terimakasih banyak, foto yang telah kuterima sangatlah bagu, aku suka dengan desainnya</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="box">
            <img src="<?= base_url("")?>/assets/image/testi5.jpg" alt="">
            <h3>Firman</h3>
            <p>Over all aku suka dengan desain yang dibuat oleh perusahaan ini</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="box">
         <img src="<?= base_url("")?>/assets/image/testi6.jpg" alt="">
            <h3>lucas ardinata</h3>
            <p>Desain yang menarik, pelayanan yang baik, waktu pengerjaan yang cepat</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <h1 class="heading"> <span>Hubungi</span> kami </h1>
    <form action="<?= base_url('pesan/tambah_data')?>" method="POST">
        <div class="inputBox">
            <input type="text" placeholder="nama" name="nama">
            <input type="email" placeholder="email" name="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="nomor telepon"  name="nomor_telepon">
            <input type="text" placeholder="subject" name="subject">
        </div>
        <textarea  placeholder="pesan kamu" id="" cols="30" rows="10" name="pesan"></textarea>
        <input type="submit" value="kirim pesan" class="btn">
    </form>
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