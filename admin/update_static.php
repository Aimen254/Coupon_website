<?php

include ('connection.php');


$id = $_GET['updateid'];
$sql = "select* from `Add_static` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$page_title=$row['page_title'];
 

  $content=$row['content'];
 

if(isset($_POST['update_static'])){

    $page_title=$_POST['page_title'];
  
    $content=$_POST['	content'];
    
    
    $sql="update `Add_static` set id=$id, page_title='$page_title', 	content='$content' where id=$id";
     $result=mysqli_query($con,$sql);
  if($result){
     echo "updated";
    header('location:static.php');
     }else{
     die(mysqli_error($con));
     }
  }
  include('includes/header.php');
include('includes/sidebar.php');
   ?>




<section role="main" class="content-body">
					

				

                        
                    <form method="post">
        <div class="row mb-2 mt-3">
            <div class="col">
                <input type="text" class="form-control" name="page_title" value="<?php echo $page_title ?>" placeholder="Page Title" aria-label="Page Title" required>
            </div>
           
        </div>

        <div class="row mb-2">
       
          
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


        <div class="row">
            <div class="col">
                <input type="submit" name="update_static" value="update_static" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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