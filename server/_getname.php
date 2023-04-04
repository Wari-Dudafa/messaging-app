<?php
    session_start();
    include_once("../classes/user.php");

    $userid = $_REQUEST['userid'];
    $_SESSION["recieverData"] = $userid;

    $getName = new User;
    $name = $getName->GetName($userid);
    echo "<p1>$name</p1>";
?>