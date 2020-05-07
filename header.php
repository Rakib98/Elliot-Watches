<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Elliot Watches</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="./style/introjs.css" />
    <link href="./style/introjs-modern.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
</head>

<body>
    <!-- Navigation bar -->
    <div class="nav" role="navigation">
        <div class="logo">
            <a href="index.php"><img id="logo" src="assets/img/logoWhite.svg" alt="" /></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" id="">Home</a></li>
            <li><a href="about.php" id="">About</a></li>
            <li><a href="contact.php" id="">Contact</a></li>
            <?php if (!isset($_SESSION['email'])) echo '<li><a href="login.php" id="">Login</a></li>'; ?>
            <?php if (isset($_SESSION['email'])) echo '<li><a href="./inc/logout.inc.php" id="">Logout</a></li>'; ?>
            <li>
                <a href="cart.php" id="num-items">
                    <i class="material-icons small basket">shopping_basket</i>
                    <span class="new badge" data-badge-caption="">
                        <?php 
                            if(isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            }
                            else {
                                echo "0";
                            }
                        ?>
                    </span>
                </a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>