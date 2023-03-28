<?php
    include_once("../classes/user.php");
    $signUp = new User;
    if ($signUp->Login($_POST["name"], $_POST["username"])){
        echo "logged in";
    } else {
        echo "Login failed";
    }
?>