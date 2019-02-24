<?php
session_start();

# empty the _SESSION array
$_SESSION = [];

# delete clientside session cookie
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), "", time()-42000, "/");
}

# delete current serverside session
session_destroy();

# redirect to the start page
$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
$uri = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
$extra = "login_start.php";
header("Location: http://$host$uri/$extra");
?>
