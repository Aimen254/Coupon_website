<?php


include ('connection.php');

$id = $_GET['updateid'];
$sql = "select* from `add_store` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$store_name=$row['store_name'];
$store_heading=$row['store_heading']; 
  $tracking_link=$row['tracking_link'];
  $impression_code=$row['impression_code'];
    $select_category=$row['select_category'];
    $select_status=$row['select_status'];
    $ppc=$row['ppc'];
    $store_description=$row['store_description'];
    

if(isset($_POST['update_Store'])){

    $store_name=$_POST['store_name']; 
    $store_heading=$_POST['store_heading']; 
    $tracking_link=$_POST['tracking_link'];
    $impression_code=$_POST['impression_code'];
    $select_category=$_POST['select_category'];
    $select_status=$_POST['select_status'];
    $ppc=$_POST['ppc'];
    $store_description=$_POST['store_description'];
    
    
    
    $sql="update `add_store`set id=$id, store_name='$store_name',store_heading='$store_heading',tracking_link='$tracking_link',impression_code='$impression_code',select_category='$select_category',select_status='$select_status',ppc='$ppc',store_description='$store_description' where id=$id";
                      
      $result=mysqli_query($con,$sql);
    if($result){
      header("location:stores.php");
      }else{
      die(mysqli_error($con));
      }
  }


  include('includes/header.php');
  include('includes/sidebar.php');
?>

<section role="main" class="content-body">
					

					
                        
<div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Update Store</h4>
      </div>
   </div>
   <form method="post">
      <div class="row mb-2 mt-3">
         <div class="col">
            <input type="text" name="store_name" value="<?php echo $store_name ?>" class="form-control" placeholder="Store Name" required>
         </div>
         
         <div class="col">
            <div class="form-group">
               <label for="imageUpload">Select Image</label>
               <input type="file" name="image" class="form-control-file" id="imageUpload">
            </div>
            <div class="mt-3">
               <img id="preview" src="#" alt="Preview" style="max-width: 100px; display:none;">
            </div>
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
         <input type="text" name="impression_code" value="<?php echo $impression_code ?>"  class="form-control"  placeholder="Impression Code" >
            
         </div>
         <div class="col">
            <input type="text" name="tracking_link" value="<?php echo $tracking_link ?>" class="form-control" id="" placeholder="Tracking Link">
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
         
      <input type="text" name="store_heading" value="<?php echo $store_heading ?>" class="form-control" placeholder="Store Heading" required> 
            </div>
     
         <div class="col">
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
            <!-- <input type="text" name="website_address" class="form-control" placeholder="Website Address" required> -->
         </div>
         <div class="col">
            <!-- <textarea name="meta_title" class="form-control" id="" placeholder="Meta Title"></textarea> -->
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
<!--            <select name="select_category" id="" class="form-control">-->
<!--               <option selected>--Category Name--</option>-->
<!--               <option value="1">pharmacy</option>-->
<!--               <option value="2">shop</option>-->
<!--               <option value="2">gift</option>-->
<!--               <option value="2">bat</option>-->
<!--            </select>-->
             <?php
             $sql_category = "SELECT * FROM category order by id desc;";
             $category_result = $con->query($sql_category);
             ?>
    <select name="select_category" id="" class="form-control">
        <option selected>--Category Name--</option>
        <?php
        if ($category_result->num_rows > 0) {
             // output data of each row
             while($row_category = $category_result->fetch_assoc()) {
             ?>
                 <option value="<?php echo $row_category["id"]; ?>"><?php echo $row_category["Category_Name"]; ?></option>
                 <?php
             }
             }
             ?>
    </select>
         </div>
         <div class="col">
            <!-- <textarea name="meta_keyword" class="form-control" id="" placeholder="Meta Keyword"></textarea> -->
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
            <!-- <select name="select_country" id="" class="form-control">
               <option selected>--Select Country--</option>
               <option value="1">Pakistan</option>
               <option value="2">India</option>
               </select> -->
         </div>
         <div class="col">
            <!-- <textarea name="meta_description" class="form-control" id="" placeholder="Meta Description"></textarea> -->
         </div>
      </div>
      <div class="row mb-2">
         <div class="col-6">
            <select name="select_status"   id="" class="form-control">
               <option selected>--Store Status--</option>
               <option value="1">Enable</option>
               <option value="2">Disable</option>
            </select>
         </div>
      </div>
      <div class="row mb-2">
         <div class="col-6">
            <input type="checkbox" name="ppc" class="ms-3"> Added in PPC
            <input type="checkbox"> Featured
         </div>
      </div>
      
   
       
      <div class="row mb-2">
         <div class="col">
         <input type="text" name="store_description" value="<?php echo $store_description ?>"  class="form-control" id="" placeholder="Store Description"/>
         </div>
      </div>
      <!-- <div class="row mb-2">
         <div class="col">
             <input type="button" value="Upload Image" class="bg-success text-white rounded p-2 mb-2" data-bs-toggle="modal" data-bs-target="#Uploadimagemodal" style="outline: none; border:none">
         </div>
         </div> -->
      <!-- <div class="row mb-2">
         <div class="col">
             <textarea name="about_store" class="form-control" id="" placeholder="More About Store"></textarea>
         </div>
         </div> -->
      <div class="row">
         <div class="col text_center">
         <input type="submit" name="update_Store"  class="bg-danger text-white rounded p-2" style="outline: none; border:none">
         </div>
      </div>
   </form>

       <!-- Modal -->
<div class="modal fade" id="Uploadimagemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Image</h1>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="row mb-2">
            <div class="col">
            <input type="file">
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