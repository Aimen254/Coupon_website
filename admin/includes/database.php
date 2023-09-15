<?php
//$con=new mysqli('localhost','root','','coupon');
 const DB_HOST = 'localhost';
 const DB_USER = 'root';
 const DB_PASSWORD = '';
 const DB_DATABASE = 'fahad';
 
 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
 
 if(!$connection)
 {
	die('Error: Cannot connect to Database Server');
 }


 $database = mysqli_select_db($connection, DB_DATABASE);
 
 if(!$database)
 {
	die('Error: Database not found on this server');
 }



?>