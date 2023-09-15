<?php

 /*
 
	Redirect user to login page
	if a person has not signed in
	or his session is expired
	
 */
 
 function authenticate()
 {
	  //-- CHECK IF USER IS LOGGED IN
	 if(!isset($_SESSION['login_id']) && !isset($_COOKIE['login_id']))
	 {
		 
		 header('location: login.php?msg=Please login first');
		 exit();
		 
	 }
	 
	 
 }
 
 
 /*
 
	Redirect user to a new location = $url
	With a message = $msg
	And a message type = $msg_type
 
 */
 
 function redirect($url, $msg = NULL, $msg_type = 'success')
 {
	 
	$_SESSION['msg'] = $msg;
	$_SESSION['msg_type'] = $msg_type;
	header("location: $url");
	exit();
	 
 }



 /*
 
	Display a message 
	If available in session
	and delete afer displaying
 
 */
 
 function show_msg()
 {
	 
	if(isset($_SESSION['msg']))
	 {
		 
		 if($_SESSION['msg_type'] == 'error')
		 {
		 
			 echo "<div id='msg' class='error'>$_SESSION[msg]</div>";
			 unset($_SESSION['msg']);
			 
		 }else{
			 
			 echo "<div id='msg' class='success'>$_SESSION[msg]</div>";
			 unset($_SESSION['msg']);
			 
		 }
	 }
	 
	 
 }




?>