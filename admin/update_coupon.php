<?php

 include ('connection.php');


$id = $_GET['updateid'];
$sql = "select* from `coupon` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$store_name=$row['store_name'];
$coupon_title=$row['coupon_title'];
$tracking_link=$row['tracking_link'];
$coupon_description=$row['coupon_description'];
$coupon_code=$row['coupon_code'];
$end_date=$row['end_date'];
$select_status=$row['select_status'];




if(isset($_POST['submit'])){
    $store_name=$_POST['store_name'];
    $store_image=$_FILES['store_image']['name'];
    $coupon_title=$_POST['coupon_title'];
    $tracking_link=$_POST['tracking_link'];
    $coupon_description=$_POST['coupon_description'];
    $coupon_code=$_POST['coupon_code'];
    $end_date=$_POST['end_date'];
    $select_status=$_POST['select_status'];

    $sql="update `coupon` set id=$id, store_name='$store_name', coupon_title='$coupon_title',tracking_link='$tracking_link', coupon_description='$coupon_description', coupon_code='$coupon_code', end_date='$end_date', select_status='$select_status' where id=$id";
   
  $result=mysqli_query($con,$sql);
    if($result){
       echo "updated";
      header('location:coupons.php');
       }else{
       die(mysqli_error($con));
       }
}
include('includes/header.php');
include('includes/sidebar.php');
?>		

<section role="main" class="content-body">
					


<form method="post" enctype="multipart/form-data">
        <div class="row mb-2 mt-3">
            <div class="col">
                <input type="text" name="store_name" value="<?php echo $store_name ?>" class="form-control" placeholder="Store Name" required>
            </div>
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
                <input type="text" name="coupon_title" value="<?php echo $coupon_title ?>" class="form-control" placeholder="Coupon Title" required>
            </div>
            <div class="col">
                <input name="tracking_link" value="<?php echo $tracking_link ?>" class="form-control" placeholder="Tracking Link">
            </div>
        </div>

        <div class="row mb-2">
        <div class="col">
        <textarea name="coupon_description" value="<?php echo $coupon_description ?>" class="form-control" id="" placeholder="Coupon Description"></textarea>
            </div>
            <div class="col">
                <input type="text" name="coupon_code" value="<?php echo $coupon_code ?>" class="form-control" placeholder="Coupon Code" required>
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
                    <!-- <select name="select_category" value="<?php echo $select_category ?>" id="" class="form-control">
                        <option selected>--Parent Category--</option>
                        <option value="1">Awin</option>
                        <option value="2">Flex Offer</option>
                    </select> -->
                </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <select name="select_status" value="<?php echo $select_status ?>" id="" class="form-control">
                    <!-- <option selected>--Status--</option> -->
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
                <input type="checkbox" class="mt-2"> Featured
            </div>
                <div class="col">
                    <div class="row">
                        <!-- <div class="col">
                        <select name="Discount_Type" value="<?php echo $Discount_Type ?>" id="" class="form-control">
                            <option selected>--Discount Type--</option>
                            <option value="1">%</option>
                            <option value="2">$</option>
                            <option value="3">&#8364;</option>
                        </select>
                        </div> -->

                        <!-- <div class="col">
                            <input type="text" name="discount_value" value="<?php echo $discount_value ?>" class="form-control" placeholder="Discount Value" required>
                        </div> -->

                        <!-- <div class="col">
                            <select name="Coupon_Type" value="<?php echo $Coupon_Type ?>" id="" class="form-control">
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
                <input type="submit" name="submit" value="update_coupon" class="bg-danger text-white rounded p-2" style="outline: none; border:none">
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