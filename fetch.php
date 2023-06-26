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

$sql = "SELECT *FROM users  WHERE id=1";
$result = mysqli_query($conn, $sql);
// var_dump($result

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

// var_dump($row);
    // echo "id: " . $row ["id"]. " - email: " . $row["email"]. " " . $row["password"]. "<br>";
$id = $row ["id"];
$email = $row["email"];
$pass = $row["password"];


 
} 
else 
{
  die ("0 results");
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <link rel="stylesheet" href="form.css">
</head>
<body>

    <div class="container">
        <h2>Student Login</h2>
        <div class="content">
        <form action="formData.php" method= "POST">
        <input type="hidden" name="id" value ="<?php echo $id ?>">
                <label for="">Username </label> <br>
                <input type="text" name="fname" value ="<?php echo $email ?>"  required> <br>
    
                <label for="">Password </label> <br>
                <input type="password"  name="password" value ="<?php echo $pass ?>" required> <br>
                <div class="forgot"><a href="">forgot password?</a></div> 
                <div class="forbtn"><button class="btn">Sign Up</button></div> <br>
            
        </form> 

        <div class="signup">
            <h4>Don't Have a Account</h4>
            <h5><a href="">SIGNUP</a></h5>
        </div>

        </div>
    </div>
</body>
</html>

