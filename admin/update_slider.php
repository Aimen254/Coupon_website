<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');

$id = $_GET['updateid'];
$sql = "select* from `slider` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$slider_title=$row['slider_title'];
  $image_alt=$row['image_alt'];
  $User_Name=$row['tracking_link'];
  $status=$row['status'];
 


if(isset($_POST['submit'])){

	$slider_title=$_POST['slider_title'];
	$image_alt=$_POST['image_alt'];
	$tracking_link=$_POST['tracking_link'];
	$status=$_POST['status'];
	
	
    $sql="update `slider` set id=$id, slider_title='$slider_title', image_alt='$image_alt', tracking_link='$tracking_link',status='$status' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "updated";
      header('location:slider.php');
       }else{
       die(mysqli_error($con));
       }
  }
?>		

<section role="main" class="content-body">
					


      <div class="modal-body">
		<form method="post">
			<div class="mb-3">
				<input type="text" name="slider_title" value="<?php echo $slider_title ?>" class="form-control" id="formGroupExampleInput" placeholder="Slider Title">
			</div>
			<div class="mb-3">
				<input type="text" name="image_alt" value="<?php echo $image_alt ?>" class="form-control" id="formGroupExampleInput2" placeholder="Image Alt">
			</div>
			<div class="mb-3">
				<input type="text" name="tracking_link"  class="form-control" id="formGroupExampleInput2" placeholder="Tracking Link">
			</div>
			<div class="mb-3">
				<select name="status" value="<?php echo $status ?>" class="form-control">
					<!-- <option selected>--Status--</option> -->
					<option value="1">Enable</option>
					<option value="2">Disable</option>
				</select>
			</div>

			<div class="form-group">
				<label for="imageUpload">Select Image</label>
				<input type="file" class="form-control-file" id="imageUpload">
			</div>
			<div class="mt-3">
			<img id="preview" src="#" alt="Preview" style="max-width: 100px; display:none;">
		</div>

			<div class="mb-3 text-center">
                <input type="submit" name="submit" value="Add_slider" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
            </div>
		</form>

<script>
	const imageUpload = document.getElementById('imageUpload');
	const preview = document.getElementById('preview');

	imageUpload.addEventListener('change', function() {
		const file = this.files[0];
		if (file) {
		const reader = new FileReader();
		reader.addEventListener('load', function() {
			preview.setAttribute('src', this.result);
			preview.style.display = 'block';
		});
		reader.readAsDataURL(file);
		}
	});
</script>
      </div>
    </div>
  </div>
</div>

					<!-- start: page -->
					<div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">Main Slider</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <button class="btn bg-success text-white ms-auto" data-bs-toggle="modal" data-bs-target="#Addslidermodal" type="submit">Add New</button>
						</div>
                    </div>

						<form class="row d-flex row-cols-lg-auto g-3 align-items-center">
							<div class="col-3">
							  <div class="input-group">
								<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Slider Title">
							  </div>
							</div>
						  
							<div class="col-3 ms-auto">
							  <button type="submit" class="btn btn-primary">Search</button>
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