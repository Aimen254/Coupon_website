<?php
include('includes/header.php');
include('includes/sidebar.php');

include ('connection.php');
$id = $_GET['updateid'];
$sql = "select* from `subscribers` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

  $Username=$row['Username'];
  $Store_Name=$row['Store_Name'];
  $Email=$row['Email'];
  $Status=$row['Status'];

if(isset($_POST['update_subscriber'])){
  $Username=$_POST['Username'];
  $Store_Name=$_POST['Store_Name'];
  $Email=$_POST['Email'];
  $Status=$_POST['Status'];
  
 
  
  $sql="update `subscribers`set id=$id, Username ='$Username', Store_Name='$Store_Name', Email='$Email',Status='$Status' where id=$id";
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


	  <form method="POST">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Username" value="<?php echo $Username ?>" placeholder="Username*" aria-label="user name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="Store_Name" value="<?php echo $Store_Name ?>" placeholder="Store Name*" aria-label="store name" required>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="email" class="form-control" name="Email" value="<?php echo $Email ?>" placeholder="Email" aria-label="email" required>
            </div>
            <div class="col">
                <select class="form-select" name="Status" required>
				<!-- <option selected>Status</option> -->
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" name="update_subscriber" value="update_subscriber" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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