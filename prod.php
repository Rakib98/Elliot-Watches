<?php 
    if(!isset($_GET['id'])) {
       // header("Location: ./index.php");
    }
    require 'header.php';
    require './inc/dbh.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_products WHERE prod_id=". $id .";";
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="./style/prodPage.css">
<div class="container product" style="margin-top: 7rem;">
    <div class="sing-prod">
        <div class="prodImages col m6 s12 center">

            <img src="<?php echo $row['prod_img']?>" id="main-img" alt="Watch Image"
                class="z-depth-1 materialboxed main-img" data-step="2" data-intro="Click to view in full screen"
                data-scrollTo="tooltip" tabindex="1">
            <div class="prd-carousel section" data-step="3"
                data-intro="Click on of these images, to change the big image" tabindex="1">
                <img src="<?php echo $row['prod_img']?>" id="default" onclick="changeImg(this.id)" width="100"
                    alt="Watch Image">
                <img src="./assets/img/placeHolder2.jpg" id="2" onclick="changeImg(this.id)" width="100"
                    alt="Watch Image">
                <img src="./assets/img/placeHolder3.jpg" id="3" onclick="changeImg(this.id)" width="100"
                    alt="Watch Image">
            </div>
        </div>
        <div class="prod-desc">
            <h4><?php echo $row['prod_name']?></h4>
            <h5>£ <?php echo $row['prod_price']?></h5>
            <p><?php echo $row['prod_desc']?></p>
            <form action="./inc/cartHandler.inc.php" method="POST" data-step="1"
                data-intro="Click here to add the item to the checkout" data-scrollTo="element">
                <button class="btn waves-effect waves-light add-to-checkout" type="submit" name="add"
                    value="<?php echo $_GET['id']?>" tabindex="1"
                    <?php if(!isset($_SESSION['email'])) echo "disabled"?>>ADD TO
                    CART</button>
                    <?php if(!isset($_SESSION['email'])) echo "<blockquote class=''>
                    You have to be logged in, to add items to your cart
                </blockquote>"?>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'?>

<?php
    if(isset($_SESSION['cart'])) {
        if(isset($_GET['err'])) {
            echo "
            <script>Swal.fire({
                icon: 'error',
                title: 'Item is already in the cart!',
                text: 'Due to limited stock, we only allow one item per person...'
              })</script>";
        }
        else if (isset($_GET['succ'])) {
            echo "
            <script>added();</script>";
        }
    }
?>

<script>
    const defSrc = document.getElementById("main-img").src;;
    function changeImg(click_id) {
        if (click_id !== "default") {
            document.getElementById("main-img").src = `./assets/img/placeHolder${click_id}.jpg`;
        }
        else {
            document.getElementById("main-img").src = defSrc;
        }
    }
</script>