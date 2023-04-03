<?php
    session_start();
    $userid = $_REQUEST['userid'];
    $_SESSION["recieverData"] = $userid;
    
    echo $userid;
?>