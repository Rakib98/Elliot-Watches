<?php
/* Checks if the user clicked the register button */
if (isset($_POST['register-submit'])) {
    require 'dbh.inc.php';

    /* Stores the credentials */
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $confirm_pwd = $_POST['confirm_pwd'];

    /* Check for empty fields */
    if (empty($f_name) || empty($l_name) || empty($email) || empty($pwd) || empty($confirm_pwd)) {
        header("Location: ../register.php?error=emptyFields");
        exit();
    }
   /*  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z]*$/", $f_name || !preg_match("/^[a-zA-Z]*$/", $l_name)))) {
        header("Location: ../register.php?error=invalidFields");
        exit();
    } */

    /* Check if the email is valid */
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?error=invalidMail");
        exit();
    }
    /* Check if the name fields contain not-allowed carachters */
    else if (!preg_match("/^[a-zA-Z]*$/", $f_name)) {
        header("Location: ../register.php?error=invalidName");
        exit();
    }
    /* Check if the passwords don't match */
    else if ($pwd !== $confirm_pwd) {
        header("Location: ../register.php?error=pwdnomatch");
        exit();
    }
    else {

        $sql = "SELECT email FROM tbl_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlError");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resCheck = mysqli_stmt_num_rows($stmt);

            /* Check if the email is already taken */
            if ($resCheck > 0) {
                header("Location: ../register.php?error=existingEmail");
                exit();
            }
            /* If no errors have been found, add the user */
            else {
                $sql = "INSERT INTO tbl_users (first_name, last_name, email, user_pass) VALUES (?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlError");
                    exit();
                }
                /* Hash the password */
                else {
                    $hashedPass = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $email, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    header('Location: ../register.php?reg=success');
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../register.php");
    exit();
}