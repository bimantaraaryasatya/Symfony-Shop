<?php 
session_start();
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
        <section class="main-content">
            <?php
            // Periksa apakah pengguna sudah login
            if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
                // Ambil username dari sesi jika ada
                $username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
            } else {
                // Jika tidak ada sesi login atau belum login, alihkan pengguna kembali ke halaman login
                header("Location: signin.php");
                exit;
            }
            ?>

            <div class="user-profile-content">
                <h1><?= $username?></h1>
                
            </div>
        </section>

        <aside class="container">
            <div class="sidebar-content">
                <div class="header-content">
                    <h1>Bimantara</h1>
                    <p>bimantaraaryasatya@gmail.com</p>
                </div>

                <div class="sidebar-nav">
                    <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="">My Order</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</body>
</html>