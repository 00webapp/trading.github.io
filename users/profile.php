<?php 
include("connection.php");
if (isset($_POST['update_profile']))
{
	$user_id  = $_POST['user_id'];
	$fname  = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$mobile_no  = $_POST['mobile_'];
	$email_id  = $_POST['email_id'];
	$city = $_POST['city'];
	$market = $_POST['market'];
	//$qr = "UPDATE user_market set market_text = '$market_text' WHERE market_id = '$market_id'";
	$qr = "UPDATE `users_details` SET user_firstname='$fname', user_lastname ='$lname', user_mobileno = '$mobile_no', user_email = '$email_id', user_city = '$city', user_market = '$market' WHERE user_id = '$user_id'";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    			header('Location:user_profile.php');
			} else
		 	{
    			echo "Failed";
			}
			header('Location:user_profile.php');
			
}
?>