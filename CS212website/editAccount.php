<?php
include("config.php");
  session_start();

  $_SESSION['id'] = 1;
  $id = $_SESSION["id"];
  $userid = $_POST["username"];
  $password = $_POST["password"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];

  $query = "UPDATE Users SET email = '$email', password = '$password',
            username = '$userid', last_name = '$lname', first_name = '$fname'";

  $result = mysql_query($query);

  if($result) {
    echo "<p>Account updates saved.</p><br>\n";
  } else {
    echo "<p>There was a problem updating your information. MYSQL error: " . mysql_error();
  }
?>

<form action = "accountPage.php" method="post">
  <input type='text' name='first_name' id='first_name' size='35' maxlength='65' name="first_name" value="<?=$fname;?>" />
  <input type='text' name='last_name' id='last_name' size='35' maxlength='65' name="last_name" value="<?=$lname;?>" />
  <input type='text' name='email' id='email' size='35' maxlength='65' name="email" value="<?=$email;?>" />
  <input type='text' name='username' id='username' size='35' maxlength='65' name="username" value="<?=$userid;?>" />


</form>
