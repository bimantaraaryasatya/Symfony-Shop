<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Navbar</title>
</head>
<body>
    <header>

        <ul class="navbar-start">
          <li><a href="index.php" class="home" id="home-nav">Home</a></li>
          <li><a href="listproduct.php" class="product" id="product-nav">Product</a></li>
        </ul>

        <div class="logo-img">
            <img src="images/Logo.png">
        </div>

        <ul class="navbar-end">
            <li><a href="aboutus.php" class="about-us" id="about-us-nav">About Us</a></li>
            <li><a href="contactus.php" class="Help" id="help-nav">Contact Us</a></li>
        </ul>
        
        <div class="profile-cart">
            <details>
                <summary><i class="fa-solid fa-user"></i></summary>
                <ul>
                    <li><a href="signin.php"><i class="fa-solid fa-right-to-bracket"></i> Sign in</a></li>
                    <li><a href="profile.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-xmark" id="icon-details-last"></i> Log Out</a></li>
                </ul>
            </details>
            <a href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>

    </header>
</body>