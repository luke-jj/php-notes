<?php
session_start();

# database data
$users = [
  "frodo" => "12345",
  "sam" => "gardening",
  "merry" => "asdf"
];

# extract entered information from form submission
$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

# validate information
if (!array_key_exists($name, $users) {
  $extra = "login_start?f=1";
} elseif ($users[$name] != $password) {
  $extra = "login_start?f=2";
} else {
  # in case of successful validation, redirect to welcome screen and save
  # login success on a severside session variable.
  $extra = "login_welcome.php";
  $_SESSION['login'] = "ok";
  $_SESSION['name'] = $name;
}

header("Location: $extra");

# header("Location: http://$host$uri/$extra"); # using absolute url
?>
