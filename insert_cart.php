<?php
    session_start();
    if($_POST){
        include "functions.php";

        $query_get_produk = mysqli_query($conn, "SELECT * FROM barang WHERE id_Barang  = '".$_POST['id_Barang']."'");
        $data_barang_keranjang = mysqli_fetch_array($query_get_produk);

        $_SESSION['cart'][]=array(
            'id_Barang' => $data_barang_keranjang['id_Barang'],
            'foto_Barang' => $data_barang_keranjang['foto_Barang'],
            'nama_Barang' => $data_barang_keranjang['nama_Barang'],
            'harga_Barang' => $data_barang_keranjang['harga_Barang'],
            'id_Kategori' => $data_barang_keranjang['id-Kategori'],
            'brand_Barang' => $data_barang_keranjang['brand_Barang'],
            'status_Barang' => $data_barang_keranjang['status_Barang']
        );
    }

    echo "  <script>
                alert('Barang Berhasil Ditambahkan')
                window.location.href = 'keranjang.php'
            </script>";
?>