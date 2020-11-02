<!-- Author: Remy Brandriff-->
<!-- Created November 6, 2016 for CS212 at NAU -->
<!-- Validation for registration form for new users -->

<!DOCTYPE html>

<html>
  <head>
      <title> Registration </title>
      <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
      <link rel="stylesheet" href="contact_me_style_sheet.css">
  </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Remy Brandriff </h1>
        <h3> Officially Unofficial Website for the (Unpublished) Author </h3>

        <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
        <!-- Only shows link to Home screen and registration form until user signs in -->
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Pages</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="index.html">Home</a>
              <a href="registrationForm.php">User Registration</a>
            </div>
        </div>

      </div> <!-- header -->

      <div id="wrapper">
        <div id="content">

          <!-- Content -->
            <td width=498 valign=top bgcolor=#A31621>
            <table width=100%>
              <center><h2>New User Registration</h2> </center>
              <br>
              <p>Welcome to the official website for the breakout sci-fi writer,
                 Remy Brandriff. Please create a new user profile to view exclusive
                 content and sign up for e-mail updates (NOTE: filling out the form
                 below does not automatically sign you up for the e-mail list). </p>

              <hr>

              <form method="post" action=" <?php
                echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!--<Got past form method "post" --> <!-- test -->

              <!-- form validation -->
              <?php
                $labels = array("fname" => "First Name",
                                "lname" => "Last Name",
                                "email" => "Email Address",
                                "userid" => "Username",
                                "pass1" => "Password",
                                "pass2" => "Re-enter Password");

                $fnameErr = $lnameErr = $emailErr =  $useridErr = $pass1Err = $pass2Err = "";

                $vflag = true;

                //go through $_POST and validate fields
                foreach($_POST as $field => $value) {
                  //check if first name field is filled in or not
                  //if filled, check validity of test. Only letters and white space allowed
                  if ($field === "fname") {
                    if(empty($value)) {
                      $fnameErr = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif (!preg_match("/^[a-zA-Z ]*$/", $value)) {
                      $fnameErr = "Only letters and white space allowed.<br>\n";
                      $vflag = false;
                    } else { //if everything's cool, save value
                      $fname = $value;
                    }
                  }

                  //check if last name field is filled in or not
                  //if filled, check validity of test. Only letters and white space allowed
                  if ($field === "lname") {
                    if(empty($value)) {
                      $lnameErr = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif (!preg_match("/^[a-zA-Z ]*$/", $value)) {
                      $lnameErr = "Only letters and white space allowed.<br>\n";
                      $vflag = false;
                    } else {
                      $lname = $value;
                    }
                  }
                  //check if email field is filled in or not
                  //if filled, check validity of email address against pattern
                  if ($field === "email") {
                    if(empty($value)) {
                      $emailErr = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif (!ereg("^.+@.+\.(com|edu|org|gov)$", $value)) {
                      $emailErr = "E-mail address must be in proper format:
                                   <i>username@domain.(com|org|edu|gov)</i>.<br>\n";
                      $vflag = false;
                    } else {
                      $email = $value;
                    }
                  }

                  //check if userid field is filled in or not
                  //if filled, check validity of test. Only letters, numbers and underscores allowed
                  if ($field === "userid") {
                    if(empty($value)) {
                      $useridErr = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $value)) {
                      $useridErr = "Only letters, numbers, and underscores allowed.<br>\n";
                      $vflag = false;
                    } else {
                      $userid = $value;
                    }
                  }
                  //check if password field is filled in or not
                  //if filled, check validity of test. Only letters, numbers, and underscores allowed
                  if ($field === "pass1") {
                    if(empty($value)) {
                      $pass1Err = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $value)) {
                      $pass1Err = "Only letters, numbers, and underscores allowed.<br>\n";
                      $vflag = false;
                    } else {
                      $pass1 = $value;
                    }
                  }

                  //check if re-enter password field is filled in or not
                  //if filled, check validity of test. Must match pass1 field
                  if ($field === "pass2") {
                    if(empty($value)) {
                      $pass2Err = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif ($value != $_POST["pass1"]) {
                      $pass2Err = "Passwords must match.<br>\n";
                      $vflag = false;
                    } else {
                      $pass2 = $value;
                    }
                  }
                }

                //if vflag is still true and nothing went wrong, proceed.
                if($vflag == true) {

                  //process registration
                  //adapted from code given as reference
                  $host = "tund.cefns.nau.edu";
                  $user = "bsb232";
                  $sqlpswd = "YOUng_jUstIcE3496";
                  $dbase = "bsb232";

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

                  //check if userid already exists
                  $sql = "SELECT * FROM Users WHERE username = '$userid'";
                  $result = mysql_query($sql, $cxn);

                  if ($result == false) {
                  //  echo "<h4>Query Error: ".mysql_error($cxn)."</h4>";
                    $vflag = false;
                  } else {

                    //if query succeeded and returned something, print error
                    if(mysql_num_rows($result) > 0) {
                      echo "<p>That username ('$userid') is already in use. Please select another userid.</p>";
                      $userid = "";
                      $pass1 = "";
                      $pass2 = "";
                      $vflag = false;
                    } else {
                      $sql = "INSERT INTO Users (email, create_date, password, username, last_name, first_name)
                              VALUES ('$email', SYSDATE(), '$pass1', '$userid', '$lname', '$fname')";
                      $result = mysql_query($sql, $cxn);

                      if($result == false) {
                        //echo "<h4>Query Error: ".mysql_error($cxn)."</h4>";
                        echo "<p>Something went really wrong and your registration failed.<p>";
                        $vFlag = false;
                      } else {
                        //echo "<p>User successfully registered.  Now attempting login.<p>";

                        $sql = "INSERT INTO UserActivity (username, signin) VALUES ('$userid', SYSDATE())";
                        $result = mysql_query($sql,$cxn);

                        if($result == false) {
                          //echo "<h4>Query Error: ".mysql_error($cxn)."</h4>";
                          echo "<p>Something went really wrong and we couldn't log you in.<p>";
                          echo "Please go to our <a href='registrationForm.php'>Registration</a> and try again.<p>";
                          echo "Sorry for the inconvenience.";
                        } else {

                          //if everything went well, we need to start a session and save user info
                          session_start();
                          $_SESSION['userid'] = $userid;
                          $_SESSION['permission'] = 'User'; //default
                          $_SESSION['fname'] = $fname;

                          echo "<p>Successfully logged in.</p>";
                          echo "Click the link to go to our <a href='index.php'>Home Page</a>.</p>";

                        }
                      }
                    }
                  }

                } elseif ($vflag == false) {
                  //if there is an issue with the form, print message and redraw form
                  echo "Please fill out the form and click submit to register.\n
                        <form action='$_SERVER[PHP_SELF]' method='POST'>";

                  //redraws form with same text user entered
                  foreach ($labels as $field => $label) {
                    //echo the label
                    echo "<div class='field'>\n
                          <label for='$field'>$label</label>\n";

                    //echo the labels and fields
                    if ($field === "fname" or
                        $field === "lname" or
                        $field === "email") {
                          echo "<input type='text' name='$field' id='$field'
                                size='35' maxlength='65' value='$_POST[$field]' />";

                          //display error messages
                          if ($field === "fname") { echo "$fnameErr\n"; }
                          if ($field === "lname") { echo "$lnameErr\n"; }
                          if ($field === "email") { echo "$emailErr\n"; }
                    }

                    //echo userid labels and fields
                    if ($field === "userid") {
                          echo "<input type='text' name='$field' id='$field'
                                size='35' maxlength='65' value='$_POST[$field]'/>";

                          //display error messages
                          if ($field === "userid") { echo "$useridErr\n"; }
                    }

                    //echo password fields
                    if ($field === "pass1" or $field === "pass2") {
                          echo "<input type='password' name='$field' id='$field'
                                size='35' maxlength='65' value= '$_POST[$field]' />";

                          if ($field === "pass1") { echo "$pass1Err\n"; }
                          if ($field === "pass2") { echo "$pass2Err\n"; }
                    }

                    echo "</div>\n";

                  }

                    echo "<div id='submit'>\n
                          <input type='submit' value='submit'>\n
                          </div>
                          </form>";

                }
               ?>
             </form>
           </table>
        </div> <!-- content -->
      </div> <!-- wrapper -->

  </body>

</html>
