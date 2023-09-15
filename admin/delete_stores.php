<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `Add_store` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:stores.php');
    } else{
        die(mysqli_error($con));
    }
}
?>