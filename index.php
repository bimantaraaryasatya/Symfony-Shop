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
                    <a href="#product-mix" class="product-home-btn" data-aos="zoom-in" data-aos-duration="1000">Our Product</a>
                    <a href="#" class="call-home-btn" data-aos="zoom-in" data-aos-duration="1000">Contact Us</a>
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
            <div class="product-mix-title">
                <h1>Our Product</h1>
            </div>
            
            <div class="list-product-home">
                <?php
                    require "functions.php";

                    $randomIds = rand(1,2);

                    //query untuk mengambil id barang secara acak
                    $queryBarang_Acak = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = $randomIds LIMIT 4");
                    
                    $delay = 0;
                    
                    //loop untuk menampilkan kartu produk
                    while ($dataBarang_Acak = mysqli_fetch_array($queryBarang_Acak)){    
                ?>
                        <div class="card" data-aos="zoom-in" data-aos-delay="<?=$delay?>">
                            <img src="images/<?=$dataBarang_Acak['foto_Barang']?>">
                            <p><?=$dataBarang_Acak['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Acak['harga_Barang'], 0, ',', '.')?></p>
                        </div>
                <?php
                    $delay += 300;
                    }
                ?>
            </div>

            <div class="button-mix-product">
                <a href="listproduct.php">See All <br> Product</a>
            </div>
        </div>

        <!-- Third Page !-->
        <div class="media-content">
            <div class="media-card">
                <img src="images/Bass-Media.png" alt="Gambar Bass">
                <h3>Peran bass dalam musik</h3>
            </div>
            <div class="media-card">
                <img src="images/Drum-Media.png" alt="Gambar Drum">
                <h3>Peran drum dalam musik</h3>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>