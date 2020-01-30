

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/bootstrap-solid.svg">
  <title>Chats - LAN Messaging</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Starting my session here to give styling access to the whole file even for exceptions -->
  <?php
    //Starting session for current user
    session_start();

    include ('../models/config.php');
    include ('../models/user.php');


    //If the userid is set he will access his chats normally
    if (isset($_SESSION['userid'])) {
?>

</head>

<body>

<style>
body{
  margin: 2%;
}
  .card-bordered {
    border: 1px solid #ebebeb
}

.card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
    -webkit-transition: .5s;
    transition: .5s
}

.padding {
    padding: 3rem !important
}

body {
    background-color: #f9f9fa
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77, 82, 89, 0.07)
}

.card-header .card-title {
    padding: 0;
    border: none
}

h4.card-title {
    font-size: 17px
}

.card-header>*:last-child {
    margin-right: 0
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px
}

.btn-xs:hover {
    color: #fff !important
}

.card-title {
    font-family: Roboto, sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77, 82, 89, 0.07)
}

.ps-container {
    position: relative
}

.ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden !important;
    -ms-overflow-style: none
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media .avatar {
    flex-shrink: 0
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table
}

.media-body {
    min-width: 0
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
    font-weight: 100;
    color: #9b9b9b
}

.media>* {
    margin: 0 8px
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    padding: 0;
    opacity: .8
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media-meta-day::before {
    margin-right: 16px
}

.media-meta-day::before,
.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb
}

.media-meta-day::after {
    margin-left: 16px
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media-chat.media-chat-reverse .media-body p {
    float: right;
    clear: right;
    background-color: #48b0f7;
    color: #fff
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px
}

.border-light {
    border-color: #f1f2f3 !important
}

.bt-1 {
    border-top: 1px solid #ebebeb !important
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb
}

.publisher>*:first-child {
    margin-left: 0
}

.publisher>* {
    margin: 0 8px
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent
}

button,
input,
optgroup,
select,
textarea {
    font-family: Roboto, sans-serif;
    font-weight: 300
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear
}

.file-group {
    position: relative;
    overflow: hidden
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear
}

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1;
    width: 20px
}

.text-info {
    color: #48b0f7 !important
}

/* Scoll chats section */
#chat-content{
   padding-bottom: 0%;
}

</style>

<style>

/*CSS for chats */
      .sms-send-page{
        margin-top: -121px;
      }

    .sms-send-page-wrapper{
      background: #f6f9fc;

    font-family: 'Abel', sans-serif;

    }

.sms-send-page .pull-left p {
    color: #5b6773;
    margin: 0;
}
.sms-send-page .pull-left small {
    color: #637282;
    font-size: 13px;
}
.sms-send-page .pull-left {
    line-height: 18px;
}
.sms-send-page .list-group-item {
    padding: 14px;
      border: 1px solid #e6e8eb;
       position: relative;
}
.sms-send-page .pull-right .btn {
    border-radius: 23px;
    font-size: 14px;
    font-weight: 900;
    padding: 8px 20px;
    text-transform: uppercase;
    margin-top: -30px;
}

