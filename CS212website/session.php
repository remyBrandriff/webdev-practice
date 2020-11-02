<!-- session.php, verifies session -->
<!-- otherwise redirects to login page -->

<?php
  include('config.php');
  session_start();

  $user_check = $_SESSION['login_user'];
  $sess_sql = mysqli_query($db, "SELECT username FROM Users WHERE username = '$user_check'");
  $row = mysqli_fetch_array($sess_sql, MYSQLI_ASSOC);
  $login_session = $row['username'];

  if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
  }
?>
