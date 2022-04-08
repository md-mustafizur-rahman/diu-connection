<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diuconnection";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// SQL query to creating a table in (School) database.
$sql = "CREATE TABLE users (
  name VARCHAR(30) NOT NULL,
  public_email VARCHAR(40) NOT NULL,
  url VARCHAR(10),
  bio VARCHAR(30),
  twitter_username VARCHAR(40),
  linkedIn_username VARCHAR(10),
  facebook_username VARCHAR(30),
  department VARCHAR(40),
  location VARCHAR(10) 
)";

if (mysqli_query($conn, $sql)) {
  echo "Table students created successfully";
} else {
  echo "Error! creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>