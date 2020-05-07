<?php require 'header.php'; require './inc/dbh.inc.php'; require './inc/prod.inc.php'?>
<style>
    .chip {
        cursor: pointer;
    }
</style>
<!-- Hero section -->
<div class="hero">
    <div class="row">
        <div class="col m5 offset-m6" style="margin-top: 10vh">
            <h1 class="white-text">High quality watches</h1>
            <h4 class="white-text">Masterfully handcrafted</h4>
            <button class="btn waves-effect waves-light col m4" style="background-color: #ff6c2d;"
                onclick="scrollT()">SHOP NOW</button>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="container index">
    <h4>New Arrivals</h4>
    <div class="row" data-step="1" data-position="right"
        data-intro="Click on any of the item, to open their specific page">
        <?php
            $sql = "SELECT * FROM tbl_products LIMIT 4";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    prod($row['prod_name'], $row['prod_price'], $row['prod_img'], $row['prod_id'], $row['prod_filters']);
                }
            } else {
                echo "0 results";
            }
        ?>
    </div>
    <!-- All prods -->
    <h4>All</h4>


    <!--   <div class="chip">All</div>
    <div class="chip">Men</div>
    <div class="chip">Womem</div> -->

    <div class="row all" data-step="2" data-intro="Check out all of our products" data-position="right"
        data-scrollTo="tooltip">
        <?php
            $sql = "SELECT * FROM tbl_products WHERE prod_id > 4";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    prod($row['prod_name'], $row['prod_price'], $row['prod_img'], $row['prod_id'], $row['prod_filters']);
                }
            } else {
                echo "0 results";
            }
        ?>
    </div>
</div>
<?php require 'footer.php' ?>
<script>
    const scrollT = () => {
        window.scroll({
            top: window.innerHeight / 2,
            behavior: 'smooth',
        });
    }
</script>
<?php 
    if(isset($_GET['loginSuccess'])) {
        echo "<script>
        Swal.fire({
            imageUrl: 'https://unsplash.it/200/200',
            imageWidth: 200,
            imageHeight: 200,
            title: 'Hi " .$_SESSION["f_name"] ."',
            text: 'Welcome to Elliot Watches. Hope you will find what you need',
            confirmButtonText: 'Ok',
            onClose: function s() {  location.href = './index.php';}
          })
        </script>";
    }
?>