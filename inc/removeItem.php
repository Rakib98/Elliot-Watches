<?php 
    session_start();
    $del_val = $_GET['id'];
    if(count($_SESSION['cart']) == 1) {
        unset($_SESSION["cart"]);
    }
    else if (($key = array_search($del_val, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
?>