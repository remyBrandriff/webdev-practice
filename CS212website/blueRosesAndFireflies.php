<!-- Page for Blue Roses and Fireflies -->
<!-- Created 10/24/16 -->

<!DOCTYPE HTML>

<?php
 include('session.php');
 ?>

<html>

  <head>
    <title> Blue Roses and Fireflies </title>
    <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">

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
          <h2> Blue Roses and Fireflies </h2>
          <h3> An Eden Project Novella </h3>
          <br>
          <p> <i> In a technologically advanced world, a group of ill-fitted and untrained
              revolutionaries take to the virtual world to win a war before the
              tyrannical government squashes the weak rebellion. </i></p>
          <br>
          <p> Courier Lyra Quinn has a comfortable existance with her boyfriend,
              and her job of delivering packages in techno-haven Chicago is never
              boring. But she might wish it was, when one such delivery takes her
              straight into the heart of megacorporation ArkAngel Enterprises, the
              leader in nearly every cutting edge industry. Soon after, her boyfriend
              is murdered and Lyra is faced with a startling discovery about the
              man she loved, and must go on the run to save her own life--from ArkAngel
              and their enforcers, and the legendary Chime Morrow, crime boss
              under the Chinese Triad.</p>
          <br>
          <center>
          <img src="images/lyra.png"
               alt="A portrait of a young African American woman with thick, dark curls pulled back from
                    her face and then over her shoulders. She is holding a black mug in her
                    her hands in front of her, and appears to be blowing on it, as if to cool
                    down hot coffee or tea. She is looking off screen. It may or may not be a picture
                    of Kerry Washington."
               style="width:220px;height:270px;" >
             </center>
          <hr>
          <p> This spin-off novella of <i>The Eden Project</i> stars Lyra Quinn as she
              embarks on a journey of self-discovery and self-preservation, in an
              extended look at her solo adventures previously seen only in an abbreviated form.</p>

        </div>
      </div>
    </div> <!-- container -->

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
