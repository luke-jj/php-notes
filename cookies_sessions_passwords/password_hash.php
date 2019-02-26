<?php
include 'inc/database_functions.php';

//Show the password stored in the database
$dbPassword = getPassword('test1');
echo '<p>Stored: ' . $dbPassword . '</p>';

//1. Compare the string 'password' with the password from the database (no match)
if ('password' === $dbpassword) {
  echo "<p>Comparison Matches!</p>";
} else {
  echo "<p>password does not match: $dbPassword</p>";
}

//2. Hash the string 'password' with the Bcrypt algarithm, using the built in 'password_hash' function
$hashed_password = password_hash('password', PASSWORD_BCRYPT);
echo '<p>Hashed Password: $hashed_password </p>';

//3. Compare the hashed password with the password from the database (no match)
if ($hashed_password === $dbPassword) {
  echo "<p>Comparison Matches!</p>";
} else {
  echo "<p>password does not match: $dbPassword</p>";
}

//4. Use the built in verify_password function to verify the string 'password' matches the password from the database
if (password_verify('password', $dbPassword)) {
  echo "<p>Verified PASSWORDS MATCH!!!</p>";
} else {
  echo "<p>password does not verify with $dbPassword</p>";
}

//5. *BONUS* Use the included saveUser(username, password) function to add a new user
// Always store HASHED passwords!!!
saveUser('test2', $hashed_password);
