<?php
include("connection.php");
$msg = false;
if (isset($_POST['updates_market'])) {
	$id = $_POST['market_id'];
	$market = $_POST['marketid'];
	$mvalue = $_POST['market_values'];

	$sql = "UPDATE user_market SET market='$market', market_values='$mvalue' WHERE market_id = '$id'";
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
			header('Location:index.php?msg='.$msg);	
}
?>