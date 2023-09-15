<?php
include "include/header.php";
include "include/connection.php";
$sql = "Select * from `coupon` limit 6";
$result = mysqli_query($con, $sql);
?>
<style>
    .slides{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
@keyframes fade{
  from{
    opacity:0.4;
  }
  to{
    opacity:1;
  }
}

body{
  background:#eeeee;
}

#slider{
  margin:0 auto;
  width:95%;
  overflow:hidden;
}

.slides{
  overflow:hidden;
  animation-name:fade;
  animation-duration:1s;
  display:none;
}

img{
  width:100%;

}

#dot{
  margin:0 auto;
  text-align:center;
}
.dot{
  display:inline-block;
  border-radius:50%;
  background:#d3d3d3;
  padding:8px;
  margin:10px 5px;
}



@media (max-width:567px){
  #slider{
    width:100%;

  }
}

#heading{
  display:block;
  text-align:center;
  font-size:2em;
  margin:10px 0px;

}

    </style>

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
                  <input type="search" class="newtag form-control ui-autocomplete-input search-input" name="Search" placeholder="Search">
                  <button type="submit" name="search" style="display:none;"><i class="fa fa-search" ></i></button>
                 
                </div>
                 
               
              </div>
       
                
              </div>
              
                       </div>
                        </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
<div id="slider"> 
<?php
$sql1 = "Select * from `slider` ";
$result1 = mysqli_query($con, $sql1);

while ($row = mysqli_fetch_assoc($result1)) { ?> 
  <div class="slides">  
  <img src="<?php echo "slider/" . $row["slide_image"]; ?>" width="100%" />
</div>
  
<?php
}?>

  
  <div id="dot"><span class="dot"></span></span><span class="dot"></span><span class="dot"></span></div>
 </div>


 <script>
    var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }

  if(index>slides.length-1){
    index = 0;
  }

  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }

  slides[index].style.display= "block";
  dot[index].classList.add("active");

  index++;

  setTimeout(changeSlide,2000);

}

changeSlide();
    </script>



<div id="coupon-listing-home" >
      <div class="container">
        <div class="row">
         
                  
<?php while ($row = mysqli_fetch_assoc($result)) { ?>  
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
  
  <a href="<?php echo $row["tracking_link"]; ?>"   class="copyCodeBtn coupon-code-container coupon-promotion"></a>
  
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
                           
            <?php } ?>


</div>
</div>
</div>
<div id="top-stores-homepage">
<div class="container">
  
<div class="owl-carousel owl-theme" >

<?php
$sql = "Select * from `add_store`limit 6";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) { ?> 
        
<div class="item" >
  <?php
$category_id = "store-detail.php?store_id=".ltrim($row['id']); ?>
      <a href=<?php echo $category_id ?> >
       
        <img src="<?php echo "images/" .$row[ "image" ]; ?>"style="border-radius:50%;  border:2px solid black; " >
     

      </div></a>
          
         
      
         
        <?php }
?>

</div>
</div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script type="text/javascript">
 var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

   </script>
 <div class="home-subscription">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </div>
    </div>
    <div style="clear:both"></div>
    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
          $sql = "Select * from `setting` ";
$result = mysqli_query($con, $sql);
?>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?> 
    <br>
            <?php echo $row["content"];?>
 
 <?php } ?>         </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php include "include/footer.php";
?>
