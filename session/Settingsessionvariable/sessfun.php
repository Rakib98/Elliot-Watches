<?php

  session_start();

  if ( ! isset($_SESSION['pizza']) ) {
     echo("<p>Session is empty</p>\n");
     $_SESSION['pizza'] = 0;
} else if ( $_SESSION['pizza'] < 3 ) {
     $_SESSION['pizza'] = $_SESSION['pizza'] + 1;
     echo("<p>Added one...</p>\n");
  } else {
    session_destroy();
	session_regenerate_id(TRUE);
    session_start();
    echo("<p>Session Restarted</p>\n");
  }
?>
<html>
<body>
<p><a href="sessfun.php">Click Me!</a></p>
<p>Our Session ID is: <?php echo(session_id());  ?></p>
<p>
 <?php print_r($_SESSION); ?></p>
 
</body>
</html>