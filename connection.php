<?php
// if using database, first thing to keep in mind is connect to database. 
// here we simply try to connect to database use some mysql func
$dbServername = "localhost";
$username = "root";
$password = "";
$dbName = "image_matting";
// Create connection
$conn = mysqli_connect($dbServername, $username, $password, $dbName);

// Check connection
// if (mysqli_connect_errno()) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>