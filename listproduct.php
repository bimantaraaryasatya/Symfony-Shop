<?php
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: signin.php");
        exit;
    }

    require "functions.php";
?>

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
            <li><a href="aboutus.php" class="about-us" id="about-us-nav">About Us</a></li>
            <li><a href="contactus.php" class="Help" id="help-nav">Contact Us</a></li>
        </ul>
        
        <div class="profile-cart">
            <a href="signin.php"><i class="fa-solid fa-user"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </header>
    
    <div class="main-content">
        <div class="title">
            <h1>Our Product</h1>
        </div>

        <div class="list-product" >
            <div class="sub-title">
                <h3>Electric Guitar</h3>
            </div>
            <div class="product-card-list">
                <?php

                    //pasang-pasang variabel
                    $queryBarang = mysqli_query($conn, "select * from barang");
                    $queryBarang_Gitar = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '1' ");
                    $queryBarang_Bass = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '2' ");
                    $queryBarang_Drum = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '3' ");
                    $queryBarang_Keyboard = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '4' ");
                    $queryBarang_Microphone = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = '5' ");

                    //mulai perulangan
                    $counter = 0;
                    while ($dataBarang_Gitar = mysqli_fetch_array($queryBarang_Gitar)){
                        if ($counter >= 4){
                            break;
                        }
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Gitar['foto_Barang']?>">
                            <p><?=$dataBarang_Gitar['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Gitar['harga_Barang'], 0, ',', '.')?></p>
                            <a href="detailproduct.php?id_Barang=<?=$dataBarang_Gitar['id_Barang']?>&id-kategori=<?=$dataBarang_Gitar['id-Kategori']?>"></a>
                        </div>
                <?php
                    $counter++;
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="semuaproduk.php?id-kategori=1">See All <br> Products</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Bass Guitar</h3>
            </div>
            <div class="product-card-list">
                <?php
                    $counter = 0;
                    while ($dataBarang_Bass = mysqli_fetch_array($queryBarang_Bass)){
                        if ($counter >= 4){
                            break;
                        }
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Bass['foto_Barang']?>">
                            <p><?=$dataBarang_Bass['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Bass['harga_Barang'], 0, ',', '.')?></p>
                            <a href="detailproduct.php?id_Barang=<?=$dataBarang_Bass['id_Barang']?>&id-kategori=<?=$dataBarang_Bass['id-Kategori']?>"></a>
                        </div>
                <?php
                    $counter++;   
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="semuaproduk.php?id-kategori=2">See All <br> Products</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Drum</h3>
            </div>
            <div class="product-card-list">
                <?php
                    $counter = 0;
                    while ($dataBarang_Drum = mysqli_fetch_array($queryBarang_Drum)){
                        if ($counter >= 4){
                            break;
                        }
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Drum['foto_Barang']?>">
                            <p style="margin-top: 37px;"><?=$dataBarang_Drum['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Drum['harga_Barang'], 0, ',', '.')?></p>
                            <a href="detailproduct.php?id_Barang=<?=$dataBarang_Drum['id_Barang']?>&id-kategori=<?=$dataBarang_Drum['id-Kategori']?>"></a>
                        </div>
                <?php
                    $counter++;
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="semuaproduk.php?id-kategori=3">See All <br> Products</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Piano & Keyboard</h3>
            </div>
            <div class="product-card-list">
                <?php
                    $counter = 0;
                    while ($dataBarang_Keyboard = mysqli_fetch_array($queryBarang_Keyboard)){
                        if ($counter >= 4){
                            break;
                        }
                ?>
                        <div class="card">
                            <img style="margin-top: 130px;"src="images/<?=$dataBarang_Keyboard['foto_Barang']?>">
                            <p><?=$dataBarang_Keyboard['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Keyboard['harga_Barang'], 0, ',', '.')?></p>
                            <a href="detailproduct.php?id_Barang=<?=$dataBarang_Keyboard['id_Barang']?>&id-kategori=<?=$dataBarang_Keyboard['id-Kategori']?>"></a>
                        </div>
                <?php
                    $counter++;
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="semuaproduk.php?id-kategori=4">See All <br> Products</a>
                </div> 
            </div>
        </div>

        <div class="list-product">
            <div class="sub-title">
                <h3>Microphone</h3>
            </div>
            <div class="product-card-list">
                <?php
                    $counter = 0;
                    while ($dataBarang_Microphone = mysqli_fetch_array($queryBarang_Microphone)){
                        if ($counter >= 4){
                            break;
                        }
                ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Microphone['foto_Barang']?>">
                            <p><?=$dataBarang_Microphone['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Microphone['harga_Barang'], 0, ',', '.')?></p>
                            <a href="detailproduct.php?id_Barang=<?=$dataBarang_Microphone['id_Barang']?>&id-kategori=<?=$dataBarang_Microphone['id-Kategori']?>"></a>
                        </div>
                <?php
                    $counter++;
                    }
                ?>
            </div>
            <div class="button">
                <div class="product-btn">
                    <a href="semuaproduk.php?id-kategori=5">See All <br> Products</a>
                </div> 
            </div>
        </div>
    </div>
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>