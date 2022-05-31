<?php
include 'connection.php';
$selectQuery = "DELETE FROM users_details WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($connectQuery, $selectQuery)) {
    header('location:https://crmbux.co.in/Trading/admin/users.php');
} else {
    echo "Error deleting record: " . mysqli_error($connectQuery);
}
mysqli_close($connectQuery);
?>