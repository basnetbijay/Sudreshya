<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sudreshya";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usersInfo";
    // $result = $conn->query($sql);
    $result = (mysqli_query($conn , $sql));
    $i=0;

    if ($result->num_rows > 0) {
        echo "<tr>
            <th scope='row'>1</th>
            <td>mark@gmail.com</td>
            <td>Oasfhasdhtto</td>
        </tr>";
    }
    mysqli_close($conn);

    ?>
    </tbody>
</body>
</html>