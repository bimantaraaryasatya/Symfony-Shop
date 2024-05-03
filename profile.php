<?php 
session_start();
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>
<body>
    <header><?php include "navbar.php" ?></header>

    <div class="user-profile-page">

        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="header-content">
                    <h1>Symfony <br> User Profile</h1>
                </div>

                <div class="sidebar-nav">
                    <ul>
                        <li><a href="#Profile">Profile</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="">My Order</a></li>
                        <li><a href="">Setting</a></li>
                    </ul>
                </div>

                <div class="logout-nav">
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </aside>

        <section class="main-content">
            <div class="main-content-v2">
                <?php
                // Periksa apakah pengguna sudah login
                if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
                    // Ambil username dari sesi jika ada
                    $id_user = isset($_SESSION["id_user"]) ? $_SESSION["id_user"] : "";
                } else {
                    // Jika tidak ada sesi login atau belum login, alihkan pengguna kembali ke halaman login
                    header("Location: signin.php");
                    exit;
                }

                $query_userprofile = mysqli_query($conn, "SELECT * FROM user_register WHERE id_user = $id_user ");
                $data_userprofile = mysqli_fetch_array($query_userprofile);
                ?>

                <div class="user-profile-content-container" id="Profile">
                    <div class="user-profile-content-title">
                        <h1>Yours Data Profile</h1>
                    </div>
                    <div class="user-profile-content">
                        <p>Username: <?= $data_userprofile['username']?></p>
                        <p style="display:flex;">Email: 
                            <?php if (isset($data_userprofile['email_user']) && !empty($data_userprofile['email_user'])) {
                                echo $data_userprofile['email_user'];
                            } else { ?>
                                <a href=""> <span style="margin-left: 5px;">verify your data</span></a>
                            <?php } ?>
                        </p>
                        <p>ID User: <?= $data_userprofile['id_user']?></p>
                    </div>
                </div>

                <div class="user-profile-address-telp">
                    <div class="user-profile-address">
                        <div class="user-profile-address-title">
                            <h1>Your Address</h1>
                        </div>
    
                        <div class="user-profile-address-content">
                            <?php
                            if (isset($data_userprofile['alamat_user']) && !empty($data_userprofile['alamat_user'])) {
                                echo $data_userprofile['alamat_user'];
                            }else{ ?>
                                <a href="">verify your data</a>
                            <?php
                            } 
                            ?>
                        </div>
                    </div>
                    
                    <div class="user-profile-telp">
                        <div class="user-profile-address-title">
                            <h1>Your Telephone</h1>
                        </div>
    
                        <div class="user-profile-telp-content">
                            <?php
                            if (isset($data_userprofile['telp_user']) && !empty($data_userprofile['telp_user'])) {
                                echo $data_userprofile['telp_user'];
                            }else{ ?>
                                <a href="">verify your data</a>
                            <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>

                <div class="user-profile-history">
                    <div class="user-profile-history-title">
                        <h1>Purchase history</h1>
                    </div>

                    <div class="user-profile-history-table">
                        <table>
                    <?php 
                        $query_history_pembelian = "SELECT p.nama_Barang, p.harga_Barang, k.nama_Kategori, p.brand_Barang, b.tgl_pembelian
                        FROM pembelian b
                        INNER JOIN barang p ON b.id_Barang = p.id_Barang
                        INNER JOIN kategori k ON p.`id-Kategori` = k.`id-Kategori`
                        WHERE b.id_user = $id_user";

                        $result_pembelian = mysqli_query($conn, $query_history_pembelian);

                        if (!$result_pembelian) {
                            die("Query error: " . mysqli_error($conn));
                        }

                        if (mysqli_num_rows($result_pembelian) > 0) { ?>
                            <tr style="text-align:center;">
                                <th width="450px">Product Name</th>
                                <th width="200px">Product Price</th>
                                <th width="150px">Category</th>
                                <th width="150px">Brand</th>
                                <th width="300px">Purchase date</th>
                            </tr>
                    <?php        
                        }
                        $counter = 0;
                        while ($row_pembelian = mysqli_fetch_assoc($result_pembelian)) { 
                            if ($counter >= 8) {
                                break;
                            }?>
                            <tr style="text-align:center;">
                                <td><?= $row_pembelian['nama_Barang']?></td>
                                <td>IDR <?= number_format($row_pembelian['harga_Barang'], 0, ',', '.')?></td>
                                <td><?= $row_pembelian['nama_Kategori']?></td>
                                <td><?= $row_pembelian['brand_Barang']?></td>
                                <td><?= date('d-m-Y', strtotime($row_pembelian['tgl_pembelian'])) ?></td>
                            </tr>
                    <?php
                        $counter++;
                        }
                    ?>  
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>