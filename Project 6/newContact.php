<!-- Author: Remy Brandriff-->
<!-- Created October 3, 2016 for CS212 at NAU -->
<!-- Updated contant form for CEFNS website, using PHP -->
<!-- A simple email form with PHP validation,
     using provided examples as reference -->

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
    <link rel="stylesheet" href="first_style_sheet.css">
    <link rel="stylesheet" href="contact_me_style_sheet.css">

  </head>

  <body>
		 		<div id="container">
		 			<div id="header">
		 				<center>
		 <!--heading -->
		 		    <h1> Some Assembly Required </h1>
		 		    <h3> - Home of My Creative Wasting of Time- </h3>
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
      <p> Please feel free to contact me using the form below with any questions or
          comments you have regarding this site and its content, or any questions/comments
          for me. I'll do my best to respond ASAP, which means within 24-48 hours
          from when I get it. </p>
      <p> Safari doesn't like the message box, for some reason, and I am working to
          fix that. If you're using Safari, I ask that you contact me via email directly. </p>
      <p> I can also be contacted at bsb232@nau.edu, with a relevant subject line.
          If your message is going to be long, I prefer you contact me via email
          directly instead of using this form. </p>

<!-- php for form creation -->
<form action="contact_form_validator.php" method="POST"> <!-- calls for validator -->
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
                  size='35' maxlength='65' />\n";
         }
         echo "</div>\n";
       }
       ?>

      <div id="message"> <!--text area to enter message -->
       <p> Message </p>
       <textarea name="message"></textarea>
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
		 				<a href="newContact.php"> &#8226; Contact Me</a> <br>
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
