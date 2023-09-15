<?php
   include('includes/header.php');
   include('includes/sidebar.php');
   include ('connection.php');
   
   if(isset($_POST['Add_Category'])){
   
       $Category_Name=$_POST['Category_Name'];
       $Status=$_POST['Status'];
       $Parent_Category=$_POST['Parent_Category'];
       $meta_title=$_POST['meta_title'];
       $Page_Heading=$_POST['Page_Heading'];
       $meta_keywords=$_POST['meta_keywords'];
       $Category_URL=$_POST['Category_URL'];
       $meta_description=$_POST['meta_description'];
       $category_description=$_POST['category_description'];
       $category_image=$_FILES['category_image']['name'];
       
       $sql="INSERT INTO `category` (`Category_Name`, `Status`,`Parent_Category`,`meta_title`,`Page_Heading`,`meta_keywords`,`Category_URL`,`meta_description`,`category_description`,`category_image`)
                       value('$Category_Name','$Status','$Parent_Category','$meta_title','$Page_Heading','$meta_keywords','$Category_URL','$meta_description','$category_description','$category_image')";                   
         $result=mysqli_query($con,$sql);
   	 if($result){
   		move_uploaded_file($_FILES["category_image"]["tmp_name"],  "../images/".$_FILES["category_image"]["name"]);
   		}else{
   		die(mysqli_error($con));
   		}
   }
   
   ?>		
<section role="main" class="content-body">
   <!-- Modal -->
   <div class="modal fade" id="Addcategorymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header bg-primary text-white">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
            </div>
            <div class="modal-body">
               <form method="post" enctype="multipart/form-data">
                  <div class="row mb-2">
                     <div class="col">
                        <input type="text" class="form-control" name="Category_Name" placeholder="Category Name*" aria-label="Category Name" required>
                     </div>
                     <div class="col">
                        <select class="form-select" name="Status" required>
                           <option selected>Status</option>
                           <option value="1">User</option>
                           <option value="2">Manager</option>
                           <option value="3">Admin</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col">
                        <select class="form-select" name="Parent_Category" required>
                           <option selected>--Parent Category--</option>
                           <option value="1">Apple</option>
                        </select>
                     </div>
                     <div class="col">
                        <textarea name="meta_title" class="form-control" id="" placeholder="Meta Title"></textarea>
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col">
                        <input type="text" class="form-control" name="Page_Heading" placeholder="Page Heading*" aria-label="Heading" required>
                     </div>
                     <div class="col">
                        <textarea name="meta_keywords" class="form-control" id="" placeholder="Meta Kewords"></textarea>
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col">
                        <input type="text" class="form-control" name="Category_URL" placeholder="Category URL" aria-label="Category URL" required>
                     </div>
                     <div class="col">
                        <textarea name="meta_description" class="form-control" id="" placeholder="Meta Description"></textarea>
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col">
                        <textarea name="category_description" class="form-control" id="" placeholder="Category Description"></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="imageUpload">Select Image</label>
                     <input type="file" name="category_image" class="form-control-file" id="imageUpload">
                  </div>
                  <div class="mt-3">
                     <img id="preview" src="#" alt="Preview" style="max-width: 100px; display:none;">
                  </div>
                  <div class="row">
                     <div class="col">
                        <input type="submit" value="Add Category" name="Add_Category" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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
         <h4 class="text-white">List Categories</h4>
      </div>
      <div class="col-md-3 ms-auto">
         <button class="btn bg-success text-white ms-auto" data-bs-toggle="modal" data-bs-target="#Addcategorymodal" type="submit">Add New</button>
      </div>
   </div>
   <table id="example" class="display" style="width:100%">
      <thead>
         <tr>
            <th>id</th>
            <th>Category</th>
            <th>Category_URL</th>
            <th>Parent</th>
            <th>Added_Date</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php
            $sql= "Select * from `category`";
               $result=mysqli_query($con,$sql);
                if($result){
                    while( $row=mysqli_fetch_assoc($result)){
                     $id=$row['id'];
                     $Category_Name=$row['Category_Name'];
                     $Category_URL=$row['Category_URL'];
                     $Parent_Category=$row['Parent_Category'];
                     $Added_Date=$row['Added_Date'];
                    
                      echo ' <tr>
                     <th scope="row">'.$id.'</th>
                     <td>'.$Category_Name.'</td>
                     <td>'.$Category_URL.'</td>
                        <td>'.$Parent_Category.'</td>
                       <td>'.$Added_Date.'</td>
                      
                       <td>
                       <a href="update_category.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
                      <a href="delete_category.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
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