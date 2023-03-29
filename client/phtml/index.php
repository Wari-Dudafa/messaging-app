<?php // User data
    session_start();
    if(!isset($_SESSION["userData"])) {
        echo "User data is not set!";
        header("Location:createuser.php");
        // Refuse access or redirect to a different page
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
    <script src="../src/js.js"></script>
</head>
<body>
    <?php // Navbar
        include_once("../../classes/navbar.php");
        $navbar = new NavBar();
        $navbar = $navbar->ShowNavbar();
        echo $navbar;
    ?>
    
    <div class="add-friends">
        <input type="text" name="search" id="friendSearchInput" value="" onkeyup="Search(this.value)">

        <div class="search-results-continer">
            <p>People: <span id="searchResults"></span></p>
        </div>
    </div>

    <div class="send-message">
        <input type="text" name="message" id="messageInput" value="">
        <button onclick="SendMessage()">Send</button>
    </div>

</body>
</html>