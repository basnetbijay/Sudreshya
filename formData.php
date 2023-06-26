<?php

if($_POST){
    $email=$_POST['fname'];
    $pass=$_POST['password'];

    // var_dump($password);
    
    $servername = "localhost";
    $username = "root";
    $password = "";
$dbname="sudreshya";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
$sql = "INSERT INTO users (email, `password`)
VALUES ('$email' , '$pass')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

?>