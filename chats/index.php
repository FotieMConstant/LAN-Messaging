

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


<!-- Modal to say welcome to user -->


<style>
.content-240ba2aa-849c-4676-84b9-bf32294f4f0a { z-index: 4;  max-width: 500px;  top: 0px;  right: 0px;  margin-right: 15px;  position: absolute;  overflow: hidden;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .add-margin {  margin-top: 20px;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__svg {  fill: #fff;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast {  text-align: left;  padding: 21px 0;  background-color: #fff;  border-radius: 4px;  position: relative;  box-shadow: 1px 7px 14px -5px rgba(0, 0, 0, 0.2);  -webkit-animation: slide 0.5s forwards;  -webkit-animation-delay: 2s;  animation: slide 0.5s forwards;  animation-delay: 2s;  right: -100%;}@keyframes slide {  from {    right: -100%;    overflow: none;    display: none;  }  to {    right: 0px;  }}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast:before {  content: '';  position: absolute;  top: 0;  left: 0;  width: 4px;  height: 100%;  border-top-left-radius: 4px;  border-bottom-left-radius: 4px;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__icon {  position: absolute;  top: 50%;  left: 22px;  transform: translateY(-50%);  width: 14px;  height: 14px;  padding: 7px;  border-radius: 50%;  display: inline-block;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__type {  color: #3e3e3e;  font-weight: 700;  margin-top: 0;  margin-bottom: 8px;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__message {  font-size: 14px;  margin-top: 0;  margin-bottom: 0;  color: #878787;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__content {  padding-left: 70px;  padding-right: 60px;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast__close {  position: absolute;  right: 22px;  top: 50%;  width: 14px;  cursor: pointer;  height: 14px;  fill: #878787;  transform: translateY(-50%);}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--green .toast__icon {  background-color: #2BDE3F;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--green:before {  background-color: #2BDE3F;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--blue .toast__icon {  background-color: #1D72F3;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--blue:before {  background-color: #1D72F3;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--yellow .toast__icon {  background-color: #FFC007;}.content-240ba2aa-849c-4676-84b9-bf32294f4f0a .toast--yellow:before {  background-color: #FFC007;}

</style>



<div class="content-240ba2aa-849c-4676-84b9-bf32294f4f0a">
<div class="toast toast--blue add-margin">
  <div class="toast__icon">
<svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<g>
	<g id="info">
		<g>
			<path  d="M10,16c1.105,0,2,0.895,2,2v8c0,1.105-0.895,2-2,2H8v4h16v-4h-1.992c-1.102,0-2-0.895-2-2L20,12H8     v4H10z"></path>
			<circle  cx="16" cy="4" r="4"></circle>
		</g>
	</g>
</g>

    </svg>
  </div>
  <div class="toast__content">
    <p class="toast__type">👋 Welcome back! </p>
    <span>
    <?php echo $_SESSION['username']; ?> 
    <p class="toast__message"> <strong>Great! </strong> You are now logged in. <br> Start chatting with your contacts.</p>



  </div>
  <div class="toast__close">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
  <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
</svg>
  </div>
</div>
</div>
<!-- /Modal to say welcome to user -->


                  

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
          $allChats = 0;
          $fetchAllChats = mysqli_query($con, "SELECT * FROM user");
          while($row = mysqli_fetch_assoc($fetchAllChats)){

            $allChats++;

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
                            


                   echo '<div class="sms-send-page">
                      <ul class="list-group" title="'.$fname.' joined on '.$createdon.'">
                        <li class="list-group-item">
                          <div class="col-xs-8 pull-left">
                          <img class="avatar" src="../'.$profilephoto.'" alt="...">
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
        <style>
            .warning img{
                width: 40%;
                height: auto;
                margin-top: 7%;
               
            }
            .warning{
                text-align: center;
               
            }
        </style>

            <div class="col-md-8">
                <div class="card card-bordered">
                    <div class="card-header">
                        <h4 class="card-title"><strong>  <br></strong></h4> 
                    </div>
                    <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                        
                        <div class="warning">
                            <img src="../img/undraw_warning_cyit.png" alt="Select chat"> <br>
                            Please, select chat to view messages here
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                        </div>
                    </div>
                    <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="../<?php echo $_SESSION['profilephoto']; ?>" alt="<?php echo $_SESSION['username']; ?>"> 
                    <textarea class="publisher-input" type="text" placeholder="Type your message here..."> </textarea>
                    <span class="publisher-btn file-group"> <i class="fa fa-paperclip file-browser"></i> <input type="file"> </span> <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a> <a class="btn btn-primary" href="#" data-abc="true">Send</a> </div>

                      
                </div>

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
jQuery(document).ready(function(){
  jQuery('.toast__close').click(function(e){
    e.preventDefault();
    jQuery('.content-240ba2aa-849c-4676-84b9-bf32294f4f0a').remove();
  });
});
</script>
</html>
