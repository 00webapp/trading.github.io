<?php
include("connection.php");
$msg = false;
if (isset($_POST['add_market'])) {
		$user_id = $_POST['user_id'];
		$market_name  = $_POST['market_name'];
		$market_values  = $_POST['market_values'];
		$mdate = $_POST['mdate'];
		$mtime = $_POST['mtime'];
}
//$adddate=date('Y-m-d');


$sql = "INSERT INTO user_market(user_id, market, market_values, market_date, market_time) VALUES ('$user_id', '$market_name', '$market_values', '$mdate', '$mtime')";
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
			
if (isset($_POST['update_market']))
{
	$market_id  = $_POST['market_id'];
	$market_text  = $_POST['market_text'];
	$mtype = $_POST['mtype'];
	//$qr = "UPDATE user_market set market_text = '$market_text' WHERE market_id = '$market_id'";
	$qr = "UPDATE user_market SET market_text='$market_text', market_type_id= '$mtype' WHERE market_id = '$market_id'";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:users_market.php?msg='.$msg);
			
}

if (isset($_POST['updates_market']))
{
	$market_id  = $_POST['market_id'];
	$market = $_POST['market_name'];
	$market_v = $_POST['market_values'];
	$qr = "UPDATE user_market market='$market', market_values='$market_v' WHERE market_id = '$market_id';";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:market.php?msg='.$msg);
			
}
if (isset($_POST['add_market_type']))
{
	$market_type  = $_POST['market_type'];
	$qr = "INSERT INTO market_type(market_type) VALUES ('$market_type')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:market_type.php?msg='.$msg);
			
}

?>