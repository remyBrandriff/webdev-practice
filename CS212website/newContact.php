<!-- Author: Remy Brandriff-->
<!-- Created October 3, 2016 for CS212 at NAU -->
<!-- Updated contant form for CEFNS website, using PHP -->
<!-- A simple email form with PHP validation,
     using provided examples as reference -->

     <!-- Edited 10/22/16 for working e-mail -->
     <!-- Edited 10/24/16 for style -->
     <!-- Edited 11/16/16 for JS validation -->

<!DOCTYPE HTML>
<?php

  $labels = array("name" => "Your name",
                  "address" => "Your email address",
                  "subject" => "Subject" );
  $message_label = array("message" => "Message");

?>

<html>

  <head>

    <title> Contact Me </title>
    <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
    <link rel="stylesheet" href="contact_me_style_sheet.css">

  </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Remy Brandriff </h1>
        <h3> Officially Unofficial Website for the (Unpublished) Author </h3>
        <p> Hello, Guest </p>

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
      <center><h2>Contact Me</h2>
      <img src="images/pointingModel.png"
           alt="A faceless white humanoid 3D model pointing at the screen."
           style="width:150px;height:230px;">
         </center>

      <p> Please feel free to contact me using the form below with any questions or
          comments you have regarding this site and its content, or any questions/comments
          for me. I'll do my best to respond ASAP, which means within 24-48 hours
          from when I get it. </p>
      <p> Safari doesn't like the message box, for some reason, and I am working to
          fix that. If you're using Safari, I ask that you contact me via email directly,
          at bsb232@nau.edu, with a relevant subject line. </p>

    <!-- php for form creation -->
    <!--<form action="contact_form_validator.php" method="POST"> --><!-- calls for validator -->
    <form name="contactForm" method='post'>
      <?php

       //loop displays form fields

       foreach ($labels as $field => $label) {
         //echo label
         echo "<div class ='field'\n
                <label for = '$field' > $label </label> \n";

         //echo correct field
         if ($field === "name" or
             $field === "address" or
             $field === "subject" ) {
           echo "<input type='text' name='$field' id='$field'
                  size='35' maxlength='65' onblur='validateField()'/>\n";

          //previously used the 'required' element
         }
         echo "</div>\n";
       }
       ?>

      <div id="message"> <!--text area to enter message -->
       <p> Message </p>
       <textarea name="message" onblur="validateField()"></textarea> <!-- previously used 'required' element -->
     </div>

     <div id="options"> <!-- drop down menu for message type options -->
       <p> Choose a message type </p>
       <form action="action_page.php">
         <select name="message type">
           <option value="complaint">Complaint</option>
           <option value="inquiry">Inquiry</option>
           <option value="other">Other</option>
           <option value="praise">Praise</option>
           <option value="question">Question</option>
           <option value="suggestion">Suggestion</option>
         </select>

     </div>

     <!-- get timestamp, then format to a date -->
     <!-- http://www.w3schools.com/php/func_date_time.asp -->
     <?php
        $time = time();
        //$timestamp = new DateTime();
        echo "Timestamp = ";
        echo ($time . "<br>");
        $date = (date("Y-m-d", $time));
        echo ($date);
        //echo $timestamp->format("U");
        //echo $timestamp->getTimestamp();
      ?>

     <?php
       echo "<div id='submit'>\n
             <input type='submit' value='submit'\n
             </div>";
       ?>
   </form>
     </div>
     <p> <i>Stock photo courtesy of www.madetobeunique.com </i></p>

    </table>
       </div>
       <br>
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

      function validateField(contactForm) {

        //alert("This field is required. function");
        var name = document.forms["contactForm"]["name"].value;
        var email = document.forms["contactForm"]["address"].value;
        var subject = document.forms["contactForm"]["subject"].value;
        var message = document.forms["contactForm"]["message"].value;

        //check each field individually
        if (name == null || name == "" || (!preg_match("/^[a-zA-Z ]*$/", name))) {
          alert("This field is required. Letters and white space only.");
          return false;
        }
        if (email == null || email == "" || (!ereg("^.+@.+\.(com|edu|org|gov)$", email))) {
            alert("This field is required. E-mail addresses must be in the proper format: username@domain.(com | org | edu | gov).");
            return false;
        }
        if (subject == null || subject == "" || (!preg_match("/^[a-zA-Z0-9 ]*$/", subject))) {
            alert("This field is required. Letters, numbers, and white space only.");
            return false;
        }
        if (message == null || message == "") {
            alert("This field is required.");
            return false;
        }

      }
    </script>

    </body>
</html>
