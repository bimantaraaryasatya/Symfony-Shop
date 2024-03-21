<?php
    require "functions.php";
    if (isset($_POST["register"])){
        if(registrasi($_POST) > 0){
            header("location: signin.php");
            echo "<script> alert('user baru berhasil ditambahkan! ') </script>";
        } else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="signup_style.css">
    <style>
        label {
            display: block;
            font-weight: bold;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="sign-up-container">
        <div class="title">
            <h1>Sign Up</h1>
        </div>
        <div class="main-content">
            <form action="" method="post"> <!-- Tambahkan form di sini -->
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">

                <label for="password">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            
                <button type="submit" name="register" class="sign-up-btn" style="border: 1px solid #6563ff;">
                    <a href="" class="btn">Sign Up</a>
                </button> <!-- Beri nama dan type pada tombol -->
            </form>
        </div>
        <div class="to-signin">
            <p>already have an account? <a href="signin.php" class="sign-in">Sign In</a></p>
        </div>
    </div>
</body>
</html>
