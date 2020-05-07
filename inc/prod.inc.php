<?php
   function prod($prodName, $prodPrice, $prodImg, $prodId, $prodFilter) {
    echo "<div class='col s6 m6 l3 prod $prodFilter'>
    <a href='./prod.php?id=$prodId'>
        <div class='card'>
            <div class='card-image'>
                <img src='$prodImg' alt='Image of $prodName'>
            </div>
        </div>
        <p class='card-title'>$prodName <span class='prod-price'>| £ $prodPrice</span></p>
    </a>
</div>";
}