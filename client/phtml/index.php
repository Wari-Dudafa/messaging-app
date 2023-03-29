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

    <div class="chat-container">
        <div class="messages-container">

        </div>
        <div class="send-message">
            <input type="text" name="message" id="messageInput" value="">
            <button onclick="SendMessage()">Send</button>
        </div>
    </div>

    <div class="friends-container">

        <div class="nav-bar-container">
            <div class="add-friends">
                <input type="text" name="search" id="friendSearchInput" value="" onkeyup="Search(this.value)" placeholder="Search for friends">
        
                <div class="search-results-continer">
                    <p><span id="searchResults"></span></p>
                </div>
            </div>

            <div class="requests">
                <button>View friend requests</button>

                <div class="requests-continer">
                    <p><span id="requests-output"></span></p>
                </div>
            </div>
            
            <div class="logout">
                <button>Logout</button>

                <!-- <div class="confirm-logout">
                    <p>Are you sure you want to log out?<span id="confirm-logout-output"></span></p>
                    <button><span class="glyphicon glyphicon-ok"></span></button>
                    <button><span class="glyphicon glyphicon-remove"></span></button>
                </div> -->
            </div>
        </div>
        
        <div class='friend-profile' id="user-profile">
            <button id='friend-profile-button'></button>
            <div class='friend-profile-name'>
            <?php echo $_SESSION["userData"][1]?>
            </div>
            <div class='friend-profile-username'>
            <?php echo "@".$_SESSION["userData"][2]?>
            </div>
        </div>

        <div class="scroll-container">
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

    </div>

</body>
</html>