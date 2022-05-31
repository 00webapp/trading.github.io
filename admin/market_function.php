<?php
include("connection.php");
$msg = false;
if (isset($_POST['update_market']))
{
	$id = $_POST['market_id'];
	$mtext  = $_POST['market_text'];
	$mtype = $_POST['mtype'];
	$mstatus = $_POST['mstatus'];
	//echo $about;

	$qr = "UPDATE user_market SET market_text='$mtext', market_type_id='$mtype', market_status='$mstatus' WHERE market_id = '$id'";
	//"INSERT INTO about_table(about_info) VALUES ('$about')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:index.php?msg='.$msg);
			
}
?>