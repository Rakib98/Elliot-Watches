<?php

/* Checks if the user clicked the login button */
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $email = $_POST ['mail'];
    $password = $_POST ['pwd'];

    /* Error checking for empty field */
    if (empty($email) || empty($password)) {
        header("Location: ../login.php?error=emptyFields");
        exit();
    }
    /* If the fields are not empty */
    else {
        $sql = "SELECT * FROM tbl_users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);

        /* Check if the statement builds */
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlError");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($res)) {
                $passCheck = password_verify($password, $row['user_pass']);
                
                /* Check if the passwords match */
                if ($passCheck == false) {
                    header("Location: ../login.php?error=credentialNoMatch");
                    exit();
                }

                /* Create various session variable to be used later */
                else if ($passCheck == true) {
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['f_name'] = $row['first_name'];
                    $_SESSION['l_name'] = $row['last_name'];

                    header("Location: ../index.php?loginSuccess");
                    exit();
                }

                /* In case the password and email don't match */
                else {
                    header("Location: ../login.php?error=credentailNoMatch");
                    exit();
                }
            }
            /* In case the email is already taken */
            else {
                header("Location: ../login.php?error=accountDoesNotExist");
                exit();
            }
        }
    }
}

else {
    header("Location: ../index.php");
    exit();
}