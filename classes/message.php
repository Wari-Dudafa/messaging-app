<?php
    class Message{

        function SendMessage($message, $recieverid){
            $time = date("h:i:sa");
            $date = date("Y-m-d");
            $senderid = $_SESSION["userData"][0];

            echo $message;
        }
    }
?>