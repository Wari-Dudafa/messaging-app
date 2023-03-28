<?php
    class User{

        function Login($name, $username_){
            session_start();
            include_once("../connection.php");

            // Find where the email matches what already exists in the database
            $login = $conn->prepare("SELECT * FROM Users WHERE Username = :username;" );
            $login->bindParam(':username', $username_);
            $login->execute();
        
            while ($row = $login->fetch(PDO::FETCH_ASSOC)) {
        
                // Compare it to the password
                if($name == $row['Name']) {
                    $_SESSION["userData"] = array($row['UserID'], $row['Name'], $row['Username']);
                    // Access granted
                    return true; 
                } else {
                    //Access denied
                    return false;
                }
            }
            $conn=null;
        }

        function SignUp($name, $username_){
            include_once("../connection.php");

            // Puts user information into the databse
            $signup = $conn->prepare("INSERT INTO Users (UserID,Name,Username)VALUES (null,:name,:username)");
            $signup->bindParam(':name', $name);
            $signup->bindParam(':username', $username_);
            $signup->execute();
            $conn=null;
            echo "User added";
        }

    }
?>