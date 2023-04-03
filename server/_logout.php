<?php
    // If The variable is not empty then empty it 
    session_start();
    if(isset($_SESSION['userData'])) {
        unset($_SESSION['userData']);
        header("Location:../client/phtml/createuser.php");
    }
?>