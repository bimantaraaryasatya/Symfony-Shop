<?php
session_start();
include "functions.php";

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $key => $product){
        // pengurangan stok
        $query_update_stok = mysqli_query($conn, "UPDATE barang SET stok_Barang = stok_Barang - 1 WHERE id_Barang = '".$product['id_Barang']."'");

        if($query_update_stok){
            if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
                // Ambil username dari sesi jika ada
                $id_user = isset($_SESSION["id_user"]) ? $_SESSION["id_user"] : "";
            } else {
                // Jika tidak ada sesi login atau belum login, alihkan pengguna kembali ke halaman login
                header("Location: signin.php");
                exit;
            }
            $id_Barang = $product['id_Barang'];
            $tanggal_pembelian = date('Y-m-d');
            $query_insert_pembelian = mysqli_query($conn, "INSERT INTO pembelian (tgl_Pembelian, id_user, id_Barang) VALUES ('$tanggal_pembelian', $id_user, $id_Barang)");
            
            unset($_SESSION['cart'][$key]);
        }
    }
}else{
    echo "  <script>
            alert('Keranjang Kosong')
            window.location.href = 'keranjang.php'
            </script>";
}

echo "  <script>
            alert('Pesanan anda berhasil diperoses')
            window.location.href = 'keranjang.php'
        </script>"
?>