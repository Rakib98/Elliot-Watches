<?php

/* Function to create a table row, to make the code more organsied */

function cartComp($prodImg, $prodName, $prodPrice, $prodId) {
    $cartItem = "<div class='card'>
    <div class='card-content'>
        <div class='check'>
            <div class='image'>
                <img src='$prodImg' width='100' alt=''>
            </div>
            <div class='name'>
                <p>$prodName</p>
            </div>
            <div class='price'>
                $prodPrice
            </div>
            <div class='ico'>
                <i class='material-icons red white-text remove-item' onclick='removeItem($prodId)'>close</i>
            </div>
        </div>
    </div>
</div>";

echo  $cartItem;
}
?>