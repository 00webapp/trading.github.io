<?php
include("connection.php");
$msg = false;
if (isset($_POST['btnRegister'])) {
		$user_firstname = $_POST['firstname'];
		$user_lastname  = $_POST['lastname'];
		$user_mobileno  = $_POST['mobile'];
		$user_email     = $_POST['email_id'];
		$user_city      = $_POST['city'];
		$user_market    = $_POST['market_name'];
		$username       = $_POST['username'];
		$password		= $_POST['password'];
		$user_type      = 'user';
		$deleted 		= '0';
}
//$adddate=date('Y-m-d');


$sql = "INSERT INTO users_details(user_firstname, user_lastname, user_mobileno, user_email, user_city, user_market, username, password, user_type, is_deleted) VALUES ('$user_firstname', '$user_lastname', '$user_mobileno', '$user_email', '$user_city', '$user_market', '$username', '$password', '$user_type', '$deleted')";
$result = mysqli_query($conn, $sql);
if($result == TRUE)
{
	$last_id = $conn->insert_id;
	$sql_2 = "INSERT INTO market_table(user_id,	market_nm) VALUES('$last_id','$user_market')";
	$result_2 = mysqli_query($conn, $sql_2);
	header('Location:my_account_login.php?msg='.$msg);
}
else {
	echo "no";
	// code...
}
// print_r($sql);
// die();

//mysqli_query($conn,$sql);
// if ($conn->query($sql) === TRUE)
// 		 	{
//     		$msg=TRUE;
// 			} else
// 		 	{
//     		$msg=false;
// 			}
// 			header('Location:create_account.php?msg='.$msg);
			
			$conn->close();

?>