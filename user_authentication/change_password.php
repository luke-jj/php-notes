<?php
require_authentication();

$currentPassword = request()->get('current_password');
$newPassword = request()->get('password');
$confirmPassword = request()->get('confirm_password');

# check if new passwords match
if ($newPassword != $confirmPassword) {
  $session->getFlashBag()->add('error', 'New passwords do not match. Please try again!');
  redirect('/account.php');
}

# retrieve the user data for the currently authenticated user from database
$user = get_authenticated_user();

if (empty($user)) {
  $session->getFlashBag()->add('error', 'User data not found. Are you logged in?');
  redirect('/account.php');
}
# verify that the user entered current password matches the db stored password
if (!password_verify($currentPassword, $user['password'])) {
  $session->getFlashBag()->add('error', 'Current password is incorrect. Please try again!');
  redirect('/account.php');
}

# hash the password
$hashed = password_hash($newPassword, PASSWORD_DEFAULT);

# store the password in the database
if (!db_updatePassword($hashed, $user['id'])) {
  $session->getFlashBag()->add('error', 'Could not update password. Please try again!');
}
