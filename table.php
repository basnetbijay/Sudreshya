<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudreshya";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE usersInfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Information created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>