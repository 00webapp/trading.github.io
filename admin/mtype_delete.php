<?php
include 'connection.php';
$selectQuery = "DELETE FROM market_type WHERE market_type_id='" . $_GET["market_id"] . "'";
if (mysqli_query($connectQuery, $selectQuery)) {
    header('location:https://crmbux.co.in/Trading/admin/market_type.php');
} else {
    echo "Error deleting record: " . mysqli_error($connectQuery);
}
mysqli_close($connectQuery);
?>