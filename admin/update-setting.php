<?php

   include ('connection.php');



   $id = $_GET['updateid'];
   $sql = "select* from `setting` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);

   $Company_Name=$row['Company_Name'];

   $content=$row['content'];
   $Facebook_URL=$row['Facebook_URL'];
   $Google_URL=$row['Google_URL'];
   $Twitter_URL=$row['Twitter_URL'];

   $Footer_Description=$row['Footer_Description'];





   if(isset($_POST['submit'])){
     $Company_Name=$_POST['Company_Name'];
     $store_logo=$_FILES['store_logo']['name'];
	 $content=$_POST['content'];
	 $Facebook_URL=$_POST['Facebook_URL'];
	 $Google_URL=$_POST['Google_URL'];
	 $Twitter_URL=$_POST['Twitter_URL'];
    $Facebook_Logo=$_FILES['Facebook_Logo']['name'];
    $google_logo=$_FILES['google_logo']['name'];
    $twitter_logo=$_FILES['twitter_logo']['name'];
	
	 $Footer_Description=$_POST['Footer_Description'];
  


     $sql="update `setting`set id=$id, Company_Name='$Company_Name',store_logo='$store_logo',content='$content',Facebook_URL='$Facebook_URL',Google_URL='$Google_URL',Twitter_URL='$Twitter_URL',Facebook_Logo='$Facebook_Logo',google_logo='$google_logo',twitter_logo='$twitter_logo',Footer_Description='$Footer_Description' where id=$id";
                      
     $result=mysqli_query($con,$sql);
     if($result){
      move_uploaded_file($_FILES["store_logo"]["tmp_name"],  "../logo/".$_FILES["store_logo"]["name"]);
      }else{
      die(mysqli_error($con));
      }
}

include('includes/header.php');
include('includes/sidebar.php');
   ?>
<section role="main" class="content-body">
   <!-- start: page -->
   <div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Setting</h4>
         
      </div>
    
   </div>
   <form method="post" enctype="multipart/form-data">
      <div class="row mb-2 mt-3">
      
	
		 <div class="form-group">
               <h4>Logo</h4>
               <input type="file" name="store_logo" value="<?php echo $row["store_logo"]; ?>"  /><img src="../logo/<?php echo $row["store_logo"]; ?>" class="form-control-file" id="imageUpload" >
           
             
            </div>
                  <div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Content</h2>
									</header>
									<div  class="card-body" >
										
											<div class="form-group row pb-3" >
												<label class="col-lg-3 control-label text-lg-end pt-2"></label>
												<div  class="col-lg-9" >
													<div >
                                       <textarea name="content"   class="summernote"  data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</textarea></div>
												</div>
											</div>
									
									</div>
								</section>
							</div>
						</div>

					<!-- end: page -->


<div class="col">
			<h4>Facebook URL</h4>
            <input type="text" name="Facebook_URL"  value="<?php echo $Facebook_URL ?>" class="form-control" placeholder="Facebook_URL" required>
         </div>
		 
		 <div class="col">
		 <h4>Google URL</h4>
            <input type="text" name="Google_URL" value="<?php echo $Google_URL ?>"  class="form-control" placeholder="Google_URL" required>
         </div>
		 <div class="col">
		 <h4>Twitter URL</h4>
            <input type="text" name="Twitter_URL" value="<?php echo $Twitter_URL ?>"  class="form-control" placeholder="Twitter_URL" required>
         </div>
</div>
		 <div class="col">
<div class="form-group">
      <h4>Facebook-Logo</h4>
      <input type="file" name="Facebook_Logo" value="<?php echo $row["Facebook_Logo"]; ?>"  /><img src="../logo/<?php echo $row["Facebook_Logo"]; ?>" class="form-control-file" id="imageUpload" >
   </div>
</div>

   <div class="col">
<div class="form-group">
      <h4> Google-Logo</h4>
      <input type="file" name="google_logo" value="<?php echo $row["google_logo"]; ?>"  /><img src="../logo/<?php echo $row["google_logo"]; ?>" class="form-control-file" id="imageUpload" >
   </div>
   <div class="col">
<div class="form-group">
      <h4>Twitter-Logo</h4>
      <input type="file" name="twitter_logo" value="<?php echo $row["twitter_logo"]; ?>"  /><img src="../logo/<?php echo $row["twitter_logo"]; ?>" class="form-control-file" id="imageUpload" >
   </div>

   <div class="col">
            <input type="text" name="Company_Name" value="<?php echo $Company_Name ?>"  class="form-control" placeholder="Company_Name" required>
         </div>
	
		 <div class="col">
   <h4>Footer Description</h4>
   <input type="text" name="Footer_Description"  value="<?php echo $Footer_Description ?>" class="form-control" placeholder="Footer_Description" required>
</div>
      <div class="row">
         <div class="col text-center">
            <input type="submit" name="submit" value="Update-Setting" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
         </div>
      </div>
   </form>
  
            </div>
         </div>
      </div>
   </div>
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
   <!-- end: page -->
</section>
</div>
</section>
<?php
   include('includes/footer.php');
   ?>