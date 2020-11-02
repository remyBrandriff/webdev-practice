<!-- Author: Remy Brandriff-->
<!-- Created October 31, 2016 for CS212 at NAU -->
<!-- Registration form for new users -->

<!DOCTYPE html>

<?php

//set arrays for form values
$labels = array("fname" => "First Name",
                "lname" => "Last Name",
                "email" => "Email Address",
                "userid" => "Username",
                "pass1" => "Password",
                "pass2" => "Re-enter Password");
?>

<html>
    <head>
        <title> Registration </title>
        <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
        <link rel="stylesheet" href="contact_me_style_sheet.css">
    </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Remy Brandriff </h1>
        <h3> Officially Unofficial Website for the (Unpublished) Author </h3>

        <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
        <!-- Only shows link to Home screen and registration form until user signs in -->
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Pages</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="login.php">Login</a>
              <a href="registrationForm.php">User Registration</a>
              <a href="newContact.php">Contact Me</a>
            </div>
          </div>

      </div> <!-- header -->

      <div id="wrapper">
        <div id="content">

          <!-- Content -->
            <td width=498 valign=top bgcolor=#A31621>
            <table width=100%>
              <center><h2>New User Registration</h2> </center>
              <br>
              <p>Welcome to the official website for the breakout sci-fi writer,
                 Remy Brandriff. Please create a new user profile to view exclusive
                 content and sign up for e-mail updates (NOTE: filling out the form
                 below does not automatically sign you up for the e-mail list). </p>

              <hr>

          <form action="registration_validation.php" method="POST">
              <?php

                //loop displays form fields
                foreach ($labels as $field => $label) {
                  //echo label
                  echo "<div class = 'field'\n
                        <label for = '$field' > $label </label> \n";

                        //echo correct field
                  if ($field === "fname" or $field === "lname" or
                      $field === "email" or
                      $field === "userid") {
                        echo "<input type='text' name='$field' id='$field'
                               size='35' maxlength='65' />\n";
                  }

                  if ($field === "pass1" or $field === "pass2") {
                    echo "<input type='password' name='$field' id='$field'
                           size='35' maxlength='65' />";
                  }

                  echo "</div>\n";
                }
              ?>

              <?php
                echo "<div id='submit'>\n
                      <input type='submit' value='submit'\n
                      </div>";
               ?>
             </form>
          </div>
        </table>
      </div>

    <!--footer w/ some info -->
      <div id="footer">
        <p> Remy Brandriff | ACS | CS212 - Fall 2016 </p>
        <p> <b> Contact at bsb232@nau.edu or britt.shea13@gmail.com -
                see Contact Me page for more information </b> </p>
        <p> This website is hosted by the College of Engineering, Forestry, and
            Natural Sciences at Northern Arizona University. </p>
        <p> Site design (c) Remy Brandriff 2016 </p>
      </div> <!-- footer -->

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
