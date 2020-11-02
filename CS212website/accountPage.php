<!-- Remy Brandriff -->
<!-- Nov 7, 2016, CS212 -->
<!-- Account page for changing information & deleting account -->

<!DOCTYPE html>

<?php
 include('session.php');
?>

<html>
  <head>
    <title> Manage Account </title>
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
              <center><h2>Manage Account</h2></center>
              <br>
              <p>Hello, <?php echo $login_session; ?>. Use this page to manage
                 your account information, make any necessary changes, or
                 delete your account entirely. </p>

              <h2>This page is under construction.</h2>
              <?php

               ?>

            </table>
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
