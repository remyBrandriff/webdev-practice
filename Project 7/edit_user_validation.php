<!-- Author: Remy Brandriff-->
<!-- Created November 6, 2016 for CS212 at NAU -->
<!-- Validation for change user info form -->

<!DOCTYPE html>

<html>
    <head>
        <title> Edit User Info </title>
        <link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">
        <link rel="stylesheet" href="contact_me_style_sheet.css">
    </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Remy Brandriff </h1>
        <h3> Officially Unofficial Website for the (Unpublished) Author </h3>

        <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Pages</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="index.html">Home</a>
              <a href="about.html">About Me</a>
              <a href="newContact.php">Contact Me</a>
              <a href="changeUserInfo.php">Edit User</a>
              <a href="resume.html">Resume</a>
              <a href="edenProject.html">The Eden Project</a>
              <a href="blueRosesAndFireflies.html">Blue Roses and Fireflies</a>
              <a href="theFuturist.html">The Futurist</a>
              <a href="jackassDissonance.html">Jackass Dissonance</a>
              <a href="nanowrimo16.html">NaNoWriMo 2016</a>
            </div> <!--myDropdown-->
          </div><!--dropdown-->

      </div> <!-- header -->
      <div id="wrapper">
        <div id="content">

          <!-- Content -->
            <td width=498 valign=top bgcolor=#A31621>
            <table width=100%>
              <center><h2>Edit User</h2></center>
              <br>
              <p>Use the form below to edit your account information,
                 or delete the account entirely.</p>

              <form method="post" action=" <?php
               echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <!--<Got past form method "post" --> <!-- test -->

              <!-- form validation -->
              <?php
                $labels = array("fname" => "Change First Name",
                                "lname" => "Change Last Name",
                                "email" => "Change Email Address",
                                "userid" => "Current Username",
                                "userid2" => "Change Username",
                                "pass1" => "Enter Current Password",
                                "pass2" => "Change Password",
                                "pass3" => "Re-enter New Password");

                $nameErr = $emailErr =  $useridErr = $nuseridErr = $pass1Err = $pass2Err = $pass3Err = "";

                $vflag = true;

                //go through $_POST and validate fields
                foreach($_POST as $field => $value) {
                  //check fields and validity
                  if($field === "fname" or $field === "lname") {
                    if(!empty($value)) {
                      if (!preg_match("/^[a-zA-Z ]*$/", $value)) {
                        $nameErr = "Only letters and white space allowed.<br>\n";
                        $vflag = false;
                      } else { //if everything's cool, save value
                        if($field === '$fname') {
                          $fname = $value;
                        } elseif ($field === '$lname') {
                          $lname = $value;
                        }
                      }
                    }
                  }

                  if($field === "email") {
                    if(!empty($value)) {
                      if(!ereg("^.+@.+\.(com|edu|org|gov)$", $value)) {
                        $emailErr = "E-mail address must be in proper format:
                                     <i>username@domain.(com|org|edu|gov)</i>.<br>\n";
                        $vflag = false;
                      } else {
                        $email = $value;
                      }
                    }
                  }

                  if($field === "userid") {
                    if(empty($value)) {
                      $useridErr = "This is a required field.<br>\n";
                      $vflag = false;
                    } elseif(!empty($value)) {
                        if((!preg_match("/^[a-zA-Z0-9_]*$/", $value))) {
                          $useridErr = "Only letters, numbers, and underscores allowed.<br>\n";
                          $vflag = false;
                        } else {
                          $userid = $value;
                        }
                      }
                  }

                  if($field === "userid2") {
                    if(empty($value)) {
                      if((!preg_match("/^[a-zA-Z0-9_]*$/", $value))) {
                        $nuseridErr = "Only letters, numbers, and underscores allowed.<br>\n";
                        $vflag = false;
                      } else {
                        $nuserid = $value;
                      }
                    }
                  }

                  if($field === "pass1") { //current/past password is required for any changes
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

                  if($field === "pass2") {
                    if(!empty($value)) {
                      if(!preg_match("/^[a-zA-Z0-9_]*$/", $value)) {
                        $pass2Err = "Only letters, numbers, and underscores allowed.<br>\n";
                        $vflag = false;
                      } else {
                        $pass2 = $value;
                      }
                    }
                  }

                  //only check pass3 field if pass2 is filled. Otherwise it doesn't matter.
                  if(!empty($_POST["pass2"])) {
                    if($field === "pass3") {
                      if(empty($value)) {
                        $pass3Err = "This is a required field.<br>\n";
                        $vflag = false;
                      } elseif ($value != $_POST["pass2"]) {
                          $pass3Err = "Password fields must match.<br>\n";
                          $vflag = false;
                      } else {
                          $pass3 = $value;
                      }
                    }
                  }
                }

                //if vflag is still true and nothing went wrong, proceed
                if($vflag == true) {

                  //process changes to account
                  //adapted from code given as reference
                  $host = "localhost";
                  $user = "root";
                  $sqlpswd = "N9748C";
                  $dbase = "my_website";

                  $cxn = mysql_connect($host, $user, $sqlpswd) or die("No connection possible.");

                  if ($cxn == NULL) {
                    echo "<h6>Database Connection Error</h6>";
                    $vflag = false;
                  } else { echo "<h6>Connected. Trying to select database.</h6>";
                  }

                  $dbr = mysql_select_db($dbase,$cxn) or die(mysql_error());

                  if ($dbr == false) {
                    echo "<h6>DB Error: ".mysql_error($cxn)."</h6>";
                    $vflag = false;
                  } else { echo "<h6>Database selected. Trying to register user.</h6>";
                  }

                  //for all non-empty fields, except current userid and current password, update information

                  $sql = "UPDATE Users SET $field ='$value' WHERE username = '$userid'";
                  $result = mysql_query($sql, $cxn);

                  if ($result == true) {
                    echo "Record updated successfully.<br>\n";
                  } else {
                    echo "Error updating record.<br>\n";
                  }


                } elseif ($vflag == false) {
                  //if there is an issue with the form, print message and redraw form
                  echo "Please correct any errors and resubmit the form.\n
                        <form action='$_SERVER[PHP_SELF]' method='POST'>";

                  //redraw form
                  foreach ($labels as $field => $label) {
                    //echo the label
                    echo "<div class='field'>\n
                          <label for='$field'>$label</label>\n";

                    //echo the labels and fields
                    if ($field === "fname" or
                        $field === "lname" or
                        $field === "email" or
                        $field === "userid" or
                        $field === "userid2") {
                          echo "<input type='text' name='$field' id='$field'
                                size='35' maxlength='65' value='$_POST[$field]' />";

                          //display error messages
                          if ($field === "fname" or $field === "lname") { echo "$nameErr\n"; }
                          if ($field === "email") { echo "$emailErr\n"; }
                          if ($field === "userid") { echo "$useridErr\n"; }
                          if ($field === "userid2") { echo "$nuseridErr\n"; }
                    }

                    //echo password fields
                    if ($field === "pass1" or $field === "pass2" or $field === "pass3") {
                          echo "<input type='password' name='$field' id='$field'
                                size='35' maxlength='65' value= '$_POST[$field]' />";

                          if ($field === "pass1") { echo "$pass1Err\n"; }
                          if ($field === "pass2") { echo "$pass2Err\n"; }
                          if ($field === "pass3") { echo "$pass3Err\n"; }
                    }

                    echo "</div>\n";

                  }

                    echo "<div id='submit'>\n
                          <input type='submit' value='submit'>\n
                          </div>";

                    echo "<div id='delete'>\n
                          <input type='submit' value='Delete Account'>\n
                          </div>
                          </form>";
                }

               ?>
             </table>
           </div>
         </div>
       </body>
      </html>
