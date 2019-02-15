<?php
class Example {
  public function __construct() {
    echo get_class($this) . " has been created<br>\n";
  }

  # destructor gets executed when an instance goes out of scope
  public function __destruct() {
    echo get_class($this) . " has been destroyed<br>\n";
  }
}

$object = new Example;
unset($object);
?>
