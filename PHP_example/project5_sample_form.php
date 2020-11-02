<!DOCTYPE html>
<?php
/* Email Form
 * This is a simple email form that is used to demonstrate PHP validation.  This
 * particular file also demonstrates using PHP to display HTML elements
 *
 * This is a crippled version of the one I showed in class.  It would make a
 * good starting point.  Even so, DO NOT USE my code.  Pick your own variable
 * names (for keys and values, too) and make up your own CSS (or, better still,
 * use the CSS you came up with for your Project 3, but invoke the external
 * CSS with a PHP echo statement, and any page specific stuff should be your
 * own, not what you see below.
 *
 * Author: Patrick E. Kelley - 2012
 */
$labels = array("name" => "Your name",
                "address" => "Your email address");
?>
<html>
    <head>
        <title>Example Form</title>
        <style type ="text/css">
        <!--
            form {margin: 1.5em 0 0 0; padding: 0;}
            .field {padding-top: .5em}
            label {font-weight: bold; float: left; width: 20%;
                   margin-right: 1em; text-align: right;}
            #submit {margin-left: 35%; padding-top: 1em;}
        -->
        </style>
    </head>

    <body>
        <h3>Please fill out the form and click submit to send an email.</h3>
        <form action="someValidator.php" method="POST">
            <?php
              /* Loop that displays the form fields */
              foreach ($labels as $field => $label) {
                  /* echo the label */
                  echo "<div class='field'>\n
                          <label for='$field'>$label</label>\n";

                  /* echo the appropriate field */
                  if ($field === "name" or $field === "address")
                  {
                      echo "<input type='text' name='$field' id='$field'
                            size='65' maxlength='65' />\n";
                  }

                  /* echo the end of the field div */
                  echo "</div>\n";
              }

              /* Display the submit button */
              echo "<div id='submit'>\n
                      <input type='submit' value='Send Message'>\n
                    </div>";
            ?>
        </form>
    </body>
</html>
