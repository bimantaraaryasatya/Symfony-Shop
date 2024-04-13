<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="homepage_style.css">
    <title>Home</title>
</head>
<body>
    <?php
        include"navbar.php";
    ?>
    
    <div class= "main-content">
        <!-- First Page !-->

        <div class="home-content">
            <div class="left-content">
                <h2 data-aos="fade-right">Symfony Shop</h2>
                <h1 data-aos="fade-right" data-aos-delay="500">Rhythm of Life, Sound Your Melody</h1>
                <p data-aos="fade-right" data-aos-delay="800">Creative music store with a complete collection of musical instruments and audio <br> equipment, as well as an inspiring community space.</p>
                <div class="button">
                    <li data-aos="zoom-in" data-aos-duration="1000">
                        <a href="#product-mix" class="product-home-btn">Our Product</a>
                    </li>
                    <li data-aos="zoom-in" data-aos-duration="1000">
                        <a href="contactus.php" class="call-home-btn">Contact Us</a>
                    </li>
                </div>
            </div>

            <div class="right-content">
                <div class="image-home">
                    <img src="../images/home_page.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000">
                </div>
            </div>
        </div>

        <!-- Second Page !-->

        <div class="product-mix-content" id="product-mix">
            <div class="product-mix-title" data-aos="zoom-in" data-aos-once="true">
                <h1>Our Product</h1>
            </div>
            
            <div class="list-product-home">
                <?php
                    require "functions.php";

                    $randomIds = rand(1,2);

                    //query untuk mengambil id barang secara acak
                    $queryBarang_Acak = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = $randomIds LIMIT 4");
                    
                    $delay = 100;
                    
                    //loop untuk menampilkan kartu produk
                    while ($dataBarang_Acak = mysqli_fetch_array($queryBarang_Acak)){    
                ?>
                        <div class="card" data-aos="zoom-in" data-aos-delay="<?=$delay?>" data-aos-once="true"> 
                            <img src="images/<?=$dataBarang_Acak['foto_Barang']?>">
                            <p><?=$dataBarang_Acak['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Acak['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    $delay += 300;
                    }
                ?>
            </div>

            <div class="button-mix-product" data-aos="fade-up" data-aos-once="true">
                <a href="listproduct.php">See All <br> Product</a>
            </div>
        </div>

        <!-- Third Page !-->
        <div class="media-content">
            <div class="subtitle-media" data-aos="zoom-in" data-aos-once="true">
                <h1>Our Media</h1>
            </div>
            
            <div class="container-card">
                <div class="media-card" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <img src="images/Bass-Media.png" alt="Gambar Bass">
                    <div class="bass-text">Peran bass dalam musik</div>
                </div>
                <div class="media-card" data-aos="fade-left" data-aos-delay="300" data-aos-once="true">
                    <img src="images/Drum-Media.png" alt="Gambar Drum">
                    <div class="drum-text">Peran drum dalam musik</div>
                </div>
            </div>
        </div>

        <!-- Fourth Page !-->

        <div class="product-bestseller-guitar">
            <div class="bestseller-title">
                <h1>Guitar Bestsellers</h1>
            </div>

            <div class="list-product-bestseller">
                 <?php
                    
                    $delay = 100;
                    $counter = 0;
                    $queryBarang_Gitar = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '1' ");
                    while ($dataBarang_Gitar = mysqli_fetch_array($queryBarang_Gitar)){
                        if ($counter >= 4) {
                            break;
                        }
                 ?>
                        <div class="card" data-aos="zoom-in" data-aos-delay="<?=$delay?>" data-aos-once="true">
                            <img src="images/<?=$dataBarang_Gitar['foto_Barang']?>">
                            <p><?=$dataBarang_Gitar['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Gitar['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                 <?php
                    $delay += 300;
                    $counter++;
                    }
                 ?>
            </div>

            <div class="button-bestseller" data-aos="fade-up" data-aos-once="true">
                <a href="">See All <br> Product</a>
            </div>
        </div>

        <!-- Fifth Page !-->

        <div class="product-bestseller-bass">
            <div class="bestseller-title" data-aos="zoom-in" data-aos-once="true">
                <h1>Bass Bestsellers</h1>
            </div>

            <div class="list-product-bestseller">
                <?php
                    
                    $delay = 100;
                    $counter = 0;
                    $queryBarang_Bass = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '2' ");
                    while ($dataBarang_Bass = mysqli_fetch_array($queryBarang_Bass)){
                        if ($counter >= 4) {
                            break;
                        }
                 ?>
                        <div class="card" data-aos="zoom-in" data-aos-delay="<?=$delay?>" data-aos-once="true">
                            <img src="images/<?=$dataBarang_Bass['foto_Barang']?>">
                            <p><?=$dataBarang_Bass['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Bass['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                 <?php
                    $delay += 300;
                    $counter++;
                    }
                 ?>
            </div>

            <div class="button-bestseller" data-aos="fade-up" data-aos-once="true">
                <a href="">See All <br> Product</a>
            </div>
        </div>

    </div>

    <?php
        include "footer.php";
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>