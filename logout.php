<?php
    session_start();
    session_destroy();

    // cek apakah sudah login atau belum
    if(!isset($_SESSION["login"])){
        echo "  <script> 
                    alert('Login Terlebih Dahulu')
                    window.location.href = 'signin.php'
                </script>";
    }else{
        echo "  <script>
                    alert('Log out Berhasil');
                    window.location.href = 'index.php';
                </script>";
    }
?>