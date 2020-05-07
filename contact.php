<?php require 'header.php'?>
<style>
    /* body {
        background: linear-gradient(60deg,
                rgb(69, 165, 230) 50%, rgb(250, 151, 71) 50%);
    } */

    .contact {
        /* margin-top: 10vh; */
        min-height: 100vh;
    }

    .card {
        border-left: 3px solid rgb(250, 131, 34);
        border-right: 3px solid rgb(70, 203, 255);
    }

    .card-content {
        margin-top: 25vh;
        min-height: 50vh;
    }

    .btn {
        background-color: #ff6c2d;
        font-weight: bold;
    }

    .btn:hover {
        background-color: #db4c0f;
    }

    .btn:focus {
        background-color: #ff6c2d;
        border: 2px solid #df5216;
    }

    h2 {
        margin-top: 0;
        margin-bottom: 3rem;
    }
</style>
<div class="container contact">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-content">
                    <h2 class="center">CONTACT US</h2>
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-field col s12 m6" data-step="1" data-position="right"
                                data-intro="Insert your full name here">
                                <input placeholder="Jane Doe" id="full-name" type="text" class="validate" required>
                                <label for="full-name">Full Name</label>
                            </div>
                            <div class="input-field col s12 m6" data-step="2" data-position="right"
                                data-intro="Insert your email, so that we can write you back">
                                <input placeholder="janedoe@example.com" id="e-mail" type="email" class="validate"
                                    required>
                                <label for="e-mail">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12" data-step="3" data-position="right"
                                data-intro="Type in your message">
                                <textarea id="textarea1" class="materialize-textarea" required></textarea>
                                <label for="textarea1">Your Message</label>
                            </div>
                        </div>
                </div>
                <div class="card-action" data-step="4" data-position="right"
                    data-intro="After completing the fields, press this button to send it!">
                    <button type="submit" class="btn" style="width: 100%;">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'?>