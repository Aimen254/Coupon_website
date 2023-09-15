<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `coupon` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:coupons.php');
    } else{
        die(mysqli_error($con));
    }
}
?>