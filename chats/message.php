<?php
session_start();
include ('../models/config.php');



if(isset($_GET['butSubmit'])){
    include ('../models/user.php');
    $message = $_GET['message'];
    $userid = $_GET['userid'];
    $sentdate = date("Y-m-d h:i:sa");
    $usernameOfSender = $_SESSION['username'];


    echo $message;
    var_dump($userid);
    var_dump($sentdate);

         // Select username record in the user table where userid is the id of the other user
       $queryReceiver = "SELECT username FROM user WHERE userid = $userid";
       $results = mysqli_query($con,$queryReceiver);
       
      $RowsFetched = mysqli_fetch_assoc($results);
       $Receiver = $RowsFetched['username'];



       // Insert record in the chats table the id of the user (This will be the chat id)
       $query = "INSERT INTO chats(chatid) VALUES('".$userid."')";
       mysqli_query($con,$query); 
   

       // Insert record in the message with the chat id
       $queryMessage = "INSERT INTO messages(chatid, sender, receiver, message, sentdate) VALUES('".$userid."','".$usernameOfSender."','".$Receiver."','".$message."','".$sentdate."')";
       mysqli_query($con,$queryMessage); 
       
       header("location: chat.php?inbox?v=".$userid.""); // Redirecting To chats Page
}
























?>