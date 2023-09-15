<?php
   include('include/header.php');
   include ('include/connection.php');
   $sql= "Select * from `add_store`";
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
            <h1>Browse Topus sales by Stores </h1>
            <div class="grouplinks">
               <span>Search Stores From Letters:</span>
               <div>
                  <a href="#stores-0-9">0-9</a>
                  <a href="#stores-A">A</a>
                  <a href="#stores-B">B</a>
                  <a href="#stores-C">C</a>
                  <a href="#stores-D">D</a>
                  <a href="#stores-E">E</a>
                  <a href="#stores-F">F</a>
                  <a href="#stores-G">G</a>
                  <a href="#stores-H">H</a>
                  <a href="#stores-I">I</a>
                  <a href="#stores-J">J</a>
                  <a href="#stores-K">K</a>
                  <a href="#stores-L">L</a>
                  <a href="#stores-M">M</a>
                  <a href="#stores-N">N</a>
                  <a href="#stores-O">O</a>
                  <a href="#stores-P">P</a>
                  <a href="#stores-Q">Q</a>
                  <a href="#stores-R">R</a>
                  <a href="#stores-S">S</a>
                  <a href="#stores-T">T</a>
                  <a href="#stores-U">U</a>
                  <a href="#stores-V">V</a>
                  <a href="#stores-W">W</a>
                  <a href="#stores-X">X</a>
                  <a href="#stores-Y">Y</a>
                  <a href="#stores-Z">Z</a>
               </div>
            </div>
            <div class="store-letter-group">
               <h2 class="stores" id="stores-0-9">Stores Start from <strong>(0-9)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     //$sql = "SELECT store_name,image FROM add_store where store_name like '0%' or store_name like '0%';";
                         //$sql = "SELECT id,store_name,image FROM add_store where id = 216 ;";
                         $sql = "SELECT id,store_name,store_heading,image FROM add_store ;";
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
            
              
                     $category_id = "store-detail/".$row['store_heading'];  ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-A">Stores Start from <strong>(A)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'A%' or store_name like 'a%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-B">Stores Start from <strong>(B)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'b%' or store_name like 'B%' ;";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-C">Stores Start from <strong>(C)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'c%' or store_name like 'C%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-D">Stores Start from <strong>(D)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'd%' or store_name like 'D%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-E">Stores Start from <strong>(E)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'e%' or store_name like 'E%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-F">Stores Start from <strong>(F)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'f%' or store_name like 'F%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-G">Stores Start from <strong>(G)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'g%' or store_name like 'G%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-H">Stores Start from <strong>(H)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'h%' or store_name like 'H%';";
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
                     $category_id = "store-detail/".['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-I">Stores Start from <strong>(I)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'i%' or store_name like 'I%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-J">Stores Start from <strong>(J)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'j%' or store_name like 'J%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-K">Stores Start from <strong>(K)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'k%' or store_name like 'K%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-L">Stores Start from <strong>(L)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'l%' or store_name like 'L%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-M">Stores Start from <strong>(M)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'm%' or store_name like 'M%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-N">Stores Start from <strong>(N)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'n%' or store_name like 'N%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-O">Stores Start from <strong>(O)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'o%' or store_name like 'O%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-P">Stores Start from <strong>(P)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'p%' or store_name like 'P%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-Q">Stores Start from <strong>(Q)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'q%' or store_name like 'Q%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-R">Stores Start from <strong>(R)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'r%' or store_name like 'R%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-S">Stores Start from <strong>(S)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 's%' or store_name like 'S%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-T">Stores Start from <strong>(T)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 't%' or store_name like 'T%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-U">Stores Start from <strong>(U)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'u%' or store_name like 'U%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-V">Stores Start from <strong>(V)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,store_heading,image FROM add_store where store_name like 'v%' or store_name like 'V%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-W">Stores Start from <strong>(W)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,image FROM add_store where store_name like 'w%' or store_name like 'W%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-X">Stores Start from <strong>(X)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,image FROM add_store where store_name like 'x%' or store_name like 'X%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-Y">Stores Start from <strong>(Y)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,image FROM add_store where store_name like 'y%' or store_name like 'Y%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
            <div class="store-letter-group">
               <h2 class="stores" id="stores-Z">Stores Start from <strong>(Z)</strong> Letter</h2>
               <ul class="stores list-images">
                  <?php
                     $sql = "SELECT id,store_name,image FROM add_store where store_name like 'z%' or store_name like 'Z%';";
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
                     $category_id = "store-detail/".$row['store_heading']; ?>
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
         </div>
      </div>
   </div>
</section>
<?php
   include('include/footer.php');
   ?>