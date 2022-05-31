<?php
	include("connection.php");

	$market_type_id=$_POST['market_type_id'];
	$market_type=$_POST['market_type'];
	$sql = "UPDATE market_type SET market_type ='$market_type' WHERE market_type_id = $market_type_id";
	if (mysqli_query($connectQuery, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($connectQuery);
?>