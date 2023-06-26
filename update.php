<?php

if($_POST){
  $newEmail=$_POST['fname'];
  $newPass=$_POST['password'];
  $id = $_POST["id"];
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

// sql to update table
$sql = "UPDATE users  SET  password = $newPass where id= '$id'" ;

if (mysqli_query($conn, $sql)) {
  echo "Table Information created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
}
var_dump($_POST);
?>


