<?php
ini_set('display_errors', 'Off');

/*
 * This function will be triggered when an error is thrown.
 * This function will turn all errors into exceptions.
 */
function exception_error_handler($severity, $message, $file, $line) {
  throw new ErrorException($message, 0, $severity, $file, $line);
}
set_error_handler("exception_error_handler");


/*
 * This function will be triggered by default when a exception occurs.
 */
function exception_handler($e) {
  echo "Uncaught exception: " . $e->getMessage();
}
set_exception_handler("exception_handler");



try {
  strpos();
} catch (Exception $e) {
  echo "Error! " . $e->getMessage();
}

echo 10/0;

echo "End of file.";
