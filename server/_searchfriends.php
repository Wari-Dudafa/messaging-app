<?php
    session_start();
    $username = $_REQUEST['username'];

    include_once("../classes/user.php");
    $search = new User;
    $result = $search->Search($username);
    foreach ($result as $i) {
        $ii = $i[1];

        if ($i[0] == $_SESSION["userData"][0]){
            echo "
                <div class='add-friend-container'>
                    @$ii
                </div>
            ";

        } else {
            $sender = $_SESSION["userData"][0];
            $reciever = $i[0];
            echo "
                <div class='add-friend-container'>
                    @$ii <button onclick='AddFriend($sender, $reciever)'>Add</button>
                </div>
            ";
        }
    }
?>