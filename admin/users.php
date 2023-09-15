<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');

if(isset($_POST['submit'])){

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
     
  
  $sql="select * form 'Add_user' where id='$username'";
  $result=mysqli_query($con,$sql);
  if($result){
  if($result){
    echo'connection successfully';
  }
    }else{
    die(mysqli_error($con));
    }
}
 ?>

<!-- Add user -->

<?php
if(isset($_POST['Add_user'])){
  $Admin_Name=$_POST['Admin_Name'];
  $User_Level=$_POST['User_Level'];
  $User_Name=$_POST['User_Name'];
  $Status=$_POST['Status'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $sql="INSERT INTO `Add_user` (`Admin_Name`, `User_Level`,`User_Name`,`Status`,`email`,`password`)
                    value('$Admin_Name','$User_Level','$User_Name','$Status','$email','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo 'connection successfully';
    }else{
    die(mysqli_error($con));
    }
}
 ?>

<!-- end add user -->




<!-- start: page -->
<section role="main" class="content-body">

<!-- Modal -->
<form method="post">
<div class="modal fade" id="Addusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Add_user</h1>
      </div>
      <div class="modal-body">

      <form method="post">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Admin_Name" placeholder="Admin_Name*" aria-label="Admin name" required>
            </div>
            <div class="col">
                <select class="form-select" name="User_Level" required>
                <option selected>User_Level</option>
                    <option value="1">User</option>
                    <option value="2">Manager</option>
                    <option value="3">Admin</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="User_Name" placeholder="User_Name*"  required>
            </div>
            <div class="col">
                <select class="form-select" name="Status" required>
                <option selected>Status</option>
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email*" aria-label="Email" required>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password" placeholder="Password*" aria-label="Password" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" value="Add_user" name="Add_user" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
            </div>
        </div>
        </form>
      

      </div>
    </div>
  </div>
</div>
</form>

 <div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">Users List</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <button class="btn bg-success text-white ms-auto " data-bs-toggle="modal" data-bs-target="#Addusermodal" type="submit">Add New</button>
						</div>
 </div>
                     
 <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Admin_Name</th>
                            <th>User_Level</th>
                            <th>User_Name</th>
                            <th>Status</th>
                            <th>email</th>
							<th>password</th>
							<th>Added_Date</th>
							<th>Action</th>
							
                            
                        </tr>
                    </thead>
                    <tbody>
                     
                       
						<?php
                                              $sql= "Select * from `add_user`";
                                                 $result=mysqli_query($con,$sql);
                                                  if($result){
                                                      while( $row=mysqli_fetch_assoc($result)){
                                                       $id=$row['id'];
                                                       $Admin_Name=$row['Admin_Name'];
                                                       $User_Level=$row['User_Level'];
                                                       $User_Name=$row['User_Name'];
                                                       $Status=$row['Status'];
													   $email=$row['email'];
													   $password=$row['password'];
													   $Added_Date=$row['Added_Date'];
                                                      
                                                        echo ' <tr>
                                                       <th scope="row">'.$id.'</th>
                                                       <td>'.$Admin_Name.'</td>
                                                       <td>'.$User_Level.'</td>
                                                          <td>'.$User_Name.'</td>
                                                         <td>'.$Status.'</td>
														 <td>'.$email.'</td>
														 <td>'.$password.'</td>
														 <td>'.$Added_Date.'</td>
                                                        
                                                         <td>
                                                         <a href="update.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="delete_user.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                                </tr>';

                                                                }
                                                            }
     
                                                                ?>
										
						
              
</tbody>
									</table>

						
                    
			

		</section>

<?php
include('includes/footer.php');
?>          