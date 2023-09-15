<?php
include('include/header.php');
include ('include/connection.php');




?>

<div class="slider-container">
  <div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $sql = "SELECT * FROM `slider`";
      $result = mysqli_query($con, $sql);
      $active = true;

      while ($row = mysqli_fetch_assoc($result)) {
        $activeClass = ($active) ? 'active' : '';
        echo '<div class="carousel-item ' . $activeClass . '">';
        echo '<a href="' . $row["tracking_link"] . '" target="_blank">';
        echo '<img src="slider/' . $row["slide_image"] . '" class="img-fluid" alt="Slide Image">';
        echo '</a>';
        echo '</div>';
        $active = false;
      }
      ?>
    </div>
  </div>
</div>



<script>
  $(document).ready(function() {
    $('#slider').carousel({
      interval: 5000, // Change slide every 5 seconds
      pause: "hover" // Pause slide on hover
    });
  });
</script>
<link rel="stylesheet" href="style.css">
