<?php
include "include/header.php";


?>
<div class="col-lg-12">
  <div class="row">
    <div class="container">
      <div id="search-Stores">
        <div class="row">
          <div class=" col-lg-12 ">
            <div class="form-group">
             
            <form action="search.php" method="post">                                                                         
              
              <div class="icon-addon addon-lg">
                <div id="searchFieldSet">
                  <input type="text" class="newtag form-control ui-autocomplete-input search-input" name="Search" placeholder="Search">
                  <button type="submit" name="search"style="display:none;"><i class="fa fa-search"></i></button>
                 
                </div>
              </div>
       
                
              </div>
              </form>            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php

if(isset($_POST['search']))
{
    $Search = $_POST['Search'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `add_store` WHERE CONCAT(`id`, `store_name`) LIKE '%".$Search."%'";
    
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `add_store`";
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
     
      <h2 style="margin-left:100px;"> store Results</h2>
      <div class="store-letter-group">
               <h2 class="stores" id="stores-A"></h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,image FROM add_store where store_name LIKE '%".$Search."%'";
                     $result = $con->query($sql);
                     
                     if ($result->num_rows > 0) {
                     // output data of each row
                     while($row = $result->fetch_assoc()) {
                     //      echo $row["id"];
                     //      echo "<pre>";
                     //      print_r($row);
                     //      exit;
                     ?>
                  <!--       <li><a href="store/1-stop-florists-coupon-code.php">';-->
                  <?php
                     $category_id = "store-detail.php?store_id=".ltrim($row['id']); ?>
                  <li>
                     <a href=<?php echo $category_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["image"];?>" alt="Description of image">
                           <h3> <?php echo $row["store_name"];?></h3>
                        </div>
                     </a>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
      
                
           


<?php include "include/footer.php";
?>