<!-- Author: Remy Brandriff-->
<!-- Created November 7, 2016 for CS212 at NAU -->
<!-- Login page -->

<!DOCTYPE html>

<!-- code to login and track sessions adapted from https://www.tutorialspoint.com/php/php_mysql_login.htm -->
<?php
  include("config.php");
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    //get username and password from login form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM Users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    //if result == $username and $password, table row must be 1 row
    if($count == 1) {
      //session_register('username');
      $_SESSION['login_user'] = $username;

      header("location: index.php");
    } else {
      $error = "Your username or password is incorrect.<br>\n";
    }
  }
 ?>

 <html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
        <link rel="stylesheet" href="contact_me_style_sheet.css">
    </head>

    <body>
      <div id="container">
        <div id="header">
          <h1> Remy Brandriff </h1>
          <h3> Officially Unofficial Website for the (Unpublished) Author </h3>

          <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Menu</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="login.php">Login</a>
                <a href="registrationForm.php">Register</a>
              </div> <!--myDropdown-->
            </div><!--dropdown-->
        </div> <!--header-->
        <div id="wrapper">
          <div id="content">

            <!-- Content -->
              <td width=498 valign=top bgcolor=#A31621>
              <table width=100%>
                <center><h2>Login</h2>
                <br>
                <p>Please login or register as a new user.</p>

                <form action="" method="post">
                  <label><p>Username:</p> </label><input type="text" name="username" class="box"/><br /> <br />
                  <label><p>Password:</p> </label><input type="password" name="password" class="box" /><br /><br />
                  <input type="submit" value ="Submit"/><br />
                </form>
              </center>
          </div>
        </div>
      </div>

      <!-- Javascript for dropdown menus
      Code adapted from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
      <script>
      // When the user clicks on the button, toggle between hiding and showing the dropdown content
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById("myDropdown2").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;

          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>

    </body>
</html>
