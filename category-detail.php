<?php
   include('include/header.php');
   include('include/connection.php');
   //$sql= "Select * from `coupon` where store_id = '".$_GET['store_id']."'";
   $sql= "SELECT c.coupon_title AS coupon_title , c.tracking_link AS tracking_link ,c.coupon_description  as coupon_description,	c.Added_Date as Added_Date,c.expiry_date as  expiry_date  ,s.store_name AS store_name ,
   cg.Category_Name AS Category_Name  FROM  coupon c 
   
   LEFT JOIN  add_store s ON  s.id = c.store_id
   LEFT JOIN  category cg ON  cg.id = c.category_id
   where category_id = '".$_GET['category_id']."'";
   
   //echo "<pre>";
   //print_r($sql);
   //exit;
   $result=mysqli_query($con,$sql);
   ?>
<div class="col-lg-12">
   <div class="row">
      <div class="container">
         <div class="row" itemscope="" itemtype="http://schema.org/Store">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="float:right;">
               <div class="storeTopContainer">
                  <div class="about-store" itemprop="description">
                     <div class="about-store" itemprop="description">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="float:left;" id="storeCouponLoopContainer">
               <h1 class="section-heading ActiveHeading clear"></h1>
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
                           <strong>37</strong> Times Used
                           </span>
                           <h3 itemprop="name">
                              <a href="<?php echo $row["tracking_link"];?>" target="_blank" data-id="13001" data-clipboard-text=" "><?php echo $row["coupon_title"];?></a>
                           </h3>
                           <div class="coupon-description">
                              <p itemprop="description"><?php echo $row["coupon_description"];?></p>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-12 couponRight">
                           <a href="<?php echo $row["tracking_link"];?>" target="_blank"
                              data-clipboard-text="&nbsp;" class="copyCodeBtn coupon-code-container coupon-promotion ccpy"></a>      <span class="coupon-posted-date">Posted Mar <?php echo $row["Added_Date"];?></span>
                           <span class="coupon-expire-date">Will Expire on: <?php echo $row["expiry_date"];?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
                              ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="popularStores-Sp sm-show">
</div>
</div>
</div>
</div>
<?php
   include('include/footer.php');
   ?>