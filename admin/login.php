<?php
 session_start();

 require('includes/functions.php');

?>

<?php

	show_msg();
 
?>

<html>
<head>
	<title>LOGIN</title>
  <link href="theme/css/style.css" rel="stylesheet">
</head>
<body>
     <form action="login-process.php" method="post">
     	<h2>SIGN IN NOW</h2>
     
     	<label>email</label>
     	<input type="email" name="login_email" placeholder="email"><br>

     	<label>password</label>
     	<input type="password" name="login_password" placeholder="Password"><br>

     	<button name="submit" name="submit" type="submit">SIGN IN</button>
     </form>
</body>
</html>




