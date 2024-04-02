<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h2>Symfony Shop</h2>
                <h1>Rhythm of Life, Sound Your Melody</h1>
                <p>Creative music store with a complete collection of musical instruments and audio <br> equipment, as well as an inspiring community space.</p>
                <div class="button">
                    <a href="#" class="product-home-btn">Our Product</a>
                    <a href="#" class="call-home-btn">Our Product</a>
                </div>
            </div>

            <div class="right-content">
                <div class="image-home">
                    <img src="../images/home_page5.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Second Page !-->

        <div class="product-mix-content">
            <div class="product-mix-title">
                <h2>Our Product</h2>
            </div>

            <?php
                require "functions.php";

                //menghitung total baris dalam colom
                $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM barang");
                $row = mysqli_fetch_assoc($result);
                $totalRows = $row["total"];

                if ($totalRows < 4) {
                    echo "tidak cukup data";
                }else{
                    //generate 4 id acak
                    $randomIds = [];
                    while (count($randomIds) < 4){
                        $randomId = mt_rand(1, $totalRows);
                        if (!in_array($randomId, $randomIds)){
                            $randomIds[] = $randomId;
                        }
                    }

                    $queryBarang_Acak = mysqli_query($conn, "SELECT * FROM barang WHERE id_Barang IN (" . implode(',', $randomIds) . ")");

                    while ($dataBarang_Acak = mysqli_fetch_array($queryBarang_Acak)){
            ?>
                        <div class="card">
                            <img src="images/<?=$dataBarang_Acak['foto_Barang']?>">
                            <p><?=$dataBarang_Acak['nama_Barang']?></p>
                            <p>IDR <?=number_format($dataBarang_Acak['harga_Barang'], 0, ',', '.')?></p>
                        </div>
            <?php

                    }
                }
            ?>
        </div>

    </div>
</body>
</html>