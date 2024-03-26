<?php
    require "functions.php";
    
    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn  ,"SELECT * FROM user_register WHERE username = '$username'");

        //cek username
        if (mysqli_num_rows($result) === 1) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                echo"   <script> 
                            alert('Berhasil Sign In')
                            window.location.href = 'index.php' 
                        </script>";
                exit;
            } else {
                echo "<script> alert ('Username atau Password Salah') </script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="signin_style.css">
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
            <h1>Sign In</h1>
        </div>
        <div class="main-content">
            <form action="" method="post"> <!-- Tambahkan form di sini -->
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">

                <button type="submit" name="login" class="sign-in-btn" style="border: 1px solid #6563ff;">
                    <a href="" class="btn">Sign In</a>
                </button> <!-- Beri nama dan type pada tombol -->
            </form>
        </div>
        <div class="to-signup">
            <p>already have an account? <a href="signup.php" class="sign-up">Sign Up</a></p>
        </div>
    </div>
</body>
</html>