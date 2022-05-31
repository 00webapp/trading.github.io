<?php
include("connection.php");
$id = $_GET['user_id'];
$status = $_GET['user_status'];
// echo $status;
 $q = "UPDATE users_details SET user_status = '$status' WHERE user_id = '$id'";
 //echo $q;

$qr = mysqli_query($connectQuery,$q);
// echo $q;
header('Location:users.php');
?>