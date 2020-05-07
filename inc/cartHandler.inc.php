<?php
session_start();

/* If the user clicked the add to checkout button it proceeds to adding items to the cart */
if(isset($_POST['add'])) {

    /* Check if the cart session has been create */
    if(!isset($_SESSION['cart'])) {
        /* If not create a cart session, and set is as an array */
        $_SESSION['cart'] =[];
        /* Add the item to the cart array */
        array_push($_SESSION['cart'], $_POST['add']);
        /* Redirect the to the product page */
        header("Location: ../prod.php?id=".$_POST['add']."&succ=added");
        exit();
    }
    /* If the cart session is already create, simply add the item */
    else {
        /* If the item has already been added, give an error */
        if(in_array($_POST['add'], $_SESSION['cart'])) {
            header("Location: ../prod.php?id=".$_POST['add']."&err=itemInCart");
            exit();
        }
        /* If the item is not already in the cart, add it */
        else {
            array_push($_SESSION['cart'], $_POST['add']);
            header("Location: ../prod.php?id=".$_POST['add']."&succ=added");
            exit();
        }
    }

    //var_dump($_SESSION['cart']);
    //header('Location: ../index.php');
    //exit();
}
else {
    header('Location: ../index.php');
    exit();
}

?>