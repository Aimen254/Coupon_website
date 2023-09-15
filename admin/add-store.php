<?php
   include('includes/header.php');
   include('includes/sidebar.php');
   include ('connection.php');
//if (isset($_POST["Add_New_Store"])) {
//
//    $store_name=$_POST['store_name'];
//    $image=$_FILES['image']['name'];
//    $tracking_link=$_POST['tracking_link'];
//    $impression_code=$_POST['impression_code'];
//    $select_category=$_POST['select_category'];
//    $ppc=$_POST['ppc'];
//    $select_status=$_POST['select_status'];
//    $store_description=$_POST['store_description'];
//    $sql="INSERT INTO `add_store` (`store_name`,`image`,`tracking_link`,`impression_code`,`select_category`,`ppc`,`select_status`,`store_description`)
//                         value('$store_name','$image','$tracking_link','$impression_code','$select_category','$ppc','$select_status','$store_description')";
//    echo $sql;
//    exit;
//}

   if(isset($_POST['Add_New_Store'])){


       $store_name=$_POST['store_name'];
       $image=$_FILES['image']['name'];
       $store_heading=$_POST['store_heading'];
       $tracking_link=$_POST['tracking_link'];
       $impression_code=$_POST['impression_code'];
       $select_category=$_POST['select_category'];
       if(isset($_POST['ppc'])){
           $ppc=$_POST['ppc'];
       }else{
           $ppc = '';
       }

       $select_status=$_POST['select_status'];
       $store_description=$_POST['store_description'];




       $sql="INSERT INTO `add_store` (`store_name`,`image`,`store_heading`,`tracking_link`,`impression_code`,`select_category`,`ppc`,`select_status`,`store_description`)
                         value('$store_name','$image','$store_heading','$tracking_link','$impression_code','$select_category','$ppc','$select_status','$store_description')";
                $result=mysqli_query($con,$sql);
                if($result){
                   move_uploaded_file($_FILES["image"]["tmp_name"],  "../images/".$_FILES["image"]["name"]);
                   }else{
                   die(mysqli_error($con));
                   }
     }





?>
<section role="main" class="content-body">
   <!-- start: page -->
   <div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Add Store</h4>
      </div>
   </div>
   <form method="post" name="add_store_form" enctype="multipart/form-data">
      <div class="row mb-2 mt-3">
         <div class="col">
            <input type="text" name="store_name" class="form-control" placeholder="Store Name" required>
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
            <textarea name="impression_code" class="form-control" id="" placeholder="Impression Code"></textarea>
            
         </div>
         <div class="col">
            <input type="text" name="tracking_link" class="form-control" id="" placeholder="Tracking Link">
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
         
      <input type="text" name="store_heading" class="form-control" placeholder="Store Heading" required> 
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
            <select name="select_status" id="" class="form-control">
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
         
            <textarea name="store_description" class="form-control" id="" placeholder="Store Description"></textarea>
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
            <input type="submit" name="Add_New_Store" value="Add_New_Store" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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