<?php
   include "include/connection.php";
   $sql = "Select * from `setting`";
   $result = mysqli_query($con, $sql);
   ?>
<!DOCTYPE php>
<php lang="en">
   <head>
      <base href="/coupon/">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Online Coupons, Discount Codes, Free Shipping | CouponOwner.com</title>
      <meta name="description" content="Get online coupons, discount codes, free shipping and promotional deals of famous stores. CouponOwner.com is the leading online coupons’ website.">
      <meta name="keywords" content="online coupons, discount codes, free shipping and promotional deals, couponowner.com, couponowner, coupon owner">
      <link rel="stylesheet" href="theme/css/couponowner.min.css">
      <meta name="linkbuxverifycode" content="32dc01246faccb7f5b3cad5016dd5033">
      <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-XD8G0E8YSK&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" src="../s.skimresources.com/js/193802X1671302.skimlinks.js"></script>
      <meta name="google-site-verification" content="D7Wz0E1UfFQVRPuC0z9mklAIDrybqXVtipJ-G_arGaI">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-83195830-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-83195830-1');
      </script>
      <meta name="ir-site-verification-token" value="-2087101850">
      <meta name="webgains-site-verification" content="c24owgnz">
      <meta name="partnerboostverifycode" content="32dc01246faccb7f5b3cad5016dd5033">
      <meta name="lhverifycode" content="32dc01246faccb7f5b3cad5016dd5033">
      <script>
         BASE_URL = 'index.html';
      </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="jumbotron MainHeader">
         <nav class="navbar navbar-default">
            <div class="container" >
               <div class="navbar-header page-scroll">
                  <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-top"class="dropbtn">
                     <div class="dropdown">
                        <div class="dropdown-content">
                           <a href="index.php">Home</a>
                           <a href="stores.php">Stores</a>
                           <a href="categories.php">Categories</a>
                        </div>
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </div>
                  </button>
                  <?php 
                     $result = $con->query($sql);
                     
                     if ($result->num_rows > 0) {
                     
                       while($row = $result->fetch_assoc()) {
                     
                          
                     
                     ?>
                  <a class="navbar-brand" href="index.php"><img src="./logo/<?php echo $row["store_logo"];?>" alt="Description of image"></a>
                  <?php
                     }
                       
                     } 
                     
                     ?>
               </div>
               <div class="collapse navbar-collapse" id="navigation-top">
                  <div class="menu-top-menu-container">
                     <ul class="nav navbar-nav navbar-right">
                        <li class="hidden"><a href="index.php#page-top"></a></li>
                        <li class="menu-item "><a href="index/">Home</a></li>
                        <li class="menu-item "><a href="stores/">Stores</a></li>
                        <li class="menu-item "><a href="categories/">Categories</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </body>
</php>