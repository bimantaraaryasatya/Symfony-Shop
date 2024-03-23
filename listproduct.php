<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listproduct_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Product</title>
</head>
<body>
    <header>

        <ul class="navbar-start">
          <li><a href="index.php" class="home" id="home-nav">Home</a></li>
          <li><a href="listproduct.php" class="product" id="product-nav">Product</a></li>
        </ul>

        <div class="logo-img">
            <img src="images/Logo.png">
        </div>

        <ul class="navbar-end">
            <li><a href="#" class="about-us" id="about-us-nav">About Us</a></li>
            <li><a href="#" class="Help" id="help-nav">Help</a></li>
        </ul>
        
        <div class="profile-cart">
            <a href="signin.php"><i class="fa-solid fa-user"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </header>
    
    <div class="main-content">
        <div class="title">
            <h1>Produk Kami</h1>
        </div>

        <div class="list-product" >
            <div class="sub-title">
                <h3>Gitar Elektrik</h3>
            </div>
            <div class="product-card-list">
                <?php
                    include("functions.php");

                    //pasang-pasang variabel
                    $queryBarang = mysqli_query($conn, "select * from barang");
                    $queryBarang_Gitar = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '1' ");
                    $queryBarang_Bass = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '2' ");
                    $queryBarang_Drum = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '3' ");
                    $queryBarang_Keyboard = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '4' ");
                    $queryBarang_Microphone = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '5' ");
                    while ($dataBarang_Gitar = mysqli_fetch_array($queryBarang_Gitar)){
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Gitar['foto_Barang']?>">
                            <p><?=$dataBarang_Gitar['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Gitar['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="#">Lihat Semua <br> Produk</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Bass Gitar</h3>
            </div>
            <div class="product-card-list">
                <?php
                    while ($dataBarang_Bass = mysqli_fetch_array($queryBarang_Bass)){
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Bass['foto_Barang']?>">
                            <p><?=$dataBarang_Bass['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Bass['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php   
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="#">Lihat Semua <br> Produk</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Drum</h3>
            </div>
            <div class="product-card-list">
                <?php
                    while ($dataBarang_Drum = mysqli_fetch_array($queryBarang_Drum)){
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Drum['foto_Barang']?>">
                            <p style="margin-top: 37px;"><?=$dataBarang_Drum['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Drum['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="#">Lihat Semua <br> Produk</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Keyboard</h3>
            </div>
            <div class="product-card-list">
                <?php
                    while ($dataBarang_Keyboard = mysqli_fetch_array($queryBarang_Keyboard)){
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Keyboard['foto_Barang']?>">
                            <p><?=$dataBarang_Keyboard['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Keyboard['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="#">Lihat Semua <br> Produk</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Microphone</h3>
            </div>
            <div class="product-card-list">
                <?php
                    while ($dataBarang_Microphone = mysqli_fetch_array($queryBarang_Microphone)){
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Microphone['foto_Barang']?>">
                            <p><?=$dataBarang_Microphone['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Microphone['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="#">Lihat Semua <br> Produk</a>
                </div> 
            </div>
        </div>
    </div>
    </div>

    <section id="contact">
        <div class="footer">
          <div class="main">
            <div class="list">
              <h4>Produk Kami</h4>
              <ul>
                <li><a href="#">Gitar Elektrik</a></li>
                <li><a href="#">Bass Gitar</a></li>
                <li><a href="#">Drum</a></li>
                <li><a href="#">Keyboard</a></li>
                <li><a href="#">Microphone</a></li>
              </ul>
            </div>
    
            <div class="list">
              <h4>Tentang Kami</h4>
              <ul>
                <li><a href="#">Tentang Symfony Shop</a></li>
                <li><a href="#">Lokasi di Google Maps</a></li>
              </ul>
            </div> 
    
            <div class="list">
              <h4>Hubungi Kami</h4>
              <ul>
                <li><a href="#">Jl. Raya Sawojajar</a></li>
                <li><a href="#">Kota Malang</a></li>
                <li><a href="#">+62 813-3096-2030</a></li>
                <li><a href="#">+62 821-1606-2233</a></li>
                <li><a href="#">symfonyshop@gmail.com</a></li>
              </ul>
            </div>
    
            <div class="list">
              <h4>Sosial Media</h4>
              <div class="social">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
            
          </div>
        </div>
    
        <div class="end-text">
          <p>Copyright © 2024 Symfony Shop. Hak & Cipta Terlindungi</p>
        </div>
        
    </section>
</body>
</html>