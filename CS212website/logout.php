<!-- logout page -->

<?php
  include("config.php");
  session_start();
   if(session_destroy()) {
     $sql = "INSERT INTO UserActivity (username, signout) VALUES ('$userid', SYSDATE())";
     $result = mysql_query($sql,$db);
     header("location: login.php");
   }
 ?>
