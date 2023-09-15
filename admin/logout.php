<?php

 session_start();
 require('includes/functions.php');

 authenticate();
 
 unset($_SESSION['login_id']);
 
 setcookie('login_id', NULL, time() - 234234);
 
 redirect('login.php', 'Successfully Logged out', 'success');
 
 


?>