<?php
   include('includes/header.php');
   include('includes/sidebar.php');
   include ('connection.php');

   if(isset($_POST['submit'])){
     
     $image=$_FILES['store_image']['name'];
     $coupon_title=$_POST['coupon_title'];
     $tracking_link=$_POST['tracking_link'];
     $coupon_description=$_POST['coupon_description'];
     $coupon_code=$_POST['coupon_code'];
     $end_date=$_POST['end_date'];
     $select_status=$_POST['select_status'];
     $select_store=$_POST['select_store'];
     $select_category =$_POST['select_category'];



     $sql="INSERT INTO `coupon` (`store_image`,`coupon_title`,`tracking_link`,`coupon_description`,`coupon_code`,`end_date`,`select_status`,`store_id`,`category_id`)
                       value('$image','$coupon_title','$tracking_link','$coupon_description','$coupon_code','$end_date','$select_status','$select_store','$select_category')";
     $result=mysqli_query($con,$sql);
     if($result){
       move_uploaded_file($_FILES["store_image"]["tmp_name"],  "../images/".$_FILES["store_image"]["name"]);
       }else{
       die(mysqli_error($con));
       }
   }
   ?>
<section role="main" class="content-body">
   <!-- start: page -->
   <div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Add Coupon</h4>
      </div>
   </div>
   <form method="post" enctype="multipart/form-data">
      <div class="row mb-2 mt-3">
        
         <div class="col">
            <div class="form-group">
               <label for="imageUpload">Select Image</label>
               <input type="file" name="store_image" class="form-control-file" id="imageUpload">
            </div>
            <div class="mt-3">
               <img id="preview" src="#" alt="Preview" style="max-width: 100px; display:none;">
            </div>
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
            <input type="text" name="coupon_title" class="form-control" placeholder="Coupon Title" required>
         </div>
         <div class="col">
            <textarea name="tracking_link" class="form-control" id="" placeholder="Tracking Link"></textarea>
         </div>
      </div>
<!--       <div class="row mb-2">-->
<!--           <div class="col">-->
<!--               <select name="select_category" id="" class="form-control">-->
<!--                   <option selected>--Category Name--</option>-->
<!--                   <option value="1">pharmacy</option>-->
<!--                   <option value="2">shop</option>-->
<!--                   <option value="2">gift</option>-->
<!--                   <option value="2">bat</option>-->
<!--               </select>-->
<!--           </div>-->
<!--           <div class="col">-->
<!--               <select name="select_category" id="" class="form-control">-->
<!--                   <option selected>--Category Name--</option>-->
<!--                   <option value="1">pharmacy</option>-->
<!--                   <option value="2">shop</option>-->
<!--                   <option value="2">gift</option>-->
<!--                   <option value="2">bat</option>-->
<!--               </select>-->
<!--           </div>-->
<!--       </div>-->
<!--       -->
      <div class="row mb-2">
         <div class="col">
            <textarea name="coupon_description" class="form-control" id="" placeholder="Coupon Description"></textarea>
         </div>
         <div class="col">
            <input type="text" name="coupon_code" class="form-control" placeholder="Coupon Code" >
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
            <label for="addeddaterange" class="form-label text-dark fw-bold">Expiry date Range</label>
            <div class="input-group">
               <input type="date" name="date_from" class="form-control" id="addeddaterange" placeholder="Edited Date Range">
               <span class="input-group-text">To</span>
               <input type="date" name="end_date" class="form-control" placeholder="">
            </div>
            <input type="checkbox" class="mt-2"> Never Expire
         </div>
         <div class="col">
             <div class="col">
                 <!--            <select name="select_category" id="" class="form-control">-->
                 <!--               <option selected>--Category Name--</option>-->
                 <!--               <option value="1">pharmacy</option>-->
                 <!--               <option value="2">shop</option>-->
                 <!--               <option value="2">gift</option>-->
                 <!--               <option value="2">bat</option>-->
                 <!--            </select>-->
                 <?php
                 $sql_store = "SELECT * FROM add_store order by id desc;";
                 $store_result = $con->query($sql_store);
                 ?>
                 <select name="select_store" id="" class="form-control">
                     <option selected>--Store Name--</option>
                     <?php
                     if ($store_result->num_rows > 0) {
                         // output data of each row
                         while($row_store = $store_result->fetch_assoc()) {
                             ?>
                             <option value="<?php echo $row_store["id"]; ?>"><?php echo $row_store["store_name"]; ?></option>
                             <?php
                         }
                     }
                     ?>
                 </select>
             </div>
         </div>
      </div>
      <div class="row mb-2">
         <div class="col">
            <select name="select_status" id="" class="form-control">
               <option selected>--Status--</option>
               <option value="1">Enable</option>
               <option value="2">Disable</option>
            </select>
            <input type="checkbox" class="mt-2"> Featured
         </div>
         <div class="col">
            <div class="row">
               <!-- <div class="col">
                  <select name="Discount_Type" id="" class="form-control">
                      <option selected>--Discount Type--</option>
                      <option value="1">%</option>
                      <option value="2">$</option>
                      <option value="3">&#8364;</option>
                  </select>
                  </div> -->
               <div class="col">
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
               </div>
               <!-- <div class="col">
                  <select name="Coupon_Type" id="" class="form-control">
                      <option selected>--Coupon Type--</option>
                      <option value="1">Clearance</option>
                      <option value="2">Code</option>
                  <option value="3">Deal</option>
                  <option value="4">Exclusive</option>
                  <option value="5">Featured</option>
                  <option value="6">Free Shipping</option>
                  <option value="6">Premium</option>
                  <option value="6">Special Offer</option>
                  <option value="7">Trending</option>
                  </select>
                  </div> -->
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col text-center">
            <input type="submit" name="submit" value="Add New coupon" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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