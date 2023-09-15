<?php
   include('includes/header.php');
   include('includes/sidebar.php');
   include ('connection.php');
   ?>		
<section role="main" class="content-body">
   <!-- start: page -->
   <div class="row bg-primary p-2">
      <div class="col-md-6">
         <h4 class="text-white">Coupons List</h4>
      </div>
      <div class="col-md-3 ms-auto">
         <a href="add-coupon.php"><button class="btn bg-success text-white ms-auto" type="submit">Add New</button></a>
      </div>
   </div>
   <table id="example" class="display nowrap" style="overflow-x:auto">
      <thead>
         <tr>
            <th>ID</th>
            <th>Coupon Title</th>
            <th>Store Name</th>
         
            <th>Coupon Code</th>
            <th>Tracking Link</th>
            
            <th>Expiry Date</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php
            $sql= "Select * from `coupon`";
            $result=mysqli_query($con,$sql);
            if($result){
            while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $coupon_title=$row['coupon_title'];
            $store_name=$row['store_name'];
          
            $coupon_code=$row['coupon_code'];
            $tracking_link=$row['tracking_link'];
          
            $end_date=$row['end_date'];
                echo ' <tr>
                
            <th scope="row">'.$id.'</th>
            <td>'.$coupon_title.'</td>
            <td>'.$store_name.'</td>
            
            <td>'.$coupon_code.'</td>
                <td>'.$tracking_link.'</td>
             
                <td>'.$end_date.'</td>
                <td>
                <a href="update_coupon.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
               <a href="delete_coupon.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
               </td>
            </td>
                </tr>';
            
                              }
                          }
            
                              ?>
      </tbody>
   </table>
</section>
<!-- <th><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th> -->
<?php
   include('includes/footer.php');
   ?>