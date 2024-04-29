<?php
session_start();
include "functions.php";

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $key => $product){
        // pengurangan stok
        $query_update_stok = mysqli_query($conn, "UPDATE barang SET stok_Barang = stok_Barang - 1 WHERE id_Barang = '".$product['id_Barang']."'");

        if($query_update_stok){
            unset($_SESSION['cart'][$key]);
        }
    }
}

echo "  <script>
            alert('Pesanan anda berhasil diperoses')
            window.location.href = 'keranjang.php'
        </script>"
?>