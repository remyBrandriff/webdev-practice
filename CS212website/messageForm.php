<!-- Author: Remy Brandriff -->
<!-- Created November 12, 2016 for CS212 at NAU -->
<!-- User forms for messaging system -->

<!DOCTYPE HTML>

<?php

  include('session.php');

  $labels = array("subject" => "Subject",
                  "message" => "Message");

 ?>

<html>

  <head>

    <title> Messages </title>
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
              <center><h2>Messages</h2></center>
              <p> Send messages to the admin/webmaster, and check your replies! </p>
              <hr>
              <center><p> Send a message! </p></center>

              <form action="message_validation.php" method="POST"> <!-- calls for validator -->

              <?php
              foreach ($labels as $field => $label) {
                //echo label
                echo "<div class ='field'\n
                       <label for = '$field' > $label </label> \n";

                //echo correct field
                if ($field === "subject") {
                  echo "<input type='text' name='$field' id='$field'
                         size='35' maxlength='65' />\n";
                }

                if ($field === "message") {
                  echo "<div class='message'>\n
                        <textarea name='message'></textarea>\n";
                }

                echo "</div>\n";

              }

              echo "<div id='submit'>\n
                    <input type='submit' value='submit'\n
                    </div>";

                    echo "</div>\n";
               ?>

            <hr>
            <center><p> Check your replies!</p></center>

            <p>From: </p>
            <p>Subject: </p>
            <p>Date Replied: </p>
            <p>Message: </p>

            <?php
              echo "<div id='submit'>\n
                    <input type='submit' value='reply'\n
                    </div>";
             ?>
          </form>
        </div>
            </table>
      </div>

    </div>

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
