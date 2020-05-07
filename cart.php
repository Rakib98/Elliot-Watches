<?php 
    require 'header.php';
    require './inc/dbh.inc.php';
    require './inc/cartComp.inc.php';

    if(isset($_SESSION['email']) && isset($_SESSION['cart'])) {
    $numItems= count($_SESSION['cart']);
    $cartTotal = 0;
    }
?>
<link rel="stylesheet" href="./style/cart.css">
<div class="container cart" style="margin-top: 10vh;">
    <h3 class="center">CART</h3>
    <div class="row">
        <div class="col s12 m6 ">
            <?php 
                                  if (isset($_SESSION['cart'])) {
                                    $ids = implode(",", $_SESSION['cart']);

                                    $sql = "SELECT * FROM tbl_products WHERE prod_id IN ($ids)";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            cartComp($row['prod_img'], $row['prod_name'], $row['prod_price'], $row['prod_id']);
                                            $cartTotal += $row['prod_price'];
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                }
                                else {
                                    echo "<p class='orange'>Your cart is empty</p>";
                                }
                            ?>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        Customer Details
                    </div>
                    <?php if(isset($_SESSION['email'])) {?>
                    <p>
                        <?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name'];?>
                    </p>
                    <p>123 Hence Street</p>
                    <p>Walsall, WS1 2AA</p>
                    <?php }?>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        Order Breakdown
                    </div>
                    <?php if(isset($_SESSION['cart'])) {?>
                    <p>Number of items :
                        <?php echo $numItems?>
                    </p>
                    <p>Delivery Fee : £7</p>
                    <h5>Order Total: £ <?php echo $cartTotal?></h5>
                    <?php }?>
                </div>
            </div>
            <button class="btn col s12 red" style="margin-bottom: 1rem;" onclick="emptyCart()">EMPTY CART</button>
            <button class="btn col s12">CHECKOUT</button>
        </div>
    </div>

</div>
<?php require 'footer.php'?>

<script>
    const emptyCart = () => {
        $.ajax({
            type: 'GET',
            url: './inc/emptyCart.php',
            success: function () {
                location.reload();
            }
        });
    }

    const removeItem = (id) => {
        $.ajax({
            type: 'GET',
            url: `./inc/removeItem.php?id=${id}`,
            success: function () {
                location.reload();
            }
        });
    }
</script>