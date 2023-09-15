<?php

 session_start();
 
 require('include/functions.php');
 require('include/database.php');

 //print_r($_POST);

 //die();


	$designation = $_POST['designation'];
	$fullname = $_POST['fullname'];
	

	$sql = "UPDATE users 
				SET 
				designation = '$designation' ,
				name = '$fullname'
				WHERE
				
				email = '$_SESSION[login_id]'
				
				";

	// die($sql);

	$query = mysqli_query($connection, $sql);
		
	// $total = mysqli_affected_rows($connection);

	if($query)
	{
		
		redirect('update-profile.php', 'Success: Profile Updated', 'success');
		
	}else{
		
		redirect('update-profile.php', 'Error: Can not update, try again!', 'error');
		
	}
 

?>