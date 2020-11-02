<!-- database information for CEFNS website MySQL database configuration -->
<!-- config.php created Nov 7, 16, Remy Brandriff -->

<?php
  define('DB_SERVER', 'tund.cefns.nau.edu');
  define('DB_USERNAME', 'bsb232');
  define('DB_PASSWORD', 'YOUng_jUstIcE3496');
  define('DB_DATABASE', 'bsb232');
  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
