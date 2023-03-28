<?php // User data
    session_start();
    if(!isset($_SESSION["userData"])) {
        echo "User data is not set!";
      } else {
        echo "User data is set: ";
        print_r($_SESSION["userData"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../src/sendmessage.js"></script>
</head>
<body>
    <?php // Navbar
        // include_once("../classes/navbar.php");
        // $navbar = new NavBar();
        // $navbar = $navbar->ShowNavbar();
        // echo $navbar;
    ?>

    <div class="send-message">
        <input type="text" name="message" id="messageInput" value="">
        <button onclick="SendMessage()">Send</button>
    </div>
    
</body>
</html>