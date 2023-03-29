<?php // User data
    session_start();
    if(!isset($_SESSION["userData"])) {
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
    <title>MessagingApp</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="../src/js.js"></script>
</head>
<body>

    <div class="nav-bar-container">
        <div class="add-friends">
            <input type="text" name="search" id="friendSearchInput" value="" onkeyup="Search(this.value)">
    
            <div class="search-results-continer">
                <p>People: <span id="searchResults"></span></p>
            </div>
        </div>
    </div>    

    <div class="chat-container">
        <div class="send-message">
            <input type="text" name="message" id="messageInput" value="">
            <button onclick="SendMessage()">Send</button>
        </div>
    </div>

    <div class="friends-container">
        <?php
            include_once("../../classes/user.php");

            $number = $_SESSION["userData"][0];
            $getfriends = new User;
            $friends = $getfriends->GetFriends($number);
            foreach ($friends as $i){
                echo $getfriends->ViewFriends($i);
            }
        ?>
    </div>

</body>
</html>