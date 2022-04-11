<?php
$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password,"diuconnection");
if ($con->connect_error) {
    echo "Error " .$con->connect_error;
} else {
    echo "Successfully Work";
}
