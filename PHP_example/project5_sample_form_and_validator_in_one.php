<!DOCTYPE html>
<?php
/* Both Initial Form and Validation in one file
 * This is a PHP file that displays a simple email form and then validates any
 * entered data.  If any field fails validation, then the form is redisplayed
 * with an error.  Otherwise, the action for correct entry is triggered.
 *
 * This is based on the crippled form and validator I supplied as a resource.
 * It is intended to show the logic for accomplishing the same thing in a single
 * file.  Even so, I really want you to use the two-file method for a couple of
 * reasons.  First, it is easier to get the form working first before tackling
 * the validation, and there is less risk of bad validation code contaminating
 * your form once you get it working.  Secondly, it gives you a little more
 * practice writing PHP.
 *
 * Author: Patrick E. Kelley - 2015
 */
?>
<html>
    <head>
        <title>Example Email Form</title>
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
        <?php
        /* set up array for POST inputs */
        /* not in heading like before, though you could */
        $labels = array("name" => "Your name",
                        "address" => "Your email address",
                        "type" => "Email category");
        /* set a valid flag true */
        $vflag = 1;

        /* See if there is any post data yet.  If so, validate.  Otherwise, skip
         * to drawing the form. */
        if (!empty($_POST))
        {
            /* scan the POST array and validate the fields */
            foreach ($_POST as $field => $value) {
                /* handle free-form text fields */
                if ($field === "name") {
                    if(empty($value)){
                        echo"You must fill in the ($labels[$field]) field.<br>\n";
                        /* set valid flag to false */
                        $vflag = false;
                    }
                }

                /* handle email address format */
                if ($field === "address") {
                    if(empty($value)){
                        echo"You must fill in the ($labels[$field]) field.<br>\n";
                        /* set valid flag to false */
                        $vflag = false;
                    }
                    /* you didn't really think I'd give you the pattern? */
                    elseif (!ereg("^.+$",$value)) {
                        echo "Email address must be in the form
                            <i>username@hostname.(com|org|edu|gov)</i>.<br>\n";
                        /* set valid flag to false */
                        $vflag = false;
                    }
                }
            }
        }

        /* This is a bit more complicated than before we must decide whether to
         * do the form's work depending on the valid flag but also on whether
         * there was anything to validate.
         * valid flag == true AND $_POST not empty => do form work
         * otherwise display form (invalid entry or $_POST empty)
         */
        if ((vflag) and (!empty($_POST)))  /* if vflag true AND $_POST is not
                                              empty, do the form's work
                                              (email in this case)... */
            echo "I'd be doing something good here if only the code existed.";
        else /* either vflag is false OR $_POST is empty */
        {
            /* $_SERVER(PHP_SELF) means 'use this file on SUBMIT' */
            echo "<h3>Please fill out the form and click submit to send an email.
                </h3>\n
                <form action='$_SERVER[PHP_SELF]' method='POST'>";

            /* Loop that displays the form fields */
            foreach ($labels as $field => $label) {
                  /* echo the label */
                  echo "<div class='field'>\n
                          <label for='$field'>$label</label>\n";

                  /* echo the appropriate field */
                  if ($field === "name" or $field === "address") {
                      echo "<input type='text' name='$field' id='$field'
                            size='65' maxlength='65' value='$_POST[$field]' />\n";
                  }

                  /* echo the end of the field div */
                  echo "</div>\n";
              }

              /* Display the submit button */
              echo "<div id='submit'>\n
                      <input type='submit' value='Send Message'>\n
                    </div>
                </form>";
        }
        ?>
    </body>
</html>
