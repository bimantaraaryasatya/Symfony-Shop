<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus.css">
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div class="background">
        <div class="background-content">
            <div class="title" data-aos="zoom-in" data-aos-duration=1000 data-aos-once="true">
                <h1>Contact Us</h1>
                <p>Need to reach out? We're eager to connect with you. Here are the <br> ways to get in touch.</p>
            </div>

            <div class="image">
                <img src="images/officeworker_call.jpg" alt="office worker on phone">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card" data-aos="fade-right" data-aos-duration=800 data-aos-delay=100 data-aos-once="true">
            <i class="fa-solid fa-phone"></i>
            <h4>Talk to Sales</h4>
            <p>Curious about HubSpot's software? Feel free to give us a call to chat with one of our sales team members.</p>
            <a href="" style="text-decoration: underline;">+62 813-3096-2030</a>
        </div>

        <div class="card" data-aos="fade-left" data-aos-duration=800 data-aos-delay=100 data-aos-once="true">
            <i class="fa-solid fa-comments"></i>
            <h4>Contact Customer Support</h4>
            <p>Every now and then, a helping hand from your buddies comes in handy. Or a HubSpot support representative... we've got your back!</p>
            <a href="" style="text-decoration: underline;">+62 821-1606-2233</a>
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