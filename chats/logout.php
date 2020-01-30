<?php
include ('../models/config.php');

 session_start();

 $id = $_SESSION['userid'];


 // update status record to say user goes offline when his status is 0
 $query = "UPDATE user SET status = 0 WHERE userid ='".$id."'";

 mysqli_query($con, $query);


  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  header("Location: ../index.php");
 
 

?>