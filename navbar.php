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
            <li><a href="#" class="about-us" id="about-us-nav">About Us</a></li>
            <li><a href="contactus.php" class="Help" id="help-nav">Contact Us</a></li>
        </ul>
        
        <div class="profile-cart">
            <a href="signin.php"><i class="fa-solid fa-user"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
        </div>

    </header>
</body>