.sms-send-page .list-group {
    box-shadow: 0 0 11px #eceeef;
    margin: 120px 0px;
    cursor: pointer;
}
.sms-send-page .list-group-item:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
.sms-send-page .list-group-item:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    margin-bottom: 0;
}
.sms-send-page .btn
{
  float: right;
}
.sms-send-page .btn-success
{

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#15ad0c+0,007a00+100 */
background: #15ad0c; /* Old browsers */
background: -moz-linear-gradient(left, #15ad0c 0%, #007a00 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #15ad0c 0%,#007a00 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #15ad0c 0%,#007a00 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#15ad0c', endColorstr='#007a00',GradientType=1 ); /* IE6-9 */
}
.sms-send-page .btn-success:hover
{
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#007a00+0,15ad0c+100 */
  background: #007a00; /* Old browsers */
  background: -moz-linear-gradient(left, #007a00 0%, #15ad0c 100%); /* FF3.6-15 */
  background: -webkit-linear-gradient(left, #007a00 0%,#15ad0c 100%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, #007a00 0%,#15ad0c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007a00', endColorstr='#15ad0c',GradientType=1 ); /* IE6-9 */
}

.btn.active.focus, .btn.active:focus, .btn.focus, .btn.focus:active, .btn:active:focus, .btn:focus {
    outline: medium none;
    outline-offset: 0;
}
.sms-send-page .pull-left, .sms-send-page .pull-right{
  padding: 0px;
}
.sms-send-page .pull-left img {
    width: 37px;
    height: 37px;
    float: left;
    margin-right: 10px;
}
.sms-send-page .pull-left small .fa {
    font-size: 9px;
    vertical-align: middle;
}



  </style>





<!-- Large modal for seeings section -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" style="text-align: center; padding: 25px; margin-left: 70px;">Account information <br>(<span class="text-muted">Update account functionality is not yet available in this version.</span>)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             User name :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             First name :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['fname']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             Last name :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['lname']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             E-mail :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['email']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             Gender :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['gender']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             Password :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="The Password you entered!" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             Status :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="Online" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
             About :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['about']; ?>" disabled>
        </div>
     </div>

     <div class="row" style="padding: 15px;">
        <div class="col-sm-2">
            Joined on :
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" value="<?php echo $_SESSION['createdon']; ?>" disabled>
        </div>
     </div>
     <div class="modal-footer">
     <button type="button" class="btn btn-primary" data-dismiss="modal">Close!</button>
     </div>
    </div>
  </div>
</div>
 <!-- Large modal for seeings section -->


<div class="row">
        <div class="col-md-4">
                <div class="card card-bordered">
                    <div class="card-header">
                        <h4 class="card-title">
                        <strong>Chats (<?php echo $_SESSION['username']; ?>)</strong></h4> <button type="button" class="btn btn-xs btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg" >Account</button> <a class="btn btn-xs btn-primary" href="logout.php" data-abc="true">Log out!</a>
                    </div>
                    <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">



                    <?php

          include ('../models/config.php');
          $countChats = 0;
          $fetchAllChats = mysqli_query($con, "SELECT * FROM user");
          while($row = mysqli_fetch_assoc($fetchAllChats)){

            $countChats++;

            $userid = $row['userid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $username = $row['username'];
            $email = $row['email'];
            $gender = $row['gender'];
            $status = $row['status'];
            $about = $row['about'];
            $profilephoto = $row['profilephoto'];
            $createdon = $row['createdon'];

            
            //Display the user's status
                if($status == 1){
                    $status = '<canvas id="user-online" width="20" height="20"></canvas> Online';
                }else{
                    $status = '<canvas id="user-offline" width="20" height="20"></canvas> Offline';
                }
                //Display the user as 'You' in the chats
                if($userid == $_SESSION['userid']){
                    $username = "You";
                    $fname = "You";
                }



                   echo '
                   
                   <div class="sms-send-page">
                      <ul class="list-group" title="'.$fname.' joined on '.$createdon.'">
                        <li class="list-group-item">
                          <div class="col-xs-8 pull-left">
                          <img class="avatar" src="../'.$profilephoto.'" alt="'.$username.'">
                            <p><strong>'.$username.'</strong></p>
                            <small> '.$status.'</small>
                          </div>
                          <div class="col-xs-4 pull-right">
                          <a href="chat.php?inbox?v='.$userid.'"><button type="button" class="btn btn-default">chat <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button></a>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                      </ul>
                    </div>';
                    }
                    ?>
                        
                    
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                        </div>

                    </div>
                </div>


</div>


<?php 

include ("../models/config.php");

if(isset($_GET['inbox?v'])){

    $idToCheck = $_GET['inbox?v'];
    
  
// SQL query to fetch information of registerd users 
$queryChat = "SELECT * FROM user WHERE userid = $idToCheck";
$resultChat = mysqli_query($con, $queryChat);



$F_row = mysqli_fetch_assoc($resultChat);

            $clickedUserid = $F_row['userid'];
            $clickedFname = $F_row['fname'];
            $clickedLname = $F_row['lname'];
            $clickedUsername = $F_row['username'];
            $clickedEmail = $F_row['email'];
            $clickedGender = $F_row['gender'];
            $clickedStatus = $F_row['status'];
            $clickedAbout = $F_row['about'];
            $clickedProfilephoto = $F_row['profilephoto'];
            $clickedCreatedon = $F_row['createdon']; 

             //Display the user's status
             if($clickedStatus == 1){
                $clickedStatus = '<canvas id="user-online" width="20" height="20"></canvas> Online';
            }else{
                $clickedStatus = '<canvas id="user-offline" width="20" height="20"></canvas> Offline';
            }
            //Display the user as 'You' in the chats
            if($clickedUserid == $_SESSION['userid']){
                $clickedUsername = "You";
                $clickedFname = "You";
            }
           
           


    echo '

            <div class="col-md-8">
                <div class="card card-bordered">
                    <div class="card-header">
                        <h4 class="card-title"><strong>  <img class="avatar" src="../'.$clickedProfilephoto.'" alt="'.$clickedUsername.'"> '.$clickedUsername.' <br> <div style="margin-left: 65px;"> '.$clickedStatus.'<div> </strong></h4> <buttom class="btn btn-xs btn-secondary"  data-toggle="modal" data-target="#largeModal">About</buttom>
                    </div>
                    <div class="ps-container ps-theme-default ps-active-y" id="chat-scroll" style="overflow-y: scroll !important; height:400px !important;">
                    <div class="container" >
                    <div class="row">
                    <div class="col">
                    ';
                    
                 //Request to fetch for all massages with a particular chatid, //Note that the chatid is also the id of the reciever of the message 
            $fetchMessages = mysqli_query($con, "SELECT * FROM messages WHERE receiver='".$_SESSION['username']."' AND sender='".$clickedUsername."'");
            while($rowMessage = mysqli_fetch_assoc($fetchMessages)){  

                $messageid = $rowMessage['messageid'];
                $chatid = $rowMessage['chatid'];
                $sender = $rowMessage['sender'];
                $receiver = $rowMessage['receiver'];
                $message = $rowMessage['message'];
                $sentdate = $rowMessage['sentdate'];

                
               
                if($sender == $_SESSION['username']){
                    //Code if it is the current user sending the message
                    echo '` 
                    <div class="media media-chat media-chat-reverse">
                        <div class="media-body">
                            <p>'.$message.'</p>
                        </div>
                    </div>';
                }else{
                    //Code if it is the other user sending the message
                    //Just this below lines are executed!
                    
                  echo '
                   <div class="media media-chat"> <img class="avatar" src="../'.$clickedProfilephoto.'" title="'.$clickedUsername.'" alt="...">
                    <div class="media-body">
                        <p>'.$message.'</p>
                        <p class="meta"><time datetime="2018"> Sent on '.$sentdate.'</time></p>
                    </div>
                   </div>
               ';

               
                } 
               
            }
            echo '
            </div>
            <div class="col">';


            //Feching the sender's info in the Database
            $fetchOtherMessages = mysqli_query($con, "SELECT * FROM messages WHERE receiver='".$clickedUsername."' AND sender='".$_SESSION['username']."'");
             while($rowOtherMessage = mysqli_fetch_assoc($fetchOtherMessages)){  
                $messageOther = $rowOtherMessage['message'];

                //Code if it is the current user sending the message
                echo '
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>'.$messageOther.'</p>
                    </div>
                </div>';
            }



                        echo '
                        </div>
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                        </div>
                    </div>
                </div>
                <form action="message.php" method="GET">
                    <input type="number" style="display:none" name="userid" value="'. $clickedUserid.'">
                    <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="../'.$_SESSION['profilephoto'].'" alt="'.$_SESSION['username'].'">
                    <textarea name="message" class="publisher-input" type="text" placeholder="Type your message here..."> </textarea>
                    <span class="publisher-btn file-group"> <i class="fa fa-paperclip file-browser"></i> <input type="file"> </span> <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a> <button name="butSubmit" type="submit" class="btn btn-primary" href="#" data-abc="true">Send</button> </div>
                </form>
                ';
                
                
                echo '
                <!-- Large modal for seeings section -->
                
                <!-- large modal -->
                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">About </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        
                      <div class="container">
                        
                          <div class="card">
                            <div class="card-body text-center">
                              <img style="max-width: 150px;" class="rounded-circle" src="../'.$clickedProfilephoto.'" alt="'.$clickedUsername.'"> <br/>'.$clickedStatus.'
                              <h4 class="card-title">'.$clickedFname.' '.$clickedLname.'</h4><br> 
                              <h6 class="card-subtitle mb-2 text-muted">Joined '.$clickedCreatedon.'</h6> <br>'.$clickedFname.'\'s sudo  is<strong> '.$clickedUsername.'</strong><br>
                              E-mail is: <strong>'.$clickedEmail.'</strong>
                              <h3>About</h3>
                              <p class="card-text">'.$clickedAbout.'</p>
                              <a href="#" class="btn btn-outline-info">Message '.$clickedUsername.'</a>
                        
                        </div>
                      </div>
                    </div>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                    
                <!--/Large modal for seeings section -->
                
                ';

                
} 

?>


</div>

</div>


<?php
//else if the userid is not set, an alert modal will be displayed asking to login first
 } else {
   ?>


<!-- Modal to tell the user to login first-->

<div id="css-only-modals">
      <input id="modal1" class="css-only-modal-check" type="checkbox" checked/>
      <div class="css-only-modal">
      <label for="modal1" class="css-only-modal-close"><a href="../../app/views/loginform.php"><i class="fa fa-times fa-2x"></i></a></label>
      <h2>Error!</h2>
        <hr />
      <center><img src="../img/icons/error.png" width="80" height="80" alt="error image"><br/><br/>
        <strong>Sorry!</strong> Please login first to access this page! <br> <a href="../index.php">Login here!</a>
      </center>
      <br/><br/>
        <label for="modal1" class="css-only-modal-btn btn btn-primary btn-lg">Okay</label>
      </div>
      <div id="screen-shade"></div>
      </div>
<!-- /Modal to tell the user to login first -->

<?php
 }

 ?>


</body>

 <!--Custom Javascript-->
<script src="../custom/js/script.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="../vendor/jquery/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<script>

var objDiv = document.getElementById("chat-scroll");
objDiv.scrollTop = objDiv.scrollHeight;


</script>
</html>
