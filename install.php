<?php
    include_once("connection.php");

    // Database creation command: "CREATE database MessagingApp"

    $Chats = $conn->prepare("DROP TABLE IF EXISTS Chats;
    CREATE TABLE Chats 
    (SenderID INT(6) NOT NULL,
    RecieverID INT(6) NOT NULL,
    Message VARCHAR(300) NOT NULL,
    Time VARCHAR(300) NOT NULL)");
    $Chats->execute();
    $Chats->closeCursor();

    $Users = $conn->prepare("DROP TABLE IF EXISTS Users;
    CREATE TABLE Users 
    (UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL)");
    $Users->execute();
    $Users->closeCursor();

    $PendingFriends = $conn->prepare("DROP TABLE IF EXISTS PendingFriends;
    CREATE TABLE PendingFriends 
    (SenderID INT(6) NOT NULL,
    RecieverID INT(6) NOT NULL,
    Active INT(1) NOT NULL)");
    $PendingFriends->execute();
    $PendingFriends->closeCursor();

    $Friends = $conn->prepare("DROP TABLE IF EXISTS Friends;
    CREATE TABLE Friends 
    (FriendID1 INT(6) NOT NULL,
    FriendID2 INT(6) NOT NULL)");
    $Friends->execute();
    $Friends->closeCursor();

    // header('Location: #');

?>