<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap - Taster </title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="main.css">
	 
<script>
function home()
		{
		  location.replace("home page.html");
		}
</script>		
</head>
<body>
<div class="container">
 <div class="col-md-6">                    
<h3>Welcome - <?php session_start(); echo $_SESSION['name']; ?></h3>
<br />
<p><a href="logout.php">Logout</a></p>	
 </div>
  <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home page.html">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login form event1.html">Login</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<header class="page-header header container-fluid">
<div class="overlay"></div>
<div class="description">
  <h1>Welcome to the my page!</h1>
 <button class="btn btn-outline-secondary btn-lg" onclick="home()";>Explore!</button>
</div>
</header>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>
