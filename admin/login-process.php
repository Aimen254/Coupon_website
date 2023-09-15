<?php

 session_start();
 
 require('includes/functions.php');
 require('includes/database.php');

 if(!isset($_POST['login_email']))
 {
	
	redirect('login.php', 'Error: Invalid Acces', 'error');
	
 }
 
 
 $login_email = $_POST['login_email'];
 $login_password = $_POST['login_password'];
 $login_save = $_POST['login_save'];

	//-----------DATABASE CODE-------------

	$sql = "SELECT * FROM users 
				WHERE email = '$login_email' 
				AND 
				password = '$login_password'";

	$query = mysqli_query($connection, $sql);
		
	$total = mysqli_affected_rows($connection);


	//echo mysqli_error($connection);

	//die();
 
	//-----------END DATABASE-------------
 
 
 if($total == 1)
 {
	
	$_SESSION['login_id'] = $login_email;	//-- create our token variable
	
	if($login_save == 'yes')
	{
		setcookie('login_id', $login_email, time() + 3600*24*30);
	}
	
	redirect("index.php", 'Welcome Back!', 'success');
	 
 }else{
	
	
	redirect('login.php', 'Error: Invalid Login Info', 'error');
	
 }
 

?>