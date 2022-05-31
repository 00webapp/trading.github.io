<?php
include 'connection.php';
$selectQuery = "DELETE FROM faq_table WHERE faq_id='" . $_GET["faq_id"] . "'";
if (mysqli_query($connectQuery, $selectQuery)) {
    header('location:https://crmbux.co.in/Trading/admin/faq.php');
} else {
    echo "Error deleting record: " . mysqli_error($connectQuery);
}
mysqli_close($connectQuery);
?>