<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');

if(isset($_POST['Add_Network'])){

	$Network_Name=$_POST['Network_Name'];
	$Network_Owner=$_POST['Network_Owner'];
	   
	
	$sql="INSERT INTO `add_network` (`Network_Name`, `Network_Owner`) value('$Network_Name','$Network_Owner')";
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
<div class="modal fade" id="Addnetworkmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Network</h1>
      </div>
      <div class="modal-body">

	  <form method="POST">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Network_Name" placeholder="Network Name*" aria-label="Network Name" required>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Network_Owner" placeholder="Network Owner*" aria-label="Network Owner" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" value="Add_Network" name="Add_Network" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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
                            <h4 class="text-white">Network List</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <button class="btn bg-success text-white ms-auto" data-bs-toggle="modal" data-bs-target="#Addnetworkmodal" type="submit">Add New</button>
						</div>
                    </div>
					<table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Network_Name</th>
                            <th>Network_Owner</th>
                            <th>Added_Date</th>
                            <th>Action</th>
                            
							
                            
                        </tr>
                    </thead>
                    <tbody>
                     

			
                        
								
                  					 <?php
     									$sql= "Select * from `add_network`";
     									$result=mysqli_query($con,$sql);
     									if($result){
      									while( $row=mysqli_fetch_assoc($result)){
        								$id=$row['id'];
        								$Network_Name=$row['Network_Name'];
										$Network_Owner=$row['Network_Owner'];
        								$Added_Date=$row['Added_Date'];
        								
        								echo ' <tr>
        								<th scope="row">'.$id.'</th>
       									 <td>'.$Network_Name.'</td>
										 <td>'.$Network_Owner.'</td>
        								 <td>'.$Added_Date.'</td>

										 <td>
                          					<a href="update_network.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
											<a href="delete_network.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
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