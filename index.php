<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/bootstrap-solid.svg">
  <title>Welcome back   - Login to your account!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="custom/css/styles.css" rel="stylesheet">
</head>

<body>

<?php
include('models/user.php');
session_start();

if(isset($_SESSION['userid'])){
    header("Location: chats/");
}


$user = new User();


    if(isset($_GET['butsubmit'])){
    $inputEmail = $_POST['inputEmail'];
    $inputPassword = $_POST['inputPassword'];
 
    $user->loginUser($inputEmail, $inputPassword);
}

?>
 



<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
      <div class="card card-container">
          <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
          <img id="profile-img" class="profile-img-card" src="img/profile_photo/avatar.png" />
          <p id="profile-name" class="profile-name-card"><br>BETA Version <br></p>
          <form class="form-signin" action="index.php?butsubmit" method="POST">
              <span id="reauth-email" class="reauth-email"></span>
              <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
              <div id="remember" class="checkbox">
                  <label>
                      <input type="checkbox" value="remember-me"> Remember me
                  </label>
              </div>
              <button name="butsubmit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
          </form><!-- /form -->
          <div  style="text-align: center;">
                <span>Don't have an account?</span>
                    <a href="signup.php" class="forgot-password">
                    Sign up
                    </a>
              </div>
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
