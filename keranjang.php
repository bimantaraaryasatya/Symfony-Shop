<?php
    session_start();
    require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="keranjang.css">
    <title>Shopping Cart</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div class="cart-page">
        <div class="main-content">
            <div class="title">
                <h4>Shopping Cart</h4>
                <p>Here you can see the items you want to check out</p>
            </div>

            <div class="cart-content">
                <div class="cart-title">
                    <h4>Cart</h4>
                </div>
                <?php
                    $subtotal = 0;
                    $jumlahBarang = 0;
                    $shipping = 0;
                    $tax = 0;
                    $total = 0;
                    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){ ?>
                        <?php foreach (@$_SESSION['cart'] as $key => $product) {?>
                            <section class="cart-main">
                                <div class="cart-product-image">
                                    <img src="images/<?=$product['foto_Barang']?>" alt="">
                                </div>

                                <div class="cart-product-summary">
                                    <div class="cart-name-price-product">
                                        <p><?= $product['nama_Barang']?></p>
                                        <p>IDR <?=number_format($product['harga_Barang'], 0, ',', '.') ?></p>
                                    </div>

                                    <div class="cart-category">
                                        <?php
                                            $query_Kategori_Cart = mysqli_query($conn, "SELECT * FROM kategori WHERE `id-Kategori` = '".$product['id_Kategori']."'");
                                            $data_Kategori_Cart = mysqli_fetch_array($query_Kategori_Cart);
                                        ?>
                                        <p><?= $data_Kategori_Cart['nama_Kategori']?></p>
                                        <p><?= $product['brand_Barang']?></p>
                                        <p><?= $product['status_Barang']?></p>
                                    </div>

                                    <div class="cart-shipping">
                                        <p>Shipping</p>
                                        <p>Arrive Tue, Jul 20 - Thu, Jul 22</p>
                                    </div>

                                    <div class="cart-pickup">
                                        <p>Pickup</p>
                                        <a href="">Find a Store</a>
                                    </div>

                                    <div class="cart-remove-product">
                                        <a href="delete_cart.php?id=<?=$key?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </div>
                            </section>
                            <?php
                                $subtotal += $product['harga_Barang'];
                                $jumlahBarang ++;
                            ?>
                        <?php }?>
                <?php
                    } else{
                        echo "Keranjang Kosong";
                    }
                ?>

            </div>
        </div>

        <div class="summary-content">
            <div class="summary-title">
                <h4>Summary</h4>
            </div>

            <div class="summary-price">
                <div class="subtotal">
                    <p>Subtotal: </p>
                    <p>IDR <?= number_format($subtotal, 0, ',', '.') ?></p>
                </div>
                <div class="shipping-costs">
                    <?php 
                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                            $shipping = 10000;
                        } else{
                            $shipping = 0;
                        }
                    ?>
                    <p>Estimated Shipping</p>
                    <p>IDR <?= number_format($shipping * $jumlahBarang, 0, ',', '.')?></p>
                </div>
                <div class="tax">
                    <p>Estimated Tax</p>
                    <p>IDR <?= number_format($subtotal * 0.0001, 0, ',', '.')?></p>
                </div>
            </div>

            <div class="summary-total">
                <p>Total</p>
                <p>IDR <?= number_format($total = $subtotal + $shipping + $tax, 0, ',', '.') ?></p>
            </div>

            <div class="button-checkout">
                <a href="">Checkout</a>
            </div>

        </div>
    </div>

    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
</body>
</html>