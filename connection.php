<?php
$servername = "103.21.58.50";
$username = "crmbuxco_trading";
$password = "Kscpl@2011";
$database = "crmbuxco_trading";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>