<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `Add_static` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:static.php');
    } else{
        die(mysqli_error($con));
    }
}
?>