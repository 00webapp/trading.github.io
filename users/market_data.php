<?php
include("connection.php");
$msg = false;
if (isset($_POST['add_market_data'])) {
		$user_id = $_POST['user_id'];
		$market_name  = $_POST['market_name'];
}
//$adddate=date('Y-m-d');


$sql = "INSERT INTO market_table(user_id, market_nm) VALUES ('$user_id', '$market_name')";
// print_r($sql);
// die();

//mysqli_query($conn,$sql);
if ($connectQuery->query($sql) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:market.php?msg='.$msg);
?>