<?php
    session_start();
    $username = $_REQUEST['username'];

    include_once("../classes/user.php");
    $search = new User;
    $result = $search->Search($username);
    foreach ($result as $x) {
        $y = $x[1];

        if ($x[0] == $_SESSION["userData"][0]){
            echo "
                <div class='add-friend-container'>
                    @$y <button>Me...</button>
                </div>
            ";

        } else {
            echo "
                <div class='add-friend-container'>
                    @$y <button>Add</button>
                </div>
            ";
        }
    }
?>