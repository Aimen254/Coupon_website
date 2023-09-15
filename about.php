<?php
include "include/header.php";
include "include/connection.php";
$sql = "Select * from `add_static` ";
$result = mysqli_query($con, $sql);
?>

<br>
<div id="about">
<div class="container"style="background-color: white; border:1px solid black; ">
    <div class="content-box">
    	<div class="box-holder">
		<?php
          
		  $sql = "SELECT page_title,content FROM add_static where page_title like 'About%' or page_title like 'about%';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
//      echo $row["id"];
//      echo "<pre>";
//      print_r($row);
//      exit;
?>
		
    		<div class="blog">
    			<h1><?php echo $row["page_title"];?></h1>
			    <div class="text-box">
			        					<p><h5><?php echo $row["content"];?></h5></p>  
			        			    </div>
									<?php } }?>
    		</div>
    	</div>
    </div>		
</div>
</div>










<?php
include("include/footer.php");?>