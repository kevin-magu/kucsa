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
    <form id="form" action="" method="post">
    <div class="club-logo"><img src="images/kucsaLogo.jpg" alt=""></div>

    <label for="name">KUCSA ID</label>
    <input type="text" id="name">
    <br>
    <label for="password">PASSWORD</label>
    <input type="password" id="password">
    <br>
    <button id="submit">Login</button>
    <p>Don't have an account?</p><a href="register.php" target="_blank">Register here</a>

    </form>
</div>
</body>
</html>