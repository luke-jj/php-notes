<?php
  setcookie("name", "mary", time()+7200);
  setcookie("color", "red", time()+7200);


  # this will delete a cookie with the name 'peter'
  setcookie('peter', '', time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>cookie test</title>
</head>
<body>
  <p><a href="cookies_read.php">read cookies</a></p>
</body>
</html>
