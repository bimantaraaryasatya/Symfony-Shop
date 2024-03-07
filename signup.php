<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="signup_style.css">
</head>
<body>
    <div class="sign-up-container">
        <div class="title">
            <h1>Sign Up</h1>
        </div>
        <div class="main-content">

            <h4>Username</h4>
            <input type="text" name="username" id="username">
            
            <h4>Email</h4>
            <input type="email" name="email" id="mail">

            <h4>Password</h4>
            <input type="password" name="password" id="password">

            <h4>Confirm Password</h4>
            <input type="password" name="confirm-password" id="confirm-password">
        </div>
        <div class="sign-up-btn">
            <a href="signin.php" class="btn">Sign Up</a>
        </div>
        <div class="to-signin">
            <p>already have an account? <a href="signin.php" class="sign-in">Sign In</a></p>
        </div>
    </div>
</body>
</html>