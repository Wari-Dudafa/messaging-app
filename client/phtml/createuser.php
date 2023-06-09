<?php // User data
    session_start();
    if(!isset($_SESSION["userData"])) {
        echo "User data is not set!";
        // Refuse access or redirect to a different page
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="../src/js.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="signup-form">
        <h1>Sign up</h1>
        <form action="../../server/_signup.php" method="post">
            <p1>Name: <p1><input type="text" name="name"><br>
            <p1>Username: <p1><input type="text" name="username"><br>
            <input type="submit" value="Sign up"><br>
        </form>
    </div>

    <div class="login-form">
        <h1>Login</h1>
        <form action="../../server/_login.php" method="post">
            <p1>Name: <p1><input type="text" name="name"><br>
            <p1>Username: <p1><input type="text" name="username"><br>
            <input type="submit" value="Login"><br>
        </form>
    </div>

    
</body>
</html>