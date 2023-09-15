<?php
include "include/header.php";


?>

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
     
     

      <form action="php_html_table_data_filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="search"><br><br>
            
                  
   
          
            <?php while($row = mysqli_fetch_array($search_result)):?> 
      <li><a href=<?php echo $row["tracking_link"];?> >
        <div class="web_imagebox">
        <img src="images/<?php echo $row["image"];?>" alt="Description of image">
        <h3> <?php echo $row["store_name"].$row["id"]; ?></h3>

      </div></a></li>
      <?php endwhile;?>

        </div>                 
        </div>
        </div>
       
                 
 
                
           


<?php include "include/footer.php";
?>