<?php
$servername = "localhost";
$username = "root";
$password = "";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password);

// I am Checking connection here. 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>