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
          
		  $sql = "SELECT page_title,content FROM add_static where page_title like 'Privacy%' or page_title like 'privacy%';";
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
			        					<h5><p><p><strong>Welcome:</strong></p></p><p><p><?php echo $row["content"];?><br><br><strong>Contact us:</strong></p></p><p><p>Feel free to <a href="index.php">contact us</a> any time using our contact details provided on the website.</p></p></h5> 
			        			    </div>
									<?php } }?>
    		</div>
    	</div>
    </div>		
</div>
</div>





<?php
include("include/footer.php");?>