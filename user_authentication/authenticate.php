<?php
# this function checks whether or not the user is logged in. returns bool
# check if server-side session variable is set to true
#
# use this function in a serverside template as a conditional to display
# features for logged in users.
function is_authenticated() {
  global $session;

  return $session->get('auth_logged_in', false);
}

# this function automatically redirects if a user is not authenticated.
# use this function in a server-side template access to needs to be restricted.
function require_authentication() {
  if (!is_authenticated()) {
    global $session;

    # add error to template variables
    $session->getFlashBag()->add('error', 'not authenticated');
    redirect('/login.php'); # automatic redirect
  }
}

# this function returns the user data for the currently authenticated user.
function get_authenticated_user() {
  global $session;
  return db_find_user_by_id($session->get('auth_user_id'));
}

function is_admin() {
  if (!is_authenticated()) {
    return false;
  }

  global $session;

  return $session->get('auth_roles') === 1;
}

# user must be admin to proceed
function require_admin() {
  if (!is_admin()) {
    global $session;

    # add error to template variables
    $session->getFlashBag()->add('error', 'not authorized');
    redirect('/login.php');
  }
}

# check if the user is the owner of a book
function is_owner($owner_id) {
  if (!is_authenticated()) {
    return false;
  }

  global $session;

  return $owner_id == $session->get('auth_user_id');
}
