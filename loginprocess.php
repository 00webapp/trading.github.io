<?php

include("connection.php");

session_start();

if(isset($_POST['btnLogin'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $user_status = $_POST['user_status'];
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users_details WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['user_name'] = $row['user_firstname'];
         $_SESSION['lastname'] = $row['user_lastname'];
         $_SESSION['id'] = $row['user_id'];
         header('location:admin/admin_dashboard.php');

      }elseif($row['user_status'] == 'Active'){

         $_SESSION['user_name'] = $row['user_firstname'];
         $_SESSION['lastname'] = $row['user_lastname'];
         $_SESSION['id'] = $row['user_id'];
       $_SESSION['market'] = $row['user_market'];
         header('location:users/index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
       header('location:my_account_login.php');
   }

};
?>

