<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/bootstrap-solid.svg">
  <title>Welcome - Sign up to your account!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="custom/css/styles.css" rel="stylesheet">
</head>

<body>

<?php

include ('models/user.php');
session_start();

if(isset($_SESSION['userid'])){
    header("Location: chats/");
}



  if(isset($_POST['butsignup'])){

    $user = new User();

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $about = $_POST['about'];


    //The Cover picture of the book
$target_img_dir = "img/profile_photo/";
$maxsize = 2048242880; // 2048MB = 2GB
$profilePhoto = $target_img_dir . $_FILES['profilePhoto']["name"];
// Select file type
$imgFileType = strtolower(pathinfo($profilePhoto,PATHINFO_EXTENSION));

// Valid file extensions
$profilePhoto_extensions_arr = array("jpg","png","JPEG");


  // Check extension
  if( in_array($imgFileType, $profilePhoto_extensions_arr) ){

    // Check file size
    if(($_FILES['profilePhoto']['size'] >= $maxsize) || ($_FILES["profilePhoto"]["size"] == 0)) {
      echo 'File must be less than 2GB. Check video size';
    }else{
      // Upload
      if(move_uploaded_file($_FILES['profilePhoto']['tmp_name'],$profilePhoto)){
      // Insert record
      
      }
    }
}

  
  $user->createUser($fname, $lname, $uname, $password, $email, $gender, $profilePhoto, $about);
  }


?>
 

            <!-- Script for profile image preview -->
            <script>
                 function readIMGURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah')
                                    .attr('src', e.target.result);
                                    document.getElementById('status').innerHTML = "<strong>Looks great!<strong>";
                                  };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                  
            </script>
        <style>
          img{
            max-width: 50%;
            border-radius: 100%;
          }
        </style>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
      <div class="card card-container" style="max-width: 850px;">
      <span style="text-align: center;"><h5>Create a free account today and start chatting on your LAN </h5> <span class="text-muted">Please note that this software is still in Beta, reporting any bug will really help!</span></span>
          <p id="profile-name" class="profile-name-card"></p>
          <form class="form-signin" action="signup.php?butsignup" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                    <input type="text" name="fname" id="inputText" class="form-control" placeholder="First name" required autofocus>
                    </div>
                    <div class="col">
                    <input type="text"  name="lname" id="inputText" class="form-control" placeholder="Last name" required autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="text"  name="uname" id="inputText" class="form-control" placeholder="User name" required autofocus>
                    </div>
                    <div class="col">
                    <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
                    </div>
                </div>
              <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <div class="row">
                    <div class="col"> Gender: 
                        <input value="M" type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>
                        <input value="F" type="radio" name="gender" id="female" value="female"> <label for="female">Female</label><br>
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="file"  name="profilePhoto" id="inputProfilePhoto"  onchange="readIMGURL(this);" id="cover_image" class="form-control" required> <br>
                       
                       
                        <img id="blah" src="img/profile_photo/avatar.png" alt="default profile" title="Preview of your phofile photo">
                      <br> <br> <div class="text-muted">Status: <span id="status" style="color: rgb(12, 97, 33);">Please pick image</span></div> <br>
                      </div>
                    <div class="col">
                        <textarea name="about" class="form-control" name="" id="" cols="30" rows="10" placeholder="About"></textarea>
                    <br><br>
                    </div>

                </div>                
              <button name="butsignup" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign up</button>
              <div  style="text-align: center;">
                <span>Already have an account?</span>
                    <a href="index.php" class="forgot-password">
                    Login
                    </a>
              </div>
          </form><!-- /form -->
      </div><!-- /card-container -->
  </div><!-- /container -->






</body>
 
 <!--Custom Javascript-->
<script src="custom/js/script.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="vendor/jquery/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
