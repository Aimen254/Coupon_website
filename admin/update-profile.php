<?php
 session_start();
 require('include/database.php');
 require('include/functions.php');

 authenticate();
 
 $sql = "SELECT * FROM users
			WHERE
			email = '$_SESSION[login_id]'";
 
 $query = mysqli_query($connection, $sql);
 
 $row = mysqli_fetch_assoc($query);
 
 //var_dump($row);
 
 //die();
 
 
 include('include/header.php');

?>

<link rel='stylesheet' href='style/theme1.css' />

<h1>
 My Profile
</h1>




<form method='post' action='update-profile-process.php'>

 Full Name: <input type='text' name='fullname' value="<?php echo $row['name'] ?>" />
 
 <br /> <br />
 
 Designation: <input type='text' name='designation' value="<?php echo $row['designation'] ?>" />
 
 <br /> <br />
 
 Email: <?php echo $_SESSION['login_id'] ?>
 
 <br /> <br />
 
 Password: <input type='password' name='password' />
 
 <br /> <br />
 


 <input type='submit' value='Save' />

</form>

