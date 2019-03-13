<?php
# remove all server-side session variables and redirect to the login page

$session->remove('auth_logged_in');
$session->remove('auth_user_id');
$session->remove('auth_roles');

$session->getFlashBag()->add('success', 'Successfully logged Out.');
redirect('/login.php');

