<!-- Page for The Eden Project -->
<!-- Created 10/24/16 -->

<!DOCTYPE HTML>

<?php
 include('session.php');
 ?>

<html>

  <head>
    <title> The Eden Project </title>
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
          <h2> The Eden Project </h2>
          <br>
          <p> <i> In a technologically advanced world, a group of ill-fitted and untrained
              revolutionaries take to the virtual world to win a war before the
              tyrannical government squashes the weak rebellion. </i></p>
          <br>
          <p> Courier Lyra Quinn has a comfortable existance with her boyfriend,
              and her job of delivering packages in techno-haven Chicago is never
              boring. But she might wish it was, when one such delivery takes her
              straight into the heart of megacorporation ArkAngel Enterprises, the
              leader in nearly every cutting edge industry, and onto the radar of
              prodigy Evelyn West. Soon after, her boyfriend is murdered and Lyra
              is faced with a startling discovery about the man she loved, and must
              go on the run to save her own life.
          <p> Evelyn is a genius born with a broken heart and no conscience, and
              plays the puppetmaster as the developer behind ArkAngel's newest hit,
              the Knowhere virtual reality gaming console that projects users straight
              into the virtual world, with full sensory immersion. Little does she know
              that ArkAngel has much bigger plans for her invention than she realizes!
              When her life is put in danger, she and her minder, Jagger, have
              to stay one step ahead of the people after the secrets in her head. </p>
          <p> Soon, these misfits are embroiled in a net of dark secrets that reach
              deep into Evelyn's past, and reveal some secrets about her and ArkAngel
              that may have been better left untold. What does this mean for her, and
              her uncanny expertizse in virtual reality, a largely unexplored domain? </p>
          <p> On another front, the enigmatic and cunning Jack leads a rebellion
              against a government that seems uptopic on the surface, but hides a
              dangerous and deadly secret. He's woefully unprepared, with a small group of
              untrained disillusioned citizens behind him, when the ragtag fugitives
              land in his lap--a courier with an important delivery, a deaf servant
              who knows more than he's letting on, and the daughter of ArkAngel's CEO! </p>
          <p> Maybe Jack's rebellion isn't as doomed as it seems. </p>
          <br>
          <center>
          <img src="images/lyra.png"
               alt="A portrait of a young African American woman with thick, dark curls pulled back from
                    her face and then over her shoulders. She is holding a black mug in her
                    her hands in front of her, and appears to be blowing on it, as if to cool
                    down hot coffee or tea. She is looking off screen. It may or may not be a picture
                    of Kerry Washington."
               style="width:220px;height:270px;" >
          <img src="images/evelyn.png"
               alt="A portrait of a young lady, very pale, with long, bright red-orange hair cascading
                    over her shoulders. She's striking, like a ghost, and smirking at the
                    camera. She can't be more than sixteen, but is clearly very intelligent and clever,
                    and a bit of an asshole. Actress: Annalise Basso."
               style="width:200px;height:270px;" >
          <img src="images/jagger.png"
               alt="A young man, from the chest up. His most striking feature is his full head of
                    snow white hair, swooped forward from the back to cover the right side of his
                    face; the one visible eyebrow is dark. He is very pale, with a smattering of
                    freckles across his cheekbones. His lower lip is pierced on the left side. He is
                    scratching his neck, and has a strange tattoo on his forearm. It is not actually
                    a photograph, but a painting."
               style="width:210px;height:270px;" >
             </center>
          <hr>
          <p> This high concept cyberpunk adventure delves deep into the intersection
              of man and machine, and brings up the question: What, exactly, does it mean to be human? </p>

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
