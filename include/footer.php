<?php

include "include/connection.php";
$sql = "Select * from `setting` ";
$result = mysqli_query($con, $sql);
?>

<footer >
  <div class="container" >
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-sm-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="menu-footer-container">
                <ul class="footerLinks">
                  <li  class="menu-item"><a href="index.php" aria-current="page">Topus sales.com</a></li>
                  <li  class="menu-item"><a href="about.php">About Us</a></li>
                  <li  class="menu-item"><a href="privacy-policy.php">Privacy Policy</a></li>
                  <li  class="menu-item"><a href="contact-us.php">Contact Us</a></li>
                </ul>
         
              </div>
            </div>
          </div>
          
          <div class="col-md-12 col-sm-12 col-xs-12">
       
            <div class="row"> 
    
              <div class="footer-social">
              <?php
               while ($row = mysqli_fetch_assoc($result)) { ?>
              
                <a href="<?php echo $row["Facebook_URL"];?>">
                    <img src="./logo/<?php echo $row["Facebook_Logo"];?>"  class="img-fluid lazy">
                </a>
             
                                <a href="<?php echo $row["Google_URL"];?>">
                    <img src="./logo/<?php echo $row["google_logo"];?>" class="img-fluid lazy">
                </a>
                
                                <a href="<?php echo $row["Twitter_URL"];?>">
                    <img src="./logo/<?php echo $row["twitter_logo"];?>" class="img-fluid lazy">
                </a>
               
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-sm-12 col-xs-12">
             <div class="row">
              <p class="copyright row clear" ><?php echo $row["Footer_Description"];?></p>
            </div>
            <div class="row">
              <p class="copyright row clear" > <a href="https://codemaze.org/"><?php echo $row["Company_Name"];?></a></p>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</footer>
<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
<link href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<script src="theme/js/cowner.min.js"></script>
