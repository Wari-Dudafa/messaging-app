<?php
    session_start();

    // If The variable is not empty then empty it 
    if(isset($_SESSION['CurrentUser'])) {
        unset($_SESSION['CurrentUser']);
    }

    // header("Location: #");
?>