<?php
    include_once("../classes/user.php");
    $signUp = new User;
    $signUp->SignUp($_POST["name"], $_POST["username"]);
?>