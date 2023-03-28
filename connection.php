<?php
    // Variables for the local database connections
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "MessagingApp";

    // Variables for the serverside database connections
    //$servername = "";
    //$username = "";
    //$password = "";
    //$dbname = "";

    // Connection variable
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        // Connnection fail
    }
?>