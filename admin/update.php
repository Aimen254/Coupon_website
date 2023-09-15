<?php



include ('connection.php');

$id = $_GET['updateid'];
$sql = "select* from `Add_user` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Admin_Name=$row['Admin_Name'];
  $User_Level=$row['User_Level'];
  $User_Name=$row['User_Name'];
  $Status=$row['Status'];
  $email=$row['email'];
  $password=$row['password'];
   
if(isset($_POST['Update_user'])){
  $Admin_Name=$_POST['Admin_Name'];
  $User_Level=$_POST['User_Level'];
  $User_Name=$_POST['User_Name'];
  $Status=$_POST['Status'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $sql="update `Add_user` set id=$id, Admin_Name='$Admin_Name', User_Level='$User_Level', User_Name='$User_Name',Status='$Status', email='$email', password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
     echo "updated";
    header('location:users.php');
     }else{
     die(mysqli_error($con));
     }
}
include('includes/header.php');
include('includes/sidebar.php');
 ?>

<!-- start: page -->
<section role="main" class="content-body">

<!-- Modal -->
      <form method="post">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Admin_Name" placeholder="Admin_Name*" aria-label="Admin name" required value=<?php echo $Admin_Name;?>>
            </div>
            <div class="col">
                <select class="form-select" name="User_Level" required value=<?php echo $User_Level;?>>
                <option selected>User_Level</option>
                    <option value="1">User</option>
                    <option value="2">Manager</option>
                    <option value="3">Admin</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="User_Name" placeholder="User_Name*"  required value=<?php echo $User_Name;?>>
            </div>
            <div class="col">
                <select class="form-select" name="Status" required value=<?php echo $Status;?>>
                <option selected>Status</option>
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email*" aria-label="Email" required value=<?php echo $email;?>>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password" placeholder="Password*" aria-label="Password" required value=<?php echo $password;?>>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" value="Update_user" name="Update_user" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
            </div>
        </div>
        </form>
    
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
                    </section>
			</div>

		</section>

<?php
include('includes/footer.php');
?>          