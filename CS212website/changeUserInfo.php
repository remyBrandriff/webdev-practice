<!-- Author: Remy Brandriff-->
<!-- Created November 6, 2016 for CS212 at NAU -->
<!-- Change user info form for existing users -->

<!DOCTYPE html>

<?php

 include('session.php');

//set arrays for form values
$labels = array("fname" => "Change First Name",
                "lname" => "Change Last Name",
                "email" => "Change Email Address",
                "userid" => "Current Username",
                "userid2" => "Change Username",
                "pass1" => "Enter Current Password",
                "pass2" => "Change Password",
                "pass3" => "Re-enter New Password");
?>

<html>
    <head>
        <title> Edit User Info </title>
        <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
        <link rel="stylesheet" href="contact_me_style_sheet.css">
    </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Remy Brandriff </h1>
        <h3> Officially Unofficial Website for the (Unpublished) Author </h3>
        <p> Hello, <?php echo $login_session; ?></p>
        <h5> <a href = "logout.php">Sign Out</a></h5>

        <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Pages</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="index.php">Home</a>
              <a href="about.php">About Me</a>
              <a href="newContact.php">Contact Me</a>
              <a href="accountPage.php">Account</a>
              <a href="resume.html">Resume</a>
              <a href="edenProject.php">The Eden Project</a>
              <a href="blueRosesAndFireflies.php">Blue Roses and Fireflies</a>
              <a href="theFuturist.php">The Futurist</a>
              <a href="jackassDissonance.php">Jackass Dissonance</a>
              <a href="nanowrimo16.php">NaNoWriMo 2016</a>
            </div> <!--myDropdown-->
          </div><!--dropdown-->

      </div> <!-- header -->
      <div id="wrapper">
        <div id="content">

          <!-- Content -->
            <td width=498 valign=top bgcolor=#A31621>
            <table width=100%>
              <center><h2>Edit User</h2></center>
              <br>
              <p>Use the form below to edit your account information,
                 or delete the account entirely.</p>

              <form action="edit_user_validation.php" method="POST">
                 <?php

                   //loop displays form fields
                   foreach ($labels as $field => $label) {
                     //echo label
                     echo "<div class = 'field'\n
                           <label for = '$field' > $label </label> \n";

                           //echo correct field
                     if ($field === "fname" or $field === "lname" or
                         $field === "email" or
                         $field === "userid" or $field === "userid2") {
                           echo "<input type='text' name='$field' id='$field'
                                  size='35' maxlength='65' />\n";
                     }

                     if ($field === "pass1" or $field === "pass2" or $field === "pass3") {
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
                  <br>

                 <?php
                  echo "<div id='delete'>\n
                        <input type='submit' value='Delete Account'\n
                        </div>";
                  ?>
                </form>
               </table>
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
