<!DOCTYPE HTML>

<!-- Author: Remy Brandriff, bsb232, ID #3279306 -->
<!-- Created September 8, 2016 for CS212 at NAU -->
<!-- Home page for CEFNS website -->

     <!-- Edited 9/18/16 to add style sheet -->
     <!-- new homepage -->
     <!-- Edited 10/24/16 for new style -->
     <!-- Edited 11/7//16 to add login elements -->

  <?php
   include('session.php');
   ?>

     <html>

       <head>
         <title> Home </title>
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
               <h2> Welcome, <?php echo $login_session; ?> </h2>
               <br>
               <p> Remy Brandriff is a young author specializing in
                   science and speculative fiction, and the short story, and
                   currently studies at Northern Arizona University, majoring
                   in Applied Computer Science with a minor in Biology. <p>
               <p> This site will host currently unpublished works while the
                   author attempts to remedy that failing. Each page contains
                   information about past and current projects, and updates on
                   current works, including NaNoWriMo. For more information,
                   please refer to the menu at the top of the page for links. </p>
               <p> Current content consists of:
                 <ul>
                   <li><b>The Eden Project </b>- A cyberpunk adventure that pits a ragtag
                          group--a courier-turned-fugitive, a virtual reality prodigy,
                          a deaf minder, and the enigmatic leader of the rebellion--against
                          a tyrannical government and megacorporation.
                   <li><b>Blue Roses and Fireflies </b>- A spin-off novella set during
                          <i>The Eden Project</i> starring Lyra Quinn and her solo adventures.
                   <li><b>The Futurist </b>- A short story that ponders the theme Gods and Monsters,
                          and follows a narcassistic genius working for a global police agency
                          as he begins to lose his grip on reality after a terrible accident.
                   <li><b>Jackass Dissonance </b>- Join five college students thrown together in
                          one house as they realize it is no mistake their leases were mixed up,
                          and their collective presence in seaside St. Anne's is connected to
                          the strange tattoos that they mysteriously share.
                   <li><b>NaNoWriMo 2016 </b>- Upcoming NaNoWriMo project, focused on
                          re-writing <i>Jackass Dissonance.</i>
                </ul>

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
