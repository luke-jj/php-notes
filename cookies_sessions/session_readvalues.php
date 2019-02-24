<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Using Sessions</title>
</head>
<body>
  <?php
  if (isset($_SESSION['name']) && isset($_SESSION['color'])) {
    echo "Session name: " . session_name() . "<br>\n";
    echo "Session id: " . session_id() . "<br>\n";
    echo "The session values are: </br>\n";
    echo "Name: {$_SESSION['name']} <br>\n";
    echo "Color: {$_SESSION['color']} <br>\n";
  } else {
    echo 'No session set-up';
  }
  ?>
</body>
</html>
