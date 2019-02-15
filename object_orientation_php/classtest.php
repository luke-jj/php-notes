<?php
  class Customer {
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }

    public function sayHi() {
      echo "Hello there, its {$this->name}!";
    }
  }

  # parenthesis `()` can be ommited
  $Tatjana = new Customer("Tatjana");

  # use the object-operator `->`
  $Tatjana->name = "Tatjana";
  $Tatjana->sayHi();

  // (new Customer)->sayHi();

  # get object info
  echo "<br>" . var_dump($Tatjana);
?>
