<?php
$servername = "localhost";
$username = "root";
$password = "";
$databse="ptcl_connection";

// Create connection
$connection = new mysqli($servername, $username, $password,$databse);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

