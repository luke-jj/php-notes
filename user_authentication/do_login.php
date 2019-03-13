<?php

# get the password hash stored under the username
$user = db_findUserByUsername(request()->get('username');

# throw error if username is not found (password is an empty value)
if (empty($user)) {
  $session->getFlashBag()->add('error', 'Username was not found');
  redirect('/login.php');
}

# check the stored password hash against the user provided plain text password
if (!password_verify(request->get('password'), $user['password'])) {
  $session->getFlashBag()->add('error', 'Invalid Password');
  redirect('/login.php');
}

# set server-side session variables that authenticate the user
$session->set('auth_logged_in', true);
$session->set('auth_user_id', (int) $user['id']);
$session->set('auth_roles', (int) $user['role_id']);

$session->getFlashBag()->add('success', 'Successfully logged in.');
redirect('/');
