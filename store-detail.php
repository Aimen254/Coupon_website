<?php
   include('include/header.php');
   include('include/connection.php');
   //$sql= "Select * from `coupon` where store_id = '".$_GET['store_id']."'";
   
   $sql= "SELECT c.coupon_title AS coupon_title , c.tracking_link AS tracking_link ,c.coupon_description  as coupon_description,	c.Added_Date as Added_Date,c.expiry_date as  expiry_date  ,s.store_name AS store_name ,s.image as image, s.store_heading as store_heading,s.store_description as store_description,
   cg.Category_Name AS category_name  FROM  coupon c 
   LEFT JOIN  add_store s ON  s.id = c.store_id
   LEFT JOIN  category cg ON  cg.id = c.category_id
   where store_heading = '".$_GET['store']."'";
   
   //echo "<pre>";
   //print_r($sql);
   //exit;
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
                              <button type="submit" name="search"style="display:none;"><i class="fa fa-search"></i></button>
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




<div class="col-lg-12">
   <div class="row">
            <?php
                  while($row=mysqli_fetch_assoc($result)){
                         ?>
      <div class="container">
         <div class="row" itemscope="" itemtype="http://schema.org/Store">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="float:right;">
               <div class="storeTopContainer">
                  <div class="storeLogo">
                     <a href="<?php echo $row["tracking_link"];?>" class="imgstore" target="_blank" itemprop="url">
                        <div class="web_imagebox">
                           <img class="store-thumb" src="./images/<?php echo $row["image"];?>"itemprop="logo" style="width:150px;">
                        </div>
                     </a>
                  </div>
                  <div class="about-store" itemprop="description">
                     <div class="about-store" itemprop="description">
                     </div>
                     <hr style="border-top: 1px solid #e4e2e2; margin:10px 0">
                     <div class="about-store" itemprop="description">
                        <div class="content">
                           <p><?php echo $row["store_description"];?></p>
                        </div>
                     </div>
                     <a href="<?php echo $row["tracking_link"];?>" target="_blank"  id="btnShopAT" class="btn btn-purple btn-md"><strong><span itemprop="name"></span></strong><?php echo $row["store_name"];?></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="float:left;" id="storeCouponLoopContainer">
               <h1 class="section-heading ActiveHeading clear"><?php echo $row["store_heading"];?></h1>
                 
               <br>
               <?php
                  while($row=mysqli_fetch_assoc($result)){
                         ?>
               <div class="col-md-12 loopCoupon">
                  <div class="coupon-item verified-Coupon " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                     <meta itemprop="name">
                     <div class="row">
                        <div class="col-md-8 col-sm-12 couponLeft">
                           <span class="verified-coupon-container">
                           <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Verified
                           </span>
                           <span class="totalViews">
                           <strong>16</strong> Times Used
                           </span>
                           <h3 itemprop="name">
                              <a href="<?php echo $row["tracking_link"];?>" target="_blank" data-id="12891" data-clipboard-text="HONEY5"><?php echo $row["coupon_title"];?></a>
                           </h3>
                           <div class="coupon-description">
                              <p itemprop="description"><?php echo $row["coupon_description"];?></p>
                           </div>
                           <span class="coupon-cat">
                           Category 
                           <a href="<?php echo $row["tracking_link"];?>"><?php echo $row["category_name"];?></a></span>
                        </div>
                        <div class="col-md-4 col-sm-12 couponRight">
                           <a href="<?php echo $row["tracking_link"];?>" target="_blank"
                              data-clipboard-text="&nbsp;" class="copyCodeBtn coupon-code-container coupon-promotion ccpy"></a>     
                           <!-- <span class="coupon-posted-date">Posted Mar <?php echo $row["Added_Date"];?></span> -->
                           <span class="coupon-expire-date">Will Expire on:<?php echo $row["expiry_date"];?> </span>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
                              ?>
            </div>
         </div>
         <div class="popularStores-Sp sm-show">
         </div>
     
         </div>
         <?php
                  }
                              ?>
      </div>
 
</div>
<?php
   include('include/footer.php');
   ?>


