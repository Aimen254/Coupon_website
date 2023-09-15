<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `slider` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:slider.php');
    } else{
        die(mysqli_error($con));
    }
}
?>