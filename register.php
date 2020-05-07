<?php require 'header.php'?>
<link rel="stylesheet" href="./style/reg.css">
<div class="container register">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card ">
                <div class="card-content ">
                    <h2 class="center">REGISTER</h2>
                    <div class="row">
                        <form action="./inc/register.inc.php" method="POST" class="col s12">
                            <div class="row" data-step="1" data-position="right"
                                data-intro="Type in your first name and last name.">
                                <div class="input-field col s12 m5 offset-m1 f_name">
                                    <input id="f_name" type="text" name="f_name" placeholder="Jon" class="validate">
                                    <label for="f_name">First Name</label>
                                </div>
                                <div class="input-field col s12 m5 l_name">
                                    <input id="l_name" type="text" name="l_name" placeholder="Doe" class="validate">
                                    <label for="l_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row" data-step="2" data-position="right" data-intro="Insert your email">
                                <div class="input-field col s12 m10 offset-m1 email">
                                    <input id="email" type="email" name="email" placeholder="jondoe@example.com"
                                        class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row" data-step="3" data-position="right"
                                data-intro="Type in your chosen password">
                                <div class="input-field col s12 m10 offset-m1">
                                    <input id="pwd" type="password" name="pwd" class="validate">
                                    <label for="pwd">Password</label>
                                </div>
                            </div>
                            <div class="row" data-step="4" data-position="right"
                                data-intro="Re-type your password. This allows to check for spelling errors.">
                                <div class="input-field col s12 m10 offset-m1">
                                    <input id="confirm_pwd" type="password" name="confirm_pwd" class="validate">
                                    <label for="confirm_pwd">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col s12 m10 offset-m1">
                                <?php 
                                    if(isset($_GET['error'])) {
                                        if($_GET['error'] == "emptyFields") {
                                            echo "<blockquote>One or more fields are empty.</blockquote>";
                                        }
                                       /*  else if($_GET['error'] == "invalidFields") { 
                                            echo "<blockquote>The name fields cannot contain numbers</blockquote>";
                                        } */
                                        else if($_GET['error'] == "invalidMail") { 
                                            echo "<blockquote>The email is not valid</blockquote>";
                                        }
                                        else if($_GET['error'] == "invalidName") { 
                                            echo "<blockquote>The name fields cannot contain numbers</blockquote>";
                                        }
                                        else if($_GET['error'] == "pwdnomatch") { 
                                            echo "<blockquote>The passwords did not match</blockquote>";
                                        }
                                    }
                                ?>
                            </div>
                            <button type="submit" name="register-submit"
                                class="waves-effect waves-light btn col s12 m10 offset-m1" data-step="5"
                                data-position="right"
                                data-intro="Lastly, click the button to submit the data">REGISTER</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <p>Do you have an account? <a href="login.php" class="blue-text"
                            style="text-transform: capitalize">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'?>
<?php 
        if(isset($_GET['reg'])) {
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'You have been registered!',
            text: 'You can simply login by clicking the button below!',
            confirmButtonText: 'LOGIN',
            onClose: function s() {  location.href = './login.php';}
          })
        </script>
        ";
    }
?>