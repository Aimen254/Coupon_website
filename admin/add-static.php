<?php
   include('includes/header.php');
   include('includes/sidebar.php');
   include ('connection.php');
   
   if(isset($_POST['Add_New'])){
   
       $page_title=$_POST['page_title'];
       $content=$_POST['content'];
       $name=$_POST['name'];
       $email=$_POST['email'];
       $subject=$_POST['subject'];
       $message=$_POST['message'];
       
      
       
       
       $sql="INSERT INTO `add_static` (`page_title`,`content`,`name`,`email`,`subject`,`message`)
                         value('$page_title','$content','$name','$email','$subject','$message')";
       $result=mysqli_query($con,$sql);
       if($result){
         echo 'connection successfully';
         }else{
         die(mysqli_error($con));
         }
     }
      ?>

<section role="main" class="content-body">
   <!-- start: page -->
   <div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Add Page Info</h4>
      </div>
   </div>
   <form method="post">
      <div class="row mb-2 mt-3">
    
      

         <div class="col">
            <input type="text" class="form-control" name="page_title" placeholder="Page Title" aria-label="Page Title" required>
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
                                       <textarea name="content" class="summernote"  data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</textarea></div>
												</div>
											</div>
									
									</div>
								</section>
							</div>
						</div>
    
					<!-- end: page -->








     
  <div class="col">
            <input type="text" name="name" class="form-control" placeholder="name" >
         </div>
   
         <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email*" aria-label="Email" >
            </div>
            <div class="row">
         <div class="col">
         <input type="text" class="form-control" name="subject" placeholder="subjects"  >
              </div>
              <div class="col">
         <input type="text" class="form-control" name="message" placeholder="message"  >
              </div>
         
      <div class="row">
         <div class="col">
            <input type="submit" name="Add_New" value="Add New" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/examples/examples.advanced.form.js"></script>
