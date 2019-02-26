<?php
session_start();
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");

# database data
$users = [
  "frodo" => '$2y$10$2KbDjCxiOi/fuuRHeYJE9.w.mgCLaZmt3BKNAIXUMVfUkZj8hC8fG', # "12345"
  "sam" => '$2y$10$tosJCBV.tCjtFXqv5mMFb./IrfcS4AnOv6I1yc4GjsygDKruL/lry', # "gardening",
  "merry" => '$2y$10$HZdoVA6eFxNfan9hp0qNzOSSPo5Rbii/RGyomFSCYpuuatPqNE35i' # "asdf"
];

# extract entered information from form submission
$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

# validate information
if (!array_key_exists($name, $users)) {
  $extra = "login_start.php?f=1";
} elseif (!password_verify($password, $users[$name])) {
  $extra = "login_start.php?f=2";
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
