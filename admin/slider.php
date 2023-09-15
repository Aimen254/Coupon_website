<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');


if(isset($_POST['submit'])){

	$slider_title=$_POST['slider_title'];
	$image_alt=$_POST['image_alt'];
	$tracking_link=$_POST['tracking_link'];
	$status=$_POST['status'];
	$slide_image=$_FILES['slide_image']['name'];
	
	
	$sql="INSERT INTO `slider` (`slider_title`, `image_alt`,`tracking_link`,`status`,`slide_image`)
					  value('$slider_title','$image_alt','$tracking_link','$status','$slide_image')";
	 $result=mysqli_query($con,$sql);
	 if($result){
		move_uploaded_file($_FILES["slide_image"]["tmp_name"],  "../slider/".$_FILES["slide_image"]["name"]);
		}else{
		die(mysqli_error($con));
		}
  }
?>		

<section role="main" class="content-body">
					
<!-- Modal -->
<div class="modal fade" id="Addslidermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Slider</h1>
      </div>
      <div class="modal-body">
		<form method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<input type="text" name="slider_title" class="form-control" id="formGroupExampleInput" placeholder="Slider Title">
			</div>
			<div class="mb-3">
				<input type="text" name="image_alt" class="form-control" id="formGroupExampleInput2" placeholder="Image Alt">
			</div>
			<div class="mb-3">
				<input type="text" name="tracking_link" class="form-control" id="formGroupExampleInput2" placeholder="Tracking Link">
			</div>
			<div class="mb-3">
				<select name="status" class="form-control">
					<option selected>--Status--</option>
					<option value="1">Enable</option>
					<option value="2">Disable</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="imageUpload">Select Image</label>
				<input type="file" name="slide_image" class="form-control-file" id="imageUpload">
			</div>
			
			<div class="mt-3">
			<img id="preview" src="#" alt="Preview" style="max-width: 100px; display:none;">
		</div>

			<div class="mb-3 text-center">
                <input type="submit" name="submit" value="Add New" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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

					<table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>slider_title</th>
                            <th>tracking_link</th>
                            
							<th>Added_Date</th>
							<th>Action</th>
							
                            
                        </tr>
                    </thead>
                    <tbody>
                     
                        
										
										 <?php
										
												$sql= "Select * from `slider`";
												$result=mysqli_query($con,$sql);
												if($result){
												while( $row=mysqli_fetch_assoc($result)){
												$id=$row['id'];
												$slider_title=$row['slider_title'];
												$tracking_link=$row['tracking_link'];
												$Added_Date=$row['Added_Date'];
													echo ' <tr>
												<th scope="row">'.$id.'</th>
												<td>'.$slider_title.'</td>
												<td>'.$tracking_link.'</td>
													<td>'.$Added_Date.'</td>
												
												</td>
												<td>
												<a href="update_slider.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
												<a href="delete_slider.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
											   </td>
												
													</tr>';

													}
														}
												?>
										     
								</table>
									</tbody>
									
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