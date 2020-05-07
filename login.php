<?php require 'header.php';?>
<link rel="stylesheet" href="./style/login.css">
<div class="container login">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card ">
                <div class="card-content ">
                    <h2 class="center">LOGIN</h2>
                    <div class="row">
                        <form action="./inc/login.inc.php" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s12 m10 offset-m1 email" data-step="1" data-position="right"
                                    data-intro="Insert your email">
                                    <input id="email" type="email" name="mail" placeholder="jondoe@example.com"
                                        class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m10 offset-m1" data-step="2" data-position="right"
                                    data-intro="Inset your password">
                                    <input id="password" type="password" name="pwd" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col s12 m10 offset-m1">
                                <?php 
                                    if(isset($_GET['error'])) {
                                        if($_GET['error'] == "emptyFields") {
                                            echo "<blockquote>One or more fields are empty</blockquote>";
                                        }
                                        else if($_GET['error'] == "accountDoesNotExist") { 
                                            echo "<blockquote>The account does not exist. You can register <a href='./register.php'>HERE</a></blockquote>";
                                        }
                                        else if($_GET['error'] == "credentialNoMatch") { 
                                            echo "<blockquote>The credentials don't match</blockquote>";
                                        }
                                    }
                                ?>
                            </div>
                            <button name="login-submit" class="waves-effect waves-light btn col s12 m10 offset-m1"
                                data-step="3" data-position="right"
                                data-intro="Press the button to submit the data">LOGIN</button>
                        </form>
                    </div>
                </div>
                <div class="card-action" data-step="4" data-position="right"
                    data-intro="If you don't have an account, register first">
                    <p>Don't have an account ? <a href="register.php" class="blue-text"
                            style="text-transform: capitalize">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php';?>