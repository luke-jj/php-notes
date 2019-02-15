<?php
  setcookie("name", "mary", time()+7200);
  setcookie("color", "red", time()+7200);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>cookie test</title>
</head>
<body>
  <p><a href="read_cookies.php">read cookies</a></p>
</body>
</html>
