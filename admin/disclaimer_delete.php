<?php
include 'connection.php';
$selectQuery = "DELETE FROM disclaimer_table WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($connectQuery, $selectQuery)) {
    header('location:https://crmbux.co.in/Trading/admin/disclaimer.php');
} else {
    echo "Error deleting record: " . mysqli_error($connectQuery);
}
mysqli_close($connectQuery);
?>