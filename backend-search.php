

<?php

if(isset($_POST['search']))
{
    $Search = $_POST['Search'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `coupon` WHERE CONCAT(`id`, `store_name`, `store_id`, `category_id`) LIKE '%".$Search."%'";
    
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `coupon`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "fahad");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>



          

      <!-- populate table from mysql database -->
     
    
<div id="coupon-listing-home">
      <div class="container">
        <div class="row">
         
                  
        <?php while($row = mysqli_fetch_array($search_result)):?> 
          <div class="col-md-4 homeCouponGrid">
              <div class="coupon-item" data-sort= "deal">
  <span class="store-logo">
  <a href="<?php echo $row["tracking_link"]; ?>">  
    	<img src="<?php echo "images/" . $row["store_image"]; ?>"  ></a>
  </span>
  <h3>
    <a href="<?php echo $row["tracking_link"]; ?>" data-id="13198" data-clipboard-text=" "><h3><b><?php echo $row[
        "coupon_title"
    ]; ?></b> </h3></a>
  </h3>
  
  <a href="<?php echo $row[
      "tracking_link"
  ]; ?>" target="_blank" data-id="13198" data-clipboard-text=" " class="copyCodeBtn coupon-code-container coupon-promotion"></a>
  
  <div class="coupon-description">
    <p class="lessContent short-desc" str-length="30"><?php echo $row[
        "coupon_description"
    ]; ?></p>
  </div>
  <span class="coupon-expire-date">Will Expire on:<?php echo $row[
      "end_date"
  ]; ?></span>
 
  <a href="<?php echo $row[
      "tracking_link"
  ]; ?>" class="link-blue"> <?php echo $row["tracking_link"]; ?></a>
  	<span class="verified-coupon-container"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Verified</span>
 

</div>
</div>


        <?php endwhile;?>
        </div>                 
        </div>
        </div>
       
                 
 
                
           


