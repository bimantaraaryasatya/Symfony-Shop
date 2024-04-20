<?php
    require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detailproduct.css"> 
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Detail Product</title>
</head>
<body>
    <?php
        
        include "navbar.php";

        if(isset($_GET['id_Barang'])) {
            $id_Produk_Detail = $_GET['id_Barang'];
        } else {
            echo "ID produk tidak disediakan.";
        } 

        $id_Kategori_Detail = $_GET['id-kategori'];

        $queryDetail_Product = mysqli_query($conn, "SELECT * FROM barang WHERE `id_Barang` = $id_Produk_Detail");
        $queryDetail_Kategori = mysqli_query($conn, "SELECT * FROM kategori WHERE `id-Kategori` = $id_Kategori_Detail");

        $dataDetail_Product = mysqli_fetch_array($queryDetail_Product);
        $dataDetail_Kategori = mysqli_fetch_array($queryDetail_Kategori);
    ?>

    <div class="detail-product">
        <div class="left-content">
            <div class="detail-product-image">
                <img src="images/<?= $dataDetail_Product['foto_Barang']?>" alt="">
            </div>
        </div>

        <div class="right-content">
            <div class="detail-product-title">
                <h4><?= $dataDetail_Product['nama_Barang']?></h4>
            </div>

            <div class="detail-product-status">
                <p>IDR <?=number_format($dataDetail_Product['harga_Barang'], 0, ',', '.')?></p>
                <p><strong>Stok: </strong><span><?php if($dataDetail_Product['stok_Barang'] > 10){ ?>
                    Tersedia
                <?php } elseif($dataDetail_Product['stok_Barang'] <= 10 AND $dataDetail_Product['stok_Barang'] >= 1){?>
                    <span class="stock">Tersisa <?= $dataDetail_Product['stok_Barang']?></span>
                <?php } else{?>
                    <span class="stock">Habis!</span>
                <?php }?></span></p>
            </div>

            <div class="detail-product-button">
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>

            <div class="detail-product-kategori">
                <p><strong>Kategori: </strong><a href="semuaproduk.php?id-kategori=<?= $dataDetail_Product['id-Kategori']?>"><?= $dataDetail_Kategori['nama_Kategori']?></a></p>
                <p><strong>Brand: </strong><?= $dataDetail_Product['brand_Barang']?></p>
                <p><strong>Status: </strong><?= $dataDetail_Product['status_Barang']?></p>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>