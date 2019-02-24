<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Using Sessions</title>
</head>
<body>
  <?php
  # using the session array to save data
  $_SESSION['name'] = "Mary";
  $_SESSION['color'] = "red";
  echo 'saving data by starting a session and saving values in the $_SESSION array';
  echo '<a href="session_readvalues.php">read values</a>';
  ?>
</body>
</html>
