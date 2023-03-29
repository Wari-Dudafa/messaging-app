<?php // User data
    session_start();
    if(!isset($_SESSION["userData"])) {
        header("Location:createuser.php");
        // Refuse access or redirect to a different page
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="nav-bar-container">
        <div class="add-friends">
            <input type="text" name="search" id="friendSearchInput" value="" onkeyup="Search(this.value)">
    
            <div class="search-results-continer">
                <p><span id="searchResults"></span></p>
            </div>
        </div>
        <div class="profile-picture"></div>
    </div>    

    <div class="chat-container">
        <div class="messages-container">

        </div>
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