<?php
    require "functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="semuaproduk.css">
    <title>All Product</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div class="all-product">
        <div class="title">
            <?php
                $id_Kategori = $_GET['id-kategori'];
                $queryProduk = mysqli_query($conn, "SELECT * FROM barang WHERE `id-Kategori` = $id_Kategori");
                $queryKategori = mysqli_query($conn, "SELECT * FROM  kategori WHERE `id-Kategori` = $id_Kategori");
                $dataKategori = mysqli_fetch_array($queryKategori);
            ?>
            <h1><?= $dataKategori['nama_Kategori']?></h1>
        </div>
        <div class="container">
            <?php
                while($dataProduk = mysqli_fetch_array($queryProduk)){
            ?>
                    <div class="card">
                        <img src="images/<?=$dataProduk['foto_Barang']?>" alt="">
                        <p><?= $dataProduk['nama_Barang']?></p>
                        <p>IDR <?=number_format($dataProduk['harga_Barang'], 0, ',', '.')?></p>
                        <a href="detailproduct.php?id=<?=$dataProduk['id_Barang']?>"></a>
                    </div>
            <?php 
                }
            ?>
        </div>
    </div>
</body>
</html>