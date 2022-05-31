<?php
include("connection.php");
$msg = false;
if (isset($_POST['add_market'])) {
		$user_id = $_POST['user_id'];
		$market_name  = $_POST['market_name'];
		$market_values  = $_POST['market_values'];
}
//$adddate=date('Y-m-d');


$sql = "INSERT INTO user_market(user_id, market, market_values) VALUES ('$user_id', '$market_name', '$market_values')";
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
if (isset($_POST['update_faq']))
{
	$faq_id  = $_POST['faq_id'];
	//echo $faq_id;
	$faq_tl  = $_POST['faq_title'];
	$faq_desc = $_POST['faq_desc'];
	//$qr = "UPDATE user_market set market_text = '$market_text' WHERE market_id = '$market_id'";
	$qr = "UPDATE faq_table SET faq_label='$faq_tl', faq_desc	= '$faq_desc' WHERE faq_id = '$faq_id'";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:faq.php?msg='.$msg);
			
}
if (isset($_POST['delete_faq']))
{
	$faq_id  = $_POST['faq_id'];
	//$qr = "UPDATE user_market set market_text = '$market_text' WHERE market_id = '$market_id'";
	$qr = "DELETE faq_table FROM faq_id = '$faq_id'";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		header('Location:faq.php');
			} 
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
if (isset($_POST['add_faq']))
{
	$faq_title  = $_POST['faq_title'];
	$faq_desc  = $_POST['faq_desc'];
	$qr = "INSERT INTO faq_table(faq_label,faq_desc) VALUES ('$faq_title', '$faq_desc')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:faq.php?msg='.$msg);
			
}
if (isset($_POST['update_user']))
{
	$user_id  = $_POST['user_id'];
	$fname  = $_POST['fname'];
	$lname  = $_POST['lname'];
	$mobile  = $_POST['mobile_no'];
	$email  = $_POST['email_id'];
	$city  = $_POST['city'];
	$market  = $_POST['market'];
	$qr = "UPDATE users_details SET user_firstname='$fname', user_lastname	= '$lname', user_mobileno	='$mobile', user_email	= '$email'  user_city	='$city', user_market	= '$market' WHERE user_id = '$user_id'";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		header('Location:users.php?');
			} else
		 	{
    		header('Location:edit_user.php?');
			}
			header('Location:users.php?');
			
}
?>