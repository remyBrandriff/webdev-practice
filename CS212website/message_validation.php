<!-- Author: Remy Brandriff-->
<!-- Created November 13, 2016 for CS212 at NAU -->
<!-- Validation for message form -->

<?php
  include('session.php');
 ?>

<!DOCTYPE html>

<html>
  <head>
      <title> Messages </title>
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
                  <center><h2>Messages</h2></center>
                  <p> Send messages to the admin/webmaster, and check your replies! </p>
                  <hr>
                  <center><p> Send a message! </p></center>

                  <form method="post" action=" <?php
                    echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <!--Got past form method "post" --> <!-- test -->

                    <!-- validation -->
                    <?php
                      $labels = array("subject" => "Subject",
                                      "message" => "Message");

                      $subjectErr = $messageErr = "";

                      $vflag = true;

                      foreach($_POST as $field => $value) {
                        //check if fields are filled out and check validity
                        if($field === "subject") {
                          if(empty($value)) {
                            $subjectErr = "This is a required field.<br>\n";
                            $vflag = false;
                          } elseif (!preg_match("/^[a-zA-Z0-9 ]*$/", $value)) {
                            $subjectErr = "Only letters, numbers, and white space allowed.<br>\n";
                            $vflag = false;
                          }
                        }

                        if($field === "message") {
                          if(empty($value)) {
                              $messageErr = "This is a required field.<br>\n";
                              $vflag = false;
                          }
                        }
                      }

                      //if vflag is still true and nothing has gone wrong...
                      if($vflag == true) {
                        //upload message to MessageSystem database

                        //set some database values, initialized here
                        $recipient = "Webmaster";
                        $sender = $login_session;
                        $userid = $login_session; //$login_session = username
                        $subject = $_POST["subject"];
                        $message = $_POST["message"];
                        //$sent = SYSDATE(); //sent/recieved timestamp will be initialized with SYSDATE() when sending data to database
                        $replied = NULL;
                        $status = "Unread";


                        $host = "localhost";
                        $user = "root";
                        $sqlpswd = "N9748C";
                        $dbase = "my_website";

                        //echo "<h2>Trying to connect to server.</h2>";

                        $cxn = mysql_connect($host, $user, $sqlpswd) or die ("No connection possible.");

                        if ($cxn == NULL) {
                            //  echo "<h6>Database Connection Error</h6>";
                            $vflag = false;
                        } else { //echo "<h6>Connected. Trying to select database.</h6>";
                        }

                        $dbr = mysql_select_db($dbase,$cxn) or die(mysql_error());

                        if ($dbr == false) {
                            //  echo "<h6>DB Error: ".mysql_error($cxn)."</h6>";
                            $vflag = false;
                        } else { //echo "<h6>Database selected. Trying to register user.</h6>";
                        }
                        //connected to server earlier using config.php
                        $sql = "INSERT INTO MessageSystem (Recipient, Sender, Userid, Subject, Message, Received, Status)
                                VALUES ('$recipient', '$sender', '$userid', '$subject', '$message', SYSDATE(), '$status')";

                        $result = mysql_query($sql, $cxn);

                        if($result == false) {
                          echo "<p>There was an error. Message has failed to send.</p>";
                          $vflag = false;
                        } else {
                          echo "<p> Message successfully sent!</p>";
                          echo "<p> Return to <a href='messageForm.php'>Messages</a></p>";
                        }
                      } else {
                        echo "Please fill out the form and click submit to send message.\n
                              <form action='$_SERVER[PHP_SELF]' method='POST'>";

                        //redraw form w/ same text user entered
                        foreach($labels as $field => $label) {
                          echo "<div class='field'>\n
                                <label for='$field'>$label</label>\n";

                          //echo subject label and field , print error
                          if($field === "subject") {
                              echo "<input type='text' name='$field' id='$field'
                                    size='35' maxlength='65' value='$_POST[$field]' />";

                              echo "$subjectErr\n";
                          }

                          //echo message label and field, print error
                          if ($field === "message") {
                              echo "<div id='message'>\n
                                    <textarea name='message' id='$field'>$_POST[$field]</textarea>
                                    </div>";
                              echo "$messageErr\n";
                          }
                          echo "</div>\n";
                        }

                        //display submit button
                        echo "<div id='submit'>\n
                              <input type='submit' value='submit'>\n
                              </div>
                              </form>";

                      }
                     ?>
                   </div>
                 </table>
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
                </script>

              </body>
          </html>
