<?php
include("connection.php");
$id = $_GET['market_id'];
$status = $_GET['market_status'];
echo $id;
 $q = "UPDATE user_market SET market_status = '$status' WHERE market_id = '$id'";
 //echo $q;

$qr = mysqli_query($connectQuery,$q);
// echo $q;
header('Location:users.php');
?>