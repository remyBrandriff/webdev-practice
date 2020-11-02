<!-- Page for NaNoWriMo -->
<!-- Created 10/28/16 -->

<!DOCTYPE HTML>

<?php
 include('session.php');
 ?>

<html>

  <head>
    <title> NaNoWriMo '16 </title>
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
          <h2> NaNoWriMo '16 </h2>
          <br>
          <p><b> CURRENT WORD COUNT: 17,889 words out of 50,000 </b>
            <p><i>Yes, I'm behind. I blame university. </i></p>

          <p> <a href="http://nanowrimo.org/">National Novel Writing Month</a> is an annual creative writing project
              that challenges participants to write 50,000 words between November 1
              and 11:59pm November 30. Basically, the goal is to get people writing,
              and keep them motivated so they don't lose steam partway through an idea,
              focusing on word count and completion of a novel rather than the actual
              content; no time for editing and revising when you need to write an
              entire novel in 30 days. If you're doing it through the official website,
              there are several rules. </p>
          <p> Official Rules:
            <ul>
              <li> Novels can be of any fiction genre, including fanfictions, novels
                   in poem format, and even metafiction
              <li> NaNoWriMo starts at 12:00 am on November 1,
                   and ends at 11:59:59 pm on November 30, local time
              <li> Novels must reach a minimum of 50,000 words before the deadline
              <li> Planning and notes written before November 1 are allowed, but
                   no earlier written material is allowed
              <li> Participants cannot start early and finish 30 days of writing
                   using that starting point
              <li> You can either write a complete novel of 50,000 words, or simply
                   the <i>first</i> 50,000 words
                 </ul>
          <p> That's usually spaced out as 1,667 words a day. Sounds easy, right?
              I laugh at your naivete.
          <p> There are no official prizes, except for a printable certificate,
              a digital icon, and a place on the list of winners. There are also
              no precautions against cheating, since the primary award is </p>
          <p> YOU WROTE 50 FUCKING THOUSAND WORDS IN 30 DAYS </p>
          <p> Now, according to the rules, I have to start an entirely new project
              for NaNoWriMo, but since I'm not submitting to the official website,
              I'm going to use this year's NaNoWriMo to rewrite my existing project,
              <i>Jackass Dissonance</i>. It's currently ~77k word of absolute mess,
              with at least three conflicting main plots clashing together because the
              story kept evolving in my head and I didn't start over. Little of it is
              usable in its current form.</p>
          <p> So I'm starting from the beginning and working off my current pile
              of word vomit to create something resembling a legible, cohesive novel.
              I will be posting semi-regular updates, and an up-to-date word count of
              the new version.</p>


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
