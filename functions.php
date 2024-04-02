<?php
    //atur koneksi ke database
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "symfonyshop";
    $conn = mysqli_connect($serverName, $userName, $password, $database);
    // if (!$conn){
    //     die("Koneksi Error".mysqli_connect_error());
    // } else{
    //     echo"Koneksi Sukses";
    // }

    function registrasi($data){
        global $conn;
    
        $username = strtolower(stripcslashes($data["username"])); 
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2 = mysqli_real_escape_string($conn,$data["password2"]);
        
        // cek username, password dan konfirmasi sudah diisi atau belum
        if (empty($username) || empty($password) || empty($password2)) {
            echo "<script> alert('Masukan Username dan Password terlebih dahulu') </script>";
            return false;
        }

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user_register WHERE username = '$username'");

        if (!$result) {
            // Penanganan kesalahan jika kueri gagal dieksekusi
            echo "Error: " . mysqli_error($conn);
            return false;
        }

        if (mysqli_fetch_assoc($result) > 0){
            echo "<script> alert('Username sudah terdaftar') </script>";
            return false;
        }

        //cek konfirmasi password
        if ($password !== $password2){
            echo "<script> alert('Konfirmasi password tidak sesuai!') </script>";
            return false;
        }
    
        //enkripsi password
        $password_hashed = password_hash($password, PASSWORD_DEFAULT); //password_default berfungsi untuk memilih algoritma default
        
        //tambahkan user baru ke database
        mysqli_query($conn,"INSERT INTO user_register VALUE('', '$username', '$password_hashed')");
    
        return mysqli_affected_rows($conn);
    }

    function login (){
        global $conn;

        
    }
?>


