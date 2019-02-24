<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == "ok") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to your session</title>
</head>
<body>
<?php
  echo "<h1>Hi {$_SESSION['name']}</h1>";
  echo "<p>{$_SESSION['name']}'s private info goes here.</p>";
?>
<p><a href="login_logout.php">Logout</a></p>
</body>
</html>
<?php
} else {
  $host = htmlspecialchars($_SERVER["HTTP_HOST"]);
  $uri = rtrim(dirname(htmlspecialchars($_SERVER['PHP_SELF'])), "/\\");
  $extra = "login_start.php";
  header("Location: http://$host$uri/$extra");
}
?>
