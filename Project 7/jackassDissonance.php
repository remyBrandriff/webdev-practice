<!-- Page for Jackass Dissonance-->
<!-- Created 10/28/16 -->

<!DOCTYPE HTML>

<?php
 include('session.php');
 ?>

<html>

  <head>
    <title> Jackass Dissonance </title>
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
          <h2> Jackass Dissonance </h2>
          <br>
          <p> <b> <i> This story is a work in progress, and will soon undergo
                      a second version for NaNoWriMo 2016. Stay tuned!</i> </b> </p>
          <br>
          <p> <i>Over the course of a summer, five strangers, brought together
                 by something more than chance, search for the meaning behind
                 the mysterious tattoos they all share, and uncover the secret of
                 one small town.</i></p>
          <br>
          <p> Three months. Two groups. One house. And one dangerous secret.
          <p> In the small coastal town of St. Anne's, Californa, five lives
              are about to change forever when they're brought together by
              strange marks that appeared on their skin, seemingly out of nowhere.
              This isn't uncommon, but five people from two different countries
              sharing the same one? Unheard of. </p>
          <p> Iain and James are college roommates, and best friends renting a house
              together for one last summer of relaxation and fun. James' volatile
              stepsister, Dinah, came along to finish her novel in peace and quiet.
          <p> Walker and Emmy, best friends who've travelled all the way from
              Toronto, are also in town, for a much more serious reason that
              threatens the deep bond that runs between them. </p>
          <p> When the realtor reveals there's been a mistake with the leases
              and the two groups are booked for the <i>same house</i>, they're given
              the options to turn back and go home, or live there together.
          <p> What could possibly go wrong? The answer: Everything. </p>
          <p> Fighting, trips to the hospital, and a series of unexplainable disasters
              threaten an already fragile peace, but when Dinah's life is turned
              upside down by a dark figure from Emmy's past, the five young adults
              have to work together to salvage what's left of their summer, and
              decode the mysterious tattoos to find out why they were brought to
              St. Anne's, and what secrets the town is hiding. </p>
          <hr>
          <p> This speculative fiction novel centers around five queer young people
              searching for their identities, in more ways than one, and asks:
              what makes us <i>us</i>?</p>

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
