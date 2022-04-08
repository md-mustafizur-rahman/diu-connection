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

// SQL qurey to Creating a database in MySQL.
$sql = "CREATE DATABASE diuconnection";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error! creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>