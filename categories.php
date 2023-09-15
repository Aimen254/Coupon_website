<?php
   include('include/header.php');
   include ('include/connection.php');
   $sql= "Select * from `category`";
   $result=mysqli_query($con,$sql);
   
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
                              <button type="submit" name="search" style="display:none;"><i class="fa fa-search"></i></button>
                           </div>
                        </div>
                  </div>
                  </form>            
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section role="main" class="content-body">
   <div class="col-lg-12">
      <div class="row">
         <div class="container">
            <h1>Browse Topus sales by Categories </h1>
            <div class="grouplinks">
               <span>Search Categories From Letters:</span>
               <div>
                  <a href="#cat-0-9">0-9</a>
                  <a href="#cat-A">A</a>
                  <a href="#cat-B">B</a>
                  <a href="#cat-C">C</a>
                  <a href="#cat-D">D</a>
                  <a href="#cat-E">E</a>
                  <a href="#cat-F">F</a>
                  <a href="#cat-G">G</a>
                  <a href="#cat-H">H</a>
                  <a href="#cat-I">I</a>
                  <a href="#cat-J">J</a>
                  <a href="#cat-K">K</a>
                  <a href="#cat-L">L</a>
                  <a href="#cat-M">M</a>
                  <a href="#cat-N">N</a>
                  <a href="#cat-O">O</a>
                  <a href="#cat-P">P</a>
                  <a href="#cat-Q">Q</a>
                  <a href="#cat-R">R</a>
                  <a href="#cat-S">S</a>
                  <a href="#cat-T">T</a>
                  <a href="#cat-U">U</a>
                  <a href="#cat-V">V</a>
                  <a href="#cat-W">W</a>
                  <a href="#cat-X">X</a>
                  <a href="#cat-Y">Y</a>
                  <a href="#cat-Z">Z</a>
               </div>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="stores-0-9">Stores Start from <strong>(0-9)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT Category_Name,category_image FROM category where Category_Name like '0%' or Category_Name like '0%';";
                     $result = $con->query($sql);
                     
                     if ($result->num_rows > 0) {
                     // output data of each row
                     while($row = $result->fetch_assoc()) {
                     echo '<li> <a href="store/category-detail.php">';
                     echo '<div class="web_imagebox">';
                     echo '<img src="images/'.$row["category_image"]. '" alt="Description of image">';
                     echo '<h3>' . $row["Category_Name"] .'</h3>';
                     
                     echo '</div></a></li>';
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>               
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-A">Categories Start from <strong>(A)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'a%' or 	Category_Name like 'A%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-B">Categories Start from <strong>(B)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'b%' or 	Category_Name like 'B%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-C">Categories Start from <strong>(C)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'c%' or 	Category_Name like 'C%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-D">Categories Start from <strong>(D)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'D%' or 	Category_Name like 'd%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-E">Categories Start from <strong>(E)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'e%' or 	Category_Name like 'E';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-F">Categories Start from <strong>(F)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'f%' or 	Category_Name like 'F%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>                   
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-G">Categories Start from <strong>(G)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'g%' or 	Category_Name like 'G%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-H">Categories Start from <strong>(H)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'h%' or 	Category_Name like 'H%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-I">Categories Start from <strong>(I)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'i%' or 	Category_Name like 'I%';";
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
                     $store_id = "category-detail.php?category_id=".ltrim($row['id']); ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-J">Categories Start from <strong>(J)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'j%' or 	Category_Name like 'J%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-K">Categories Start from <strong>(K)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'k%' or 	Category_Name like 'K%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-L">Categories Start from <strong>(L)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'l%' or 	Category_Name like 'L%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-M">Categories Start from <strong>(M)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'm%' or 	Category_Name like 'M%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>          
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-O">Categories Start from <strong>(O)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'o%' or 	Category_Name like 'O%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-P">Categories Start from <strong>(P)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'p%' or 	Category_Name like 'P%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-Q">Categories Start from <strong>(Q)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'q%' or 	Category_Name like 'Q%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-R">Categories Start from <strong>(R)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'r%' or 	Category_Name like 'R%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-S">Categories Start from <strong>(S)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 's%' or 	Category_Name like 'S%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-T">Categories Start from <strong>(T)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 't%' or 	Category_Name like 'T%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>               
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-U">Categories Start from <strong>(U)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'u%' or 	Category_Name like 'U%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-V">Categories Start from <strong>(V)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'v%' or 	Category_Name like 'V%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-W">Categories Start from <strong>(W)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'w%' or 	Category_Name like 'W%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-X">Categories Start from <strong>(X)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'x%' or 	Category_Name like 'X%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-Y">Categories Start from <strong>(Y)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'y%' or 	Category_Name like 'Y%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="cat-Z">Categories Start from <strong>(Z)</strong> Letter</h2>
               <ul class="categories list-images">
                  <?php
                     $sql = "SELECT id,	Category_Name,category_image FROM category where 	Category_Name like 'z%' or 	Category_Name like 'Z%';";
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
                     $store_id = "category-detail/".$row['id']; ?>
                  <li>
                     <a href=<?php echo $store_id ?> >
                        '
                        <div class="web_imagebox">
                           <img src="images/<?php echo $row["category_image"];?>" alt="Description of image">
                        </div>
                     </a>
                     <h3> <?php echo $row["Category_Name"];?></h3>
                  </li>
                  <?php
                     }
                     } else {
                     echo "0 results";
                     }
                     
                     ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include('include/footer.php');
   ?>