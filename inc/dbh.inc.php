<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPass = "";
$dbName = "db_elliot";

$conn = mysqli_connect($serverName, $dbUserName, $dbPass, $dbName);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}