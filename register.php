<?php include('navigation.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div id="homepage">
    <form id="reg-form" action="" method="post">
    <div class="club-logo"><img src="images/kucsaLogo.jpg" alt=""></div>

    <label for="name">Name</label>
    <input type="text" id="name">
    <br>
    <label for="email">Email</label>
    <input type="email" id="email">
    <br>
    <label for="phone">Phone No</label>
    <input type="number" id="phone">
    <br>
    <label for="yearos">Year Of Study</label>
    <input type="text" id="yearos">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password">
    <br>
    <label for="cpassword">Confirm Password</label>
    <input type="password" id="cpassword">
    <br>
    <button id="register">Register</button>
    <p>Already have an account?</p><a href="login.php" target="_blank">Login here</a>

    </form>
</div>
</body>
</html>