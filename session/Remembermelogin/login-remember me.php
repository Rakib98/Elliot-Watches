<html>
<body>

<form action="logindetails1.php" method="post">
<p>Username: <input type="text" name="name" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>"><br></p>
<p>Password <input type="password" name="psw" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>"><br></p>
<div class="field-group">
		<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
<input type="submit">
</form>

</body>
</html>