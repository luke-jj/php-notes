<?php

# get form data
$username = request()->get('username');
$password = request()->get('password');
$confirm_password = request()->get('confirm_password');

# make sure the user confirmed his new password correctly
if ($password != $confirmPassword) {
  $session->getFlashBag()->add('error', 'Passwords do not match.');
  redirect('/register.php'); # redirect in case of error
}

# try to find a user with the same username as the new user, and
# if username is already in use throw an error
$user = db_findUserByUsername($username);
if (!empty($user)) {
  $session->getFlashBag()->add('error', 'User already exists.');
}

# hash the password with the php standard hashing algorithm (bcrypt)
$hashed = password_hash($password, PASSWORD_DEFAULT);
$user = db_createUser($username, $hashed); # create new db entry with hash
$session->getFlashBag()->add('success', 'User added');
redirect('/');

