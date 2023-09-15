<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');

if(isset($_POST['Add_user'])){

    $Username=$_POST['Username'];
    $Store_Name=$_POST['Store_Name'];
	$Email=$_POST['Email'];
	$Status=$_POST['Status'];
     
  
  $sql="INSERT INTO `subscribers` (`Username`,`Store_Name`,`Email`,`Status`) value('$Username','$Store_Name','$Email','$Status')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo 'connection successfully';
    }else{
    die(mysqli_error($con));
    }
}






?>



	

<section role="main" class="content-body">
					
<!-- Modal -->
<div class="modal fade" id="Addsubscribermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Subscriber</h1>
      </div>
      <div class="modal-body">

	  <form method="POST">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Username" placeholder="Username*" aria-label="user name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="Store_Name" placeholder="Store Name*" aria-label="store name" required>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="email" class="form-control" name="Email" placeholder="Email" aria-label="email" required>
            </div>
            <div class="col">
                <select class="form-select" name="Status" required>
				<option selected>Status</option>
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" name="Add_user" value="Add User" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
            </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>

					<!-- start: page -->
					<div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">Subscribers List</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <button class="btn bg-success text-white ms-auto" data-bs-toggle="modal" data-bs-target="#Addsubscribermodal" type="submit">Add New</button>
						</div>
                    </div>

						
                    <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>User_Name</th>
                            <th>Email</th>
                            <th>Store_Name</th>
                            <th>Status</th>
                            <th>Added_Date</th>
							             <th>Action</th>
							             
							
                            
                        </tr>
                    </thead>
                    <tbody>
                     
									<?php
                      $sql= "Select * from `subscribers`";
                      $result=mysqli_query($con,$sql);
                      if($result){
                      while( $row=mysqli_fetch_assoc($result)){
                       $id=$row['id'];
                       $Username=$row['Username'];
                       $Store_Name=$row['Store_Name'];
					   $Status=$row['Status'];
                       $Email=$row['Email'];
                       $Added_Date=$row['Added_Date'];
                        echo ' <tr>
                       <th scope="row">'.$id.'</th>
                       <td>'.$Username.'</td>
                       <td>'.$Store_Name.'</td>
                       <td>'.$Email.'</td>
                         <td>'.$Status.'</td>
                         <td>'.$Added_Date.'</td>
                      
        
                         <td>
                         <a href="update_subscriber.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
                         <a href="delete_subscriber.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
                        </td>
                        </tr>';

      }
     }
     
     
     ?>
										
									</tbody>
								</table>
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