<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['psw']))
{
$uname=$_POST['name'];
$upsw=$_POST['psw'];



$sql = "SELECT username,password FROM user WHERE username = '$uname' and password ='$upsw' ";


if($result = mysqli_query($conn, $sql))
{
    $count = mysqli_num_rows($result);
	 if ($count)
	 {
	    if(!empty($_POST["remember"]))
		{
           //COOKIES for username
           setcookie ("user_login",$_POST["name"],time()+ (10 * 365 * 24 * 60 * 60));
         //COOKIES for password
           setcookie ("userpassword",$_POST["psw"],time()+ (10 * 365 * 24 * 60 * 60));
        } else 
		{
           if(isset($_COOKIE["user_login"])) 
          setcookie ("user_login","");
          if(isset($_COOKIE["userpassword"])) 
          setcookie ("userpassword","");
		}
		$userDetails = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $userDetails['username'];
			     header("location:welcome.php");
	} else {
		$message = "Invalid Login";
	}
}
}
else 
	{
		$message = "Invalid Login";
	}
?>