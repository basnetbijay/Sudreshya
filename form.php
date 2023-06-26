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
        
                <label for="">Username </label> <br>
                <input type="text" name="fname" placeholder="Email" required> <br>
    
                <label for="">Password </label> <br>
                <input type="password"  name="password" placeholder="Password" required> <br>
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