<!-- Page for The Futurist -->
<!-- Created 10/24/16 -->

<!DOCTYPE HTML>

<?php
 include('session.php');
 ?>

<html>

  <head>
    <title> The Futurist </title>
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
          <h2> The Futurist </h2>
          <br>
          <p> <b> <i> This story has been submitted to Book Smugglers Publishing
                  short stories for their Gods and Monsters contest (10/1/16).
                  I am currently waiting to hear back regarding my submission.
                  Stay tuned! </i> </b> </p>
          <br>
          <p> <i> The year is 2167. On board the peacekeeping airship, </i>Glory<i>,
                  secondary engineering officer Henry Tremaine begins to question
                  reality when an alien artifact changes his life forever.</i></p>
          <br>
          <p> Henry Tremaine is an asshole. </p>
          <p> This is an indisputed fact, one not even his cheery lab partner tries
              to deny. But he's a very intelligent asshole, best in his field, and
              on board the <i>Glory</i>, an airship for the Global Protective Force,
              he is in charge of analyzing, cataloguing, and containing various
              artifacts recovered from the field, lest they fall into the wrong hands.
              He does his job very well with minimal contact with other human beings,
              until an accident with an artifact puts him in the medbay. </p>
          <p> Everything is changing.</p>
          <p> Suddenly, he feels like he's losing his mind--seeing things that aren't
              there, hearing people speak when their mouths never move. A strange
              woman appears in his dreams; her name is Ai'ya, she is a multidimensional
              alien, and her energy was trapped in the artifact that injured Henry.
              Now they're stuck together, and he doesn't just fear he's going insane.
          <p> He knows he is.
          <p> With the GPF on one side and Ai'ya on the other, Henry doesn't know
              what's real and what isn't. What he does know, without a shadow of a
              doubt, is that he is a jerkass genius with a God complex, and now he has
              the power to back it up.
          <hr>
          <p> This high concept short story stars a disabled queer male
              struggling with his own identity and his place in the universe, and
              begs the question: What separates humans from gods?</p>

        </div> <!-- content -->
      </div> <!-- wrapper -->
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
