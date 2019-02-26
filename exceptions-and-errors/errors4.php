<?php
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);

// Do some errors

// Notice
var_dump(5 + $nope);

// Warning
$wrestler->name = 'Hulk Hogan';

// Strict
class Foo
{
    public function bar() {}
}
Foo::bar();

// Error

Foo::nope();

echo "We'll never get here.";