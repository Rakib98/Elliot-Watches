<?php
// start a session
session_start();
echo 'Session Id:'.session_id();

 
// manipulate session variables

// Storing session data
$_SESSION["firstname"] = "Peter";
$_SESSION["lastname"] = "Parker";
?>