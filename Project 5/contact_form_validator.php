<!-- Author: Remy Brandriff-->
<!-- Created October 8, 2016 for CS212 at NAU -->
<!-- Contact form validator for CEFNS website -->
<!-- Adapted from crippled version provided by instructor -->

<!-- form validation -->
  <!-- Name: Required. Only letters and whitespace. -->
  <!-- E-mail: Required. Must contain a valid e-mail address. -->
  <!-- Subject: Required. But no restriction on content. -->
  <!-- Message: Required. No restrictions on content. -->

<!DOCTYPE html>

<html>

  <head>

    <title> Contact Me </title>
    <link rel="stylesheet" href="first_style_sheet.css">
    <link rel="stylesheet" href="contact_me_style_sheet.css">

  </head>

  <body>
    <div id="container">
        <div id="header">
          <center>
   <!--heading -->
          <h1> Some Assembly Required </h1>
          <h3> - Being Transgender in College - </h3>
          <br> Remy Brandriff | ACS | CS212 - Fall 2016 <br>
          <br>
          </center>
        </div>
        <br>
      <div id="wrapper">
        <div id="content">

<!-- Content -->
<td width=498 valign=top bgcolor=#A31621>
  <table width=100%>
    <center><h3>Contact Me</h3>
    <img src="images/pointingModel.png"
         alt="A faceless white humanoid 3D model pointing at the screen."
         style="width:150px;height:230px;">
       </center>

    <!-- form is submitted with method "post" -->
    <!-- $_SERVER["PHP_SELF"] = super global variable that returns the filename of current executing script -->
      <!-- submitted data form will be sent to page itself, will return error messages on same page as form -->
    <!-- htmlspecialchars() will convert special characters to HTML -->
      <!-- prevents cross-site scripting attacks in forms, specifically through PHP_SELF -->
    <!-- http://www.w3schools.com/php/php_form_validation.asp -  source -->

    <form method="post" action=" <?php
        echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!--<p>Got past form method "post" --> <!-- test -->

    <!-- form validation -->

    <?php
    $labels = array("name" => "Name",
                    "address" => "E-mail",
                    "subject" => "Subject",
                    "message" => "Message");

    $nameErr = "";
    $addressErr = "";
    $subjectErr = "";
    $messageErr = "";

    $vflag = 1;

      //go through $_POST and validate fields
      foreach ($_POST as $field => $value) {

        //check if name field is filled in or not
        //if filled, check validity of text. Only letters and white space allowed.
        if ($field === "name") {
          if(empty($value)){
              $nameErr = "This is a required field.<br>\n";
              // set valid flag to false
              $vflag = false;
          } elseif (!preg_match("/^[a-zA-Z ]*$/", $value)) {
            $nameErr = "Only letters and white space allowed.<br>\n";
            $vflag = false;
          }
        }

        //check if email field is filled in or not
        //if filled in, check validity of email address
        if ($field === "address") {
          if(empty($value)){
              $addressErr = "This is a required field.<br>\n";
              // set valid flag to false
              $vflag = false;
          } elseif (!ereg("^.+@.+\.(com|edu|org|gov)$",$value)) {
            $addressErr = "E-mail address must be in proper format:
                           <i>username@domain.(com|org|edu|gov)</i>.<br>\n";
            $vflag = false;
          }
        }

        //check if subject field is filled in or not
        //if filled, check validity of text. I'm only allowing letters, numbers, and white space
        if ($field === "subject") {
          if(empty($value)){
              $subjectErr = "This is a required field.<br>\n";
              // set valid flag to false
              $vflag = false;
          } elseif (!preg_match("/^[a-zA-Z0-9 ]*$/", $value)) {
            $subjectErr = "Only letters, numbers, and white space allowed.<br>\n";
            $vflag = false;
          }
        }

        //check if message field is filled in or not
        if ($field === "message") {
          if(empty($value)){
              $messageErr = "This is a required field.<br>\n";
              // set valid flag to false
              $vflag = false;
          }
        }
      }

      //if vflag is still true and nothing has gone wrong, procede.
      if ($vflag == true) {
        //will send e-mail to NAU account

        //$to = "bsb232@nau.edu";
        echo "Your message has been sent. Thank you for your feedback, I should get
              back to you soon.";
      } else  /*vflag = false */ {
        //if there is any issue with the form, print message and reproduce form
        echo "Please fill out the form and click submit to send message.\n
              <form action='$_SERVER[PHP_SELF]' method='POST'>";

        //displays form again, with same text as user entered.
        foreach ($labels as $field => $label) {
          // echo the label
          echo "<div class='field'>\n
                <label for='$field'>$label</label>\n";

          // echo the right label and field for name, address, and subject
          if ($field === "name" or
              $field === "address" or
              $field === "subject") {
              echo "<input type='text' name='$field' id='$field'
                    size='35' maxlength='65' value='$_POST[$field]' />";
          //display error messages
          if ($field === "name") { echo "$nameErr\n"; }
          if ($field === "address") { echo "$addressErr\n"; }
          if ($field === "subject") { echo "$subjectErr\n"; }
          }
          // echo the right label and field for message
          /* This took me WAY longer than it should have.
             Note to self: don't be an idiot, refer to similar instances
             (ie. submit button) */
          if ($field === "message") { echo "<div id='message'>\n
                                      <textarea name='message' id='$field'>$_POST[$field]</textarea>
                                      </div>";
                                      echo "$messageErr\n"; } //display error message

          // end of the field div
          echo "</div>\n";
        }
        ?>

<?php
        //display submit button
        echo "<div id='submit'>\n
              <input type='submit' value='submit'>\n
              </div>
              </form>";
      }
          ?>

    </div>

     <p> <i>Stock photo courtesy of www.madetobeunique.com </i></p>

    </table>
       </div>
       <br>
     </div>

<!-- navigation pane on left side -->
     <div id="navigation">
		 			<h4>Pages</h4>
		 				<a href="index.html"> &#8226; Home</a> <br>
		 				<a href="about.html"> &#8226; About Me</a> <br>
		 				<a href="contact.html"> &#8226; Contact Me</a> <br>
						<a href="resume.html"> &#8226; Resume</a>
		 				<br>

		 			<h4>Links</h4>
		 				<a href=https://nau.edu/ims/> &#8226; NAU Inclusion and Multicultural Services</a> <br>
		 				<a href=http://www.cheryl-morgan.com/?page_id=6098/> &#8226; Gender 101</a>
		 				<br>
		 		</div>

<!-- footer w/ contact information. Unnecessary on this page? Keep for design sake -->
      <div id="footer">
		 			<p> Contact at bsb232@nau.edu or britt.shea13@gmail.com - see Contact Me page for more information </p>
		 		</div>

      </div>
    </body>
</html>
