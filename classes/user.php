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
                    $conn = null;
                    return true; 
                } else {
                    //Access denied
                    $conn = null;
                    return false;
                }
            }
        }

        function SignUp($name, $username_){
            include_once("../connection.php");

            // Puts user information into the databse
            $signup = $conn->prepare("INSERT INTO Users (UserID,Name,Username)VALUES (null,:name,:username)");
            $signup->bindParam(':name', $name);
            $signup->bindParam(':username', $username_);
            $signup->execute();
            $conn = null;
            echo "User added";
        }

        function Search($username_){
            include_once("../connection.php");
            $username_ = $username_.'%';
            $result = array();

            $search = $conn->prepare("SELECT * FROM Users WHERE Username LIKE :username;" );
            $search->bindParam(':username', $username_);
            $search->execute();
        
            while ($row = $search->fetch(PDO::FETCH_ASSOC)){
                $x = array($row['UserID'], $row['Username']);
                array_push($result, $x);
            }

            $conn = null;
            return $result;
        }

        function GetFriends($userid){
            //include_once("../connection.php");
            include $_SERVER["DOCUMENT_ROOT"]."/messaging-app/connection.php";
            $friends = array();

            $getFriends = $conn->prepare("SELECT * FROM Friends WHERE FriendID1 = :userid OR FriendID2 = :userid;" );
            $getFriends->bindParam(':userid', $userid);
            $getFriends->execute();
        
            while ($row = $getFriends->fetch(PDO::FETCH_ASSOC)){
                foreach ($row as $i) {
                    if ($i != $userid){
                        array_push($friends, $i);
                    }
                }
            }

            return $friends;
        }
    }
?>