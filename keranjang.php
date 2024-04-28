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
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </section>
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
                    <p>IDR 15.300.000</p>
                </div>
                <div class="shipping-costs">
                    <p>Estimated Shipping</p>
                    <p>IDR 50.000</p>
                </div>
                <div class="tax">
                    <p>Estimated Tax</p>
                    <p>IDR 5.000</p>
                </div>
            </div>

            <div class="summary-total">
                <p>Total</p>
                <p>IDR 30.000.000</p>
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