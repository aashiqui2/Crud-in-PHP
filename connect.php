<?php 

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);


if (!$conn){
    die(mysqli_error($conn));
}


 ?>