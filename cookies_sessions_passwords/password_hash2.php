<?php

$plainStoredPassword = 'peter123'; # Never store password as plain text
$storedHashedPassword = password_hash($plainStoredPassword, PASSWORD_BCRYPT);


$enteredPassword = 'peter123';
$hashedEnteredPassword = password_hash($enteredPassword, PASSWORD_BCRYPT);

$isValidPassword = password_verify($enteredPassword, $storedHashedPassword);


echo "<p>The password string to be stored in the database is: $storedHashedPassword | plain text: $plainStoredPassword</p>";

echo "<p>The password string entered by the user is: $enteredPassword</p>";
echo "<p>The hashed user provided password is: $hashedEnteredPassword</p>";

echo "<p>Verifying the entered password and the stored password hash returned:";
if ($isValidPassword) {
  echo " true</p>";
} else {
  echo " false</p>";
}
