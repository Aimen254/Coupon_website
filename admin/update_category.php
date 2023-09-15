<?php


include ('connection.php');


$id = $_GET['updateid'];
$sql = "select* from `category` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Category_Name=$row['Category_Name'];
$Status=$row['Status'];
$Parent_Category=$row['Parent_Category'];
$meta_title=$row['meta_title'];
$Page_Heading=$row['Page_Heading'];
$meta_keywords=$row['meta_keywords'];
$Category_URL=$row['Category_URL'];
$meta_description=$row['meta_description'];
$category_description=$row['category_description'];


if(isset($_POST['update_Category'])){

    $Category_Name=$_POST['Category_Name'];
    $Status=$_POST['Status'];
    $Parent_Category=$_POST['Parent_Category'];
    $meta_title=$_POST['meta_title'];
    $Page_Heading=$_POST['Page_Heading'];
    $meta_keywords=$_POST['meta_keywords'];
    $Category_URL=$_POST['Category_URL'];
    $meta_description=$_POST['meta_description'];
    $category_description=$_POST['category_description'];
    
    $sql="update `category` set id=$id, Category_Name='$Category_Name', Status='$Status', Parent_category='$Parent_category',meta_title='$meta_title', Page_Heading='$Page_Heading', meta_keywords='$meta_keywords', Category_URL='$Category_URL', meta_description='$meta_description', category_description='$category_description' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "updated";
      header('location:category.php');
       }else{
       die(mysqli_error($con));
       }
}
include('includes/header.php');
include('includes/sidebar.php');
?>		

<section role="main" class="content-body">
					


      <form method="post">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Category_Name" value="<?php echo $Category_Name ?>" placeholder="Category Name*" aria-label="Category Name" required>
            </div>
            <div class="col">
                <select class="form-select" name="Status" required>
                <!-- <option selected>Status</option> -->
                    <option value="1">User</option>
                    <option value="2">Manager</option>
                    <option value="3">Admin</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
        <div class="col">
                <select class="form-select" name="Parent_Category" required>
                <!-- <option selected>--Parent Category--</option> -->
                    <option value="1">Apple</option>
                </select>
            </div>
            <div class="col">
                <input type="text" name="meta_title" value="<?php echo $meta_title ?>" class="form-control" id="" placeholder="Meta Title"></textarea>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Page_Heading" value="<?php echo $Page_Heading ?>" placeholder="Page Heading*" aria-label="Heading" required>
            </div>
            <div class="col">
                <input type="text" name="meta_keywords" class="form-control" value="<?php echo $meta_keywords ?>" placeholder="Meta Kewords"></textarea>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" name="Category_URL" value="<?php echo $Category_URL ?>" placeholder="Category URL" aria-label="Category URL" required>
            </div>
            <div class="col">
                <textarea name="meta_description" value="<?php echo $meta_description ?>" class="form-control" id="" placeholder="Meta Description"></textarea>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <textarea name="category_description" value="<?php echo $category_description ?>" class="form-control" id="" placeholder="Category Description"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="submit" value="update_Category" name="update_Category"  class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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