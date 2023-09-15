<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `add_user` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:users.php');
    } else{
        die(mysqli_error($con));
    }
}
?>