<?php

include ('connection.php');

$id = $_GET['updateid'];
$sql = "select* from `Add_network` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Network_Name=$row['Network_Name'];
  $Network_Owner=$row['Network_Owner'];

if(isset($_POST['update_Network'])){

	$Network_Name=$_POST['Network_Name'];
	$Network_Owner=$_POST['Network_Owner'];
	   
	
  $sql="update `Add_network` set id=$id, Network_Name='$Network_Name', Network_Owner='$Network_Owner'where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
     echo "updated";
    header('location:network.php');
     }else{
     die(mysqli_error($con));
     }
  }
  

  include('includes/header.php');
  include('includes/sidebar.php');


?>

<section role="main" class="content-body">
					


	  <form method="POST">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Network_Name" value="<?php echo $Network_Name ?>" placeholder="Network Name*" aria-label="Network Name" required>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Network_Owner" value="<?php echo $Network_Owner ?>" placeholder="Network Owner*" aria-label="Network Owner" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" value="update_Network" name="update_Network"  class="bg-danger text-white rounded p-2" style="outline: none; border:none">
            </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>


				
						
				</section>
			</div>

		</section>

		

<?php
include('includes/footer.php');
?>