<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutus.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>About Us</title>
</head>
<body>
    <?php 
        include "navbar.php";
    ?>

    <div class="background">
        <div class="background-content">
            <div class="title" data-aos="zoom-in" data-aos-duration=1000 data-aos-once="true">
                <h1>About Us</h1>
                <p>We are a passionate team with high dedication. Discover our <br> values, vision, and build relationships with us.</p>
            </div>

            <div class="image">
                <img src="images/music_store.jpg" alt="music store">
            </div>
        </div>
    </div>

    <div class="about-symfony">
        <div class="left-content">
            <h1>About Symfony Shop</h1>
            <p>Welcome to Symfony Shop! We offer a curated selection of musical instruments and audio equipment to inspire musicians of all levels. Our community space is a hub for collaboration, learning, and creativity. Join us for workshops and events to connect with fellow musicians and explore new horizons. Whether you're a pro or just starting, we're here to support and inspire you!</p>
            <div class="button">
                <a href="contactus.php" class="contactus-btn">Contact Us</a>
                <a href="#ourstore" class="ourstore-btn">Our Store</a>
            </div>
        </div>

        <div class="right-content">
            <div class="image-logo">
                <img src="images/symfony_shop_aboutus.jpg" alt="">
            </div>
            <div class="image-logo2">
                <img src="images/about_us_img1.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="ourstore" id="ourstore">
        <div class="title-ourstore">
            <h1>Our Store Location on Google Maps</h1>
        </div>
        <div class="googlemaps-store">
            <div class="googlemaps-container">
                <div class="googlemaps-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5587.826700604127!2d112.65697075874496!3d-7.979288042243576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285d1f051a77%3A0xd137e941d65978a!2sJl.%20Danau%20Ranau%2C%20Sawojajar%2C%20Kec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065139!5e0!3m2!1sid!2sid!4v1713186986370!5m2!1sid!2sid" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="summary-googlemaps">
                    <div class="location-global">
                        <div class="name-office-global">
                            <h3>Symfony Global Office</h3>
                        </div>
                        <div class="address-office-global">
                            <p>Jl. Danau Ranau</p> 
                            <p>Sawojajar, Malang</p>
                            <p>Indonesia</p>
                        </div>
                    </div>

                    <div class="contact-global">
                        <div class="title-contact-global">
                            <h3>Phone / Email</h3>
                        </div>
                        <div class="phone-contact-global">
                            <p>+62 813-3096-2030</p>
                            <p>+62 821-1606-2233</p>
                        </div>
                        <div class="email-contact-global">
                            <p><strong>Email:</strong> symfonyshop@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="symfony-team">
        <div class="symfony-team-title">
            <h1>Symfony Developer Team</h1>
        </div>
        <div class="symfony-team-container">
            <div class="symfony-team-card">
                <div class="symfony-team-image">
                    <img src="images/bimantara_img_aboutus.jpg" alt="">        
                </div>
                <div class="symfony-team-bio">
                    <p>Muhammad Fawwaz</p>
                    <p>Front-End Developer</p>
                </div>
            </div>

            <div class="symfony-team-card">
                <div class="symfony-team-image">
                    <img src="images/bimantara_img_aboutus.jpg" alt="">        
                </div>
                <div class="symfony-team-bio">
                    <p>Bimantara Aryasatya</p>
                    <p>Fullstack Developer</p>
                </div>
            </div>

            <div class="symfony-team-card">
                <div class="symfony-team-image">
                    <img src="images/bimantara_img_aboutus.jpg" alt="">        
                </div>
                <div class="symfony-team-bio">
                    <p>El Rajendra Alvin</p>
                    <p>UI UX Designer</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="symfony-service">
         <div class="symfony-service-container">
            <div class="symfony-service-delivery">
                <div class="delivery-icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="delivery-desc">
                    <h1>Fast delivery</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                </div>
            </div>

            <div class="symfony-service-quality">
                <div class="guitar-icon">
                    <i class="fa-solid fa-guitar"></i>
                </div>
                <div class="quality-desc">
                    <h1>High-quality musical instruments</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                </div>
            </div>

            <div class="symfony-service-warranty">
                <div class="warranty-icon">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="warranty-desc">
                    <h1>1 year guarantee</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                </div>
            </div>
         </div>
    </div>

    <?php
        include "footer.php";
    ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>