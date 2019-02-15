<?php
  function output() {
    echo "Hey!";
  }

  function addMe($a, $b) {
    return $a + $b;
  }


  function passByValue($a) {
    $a++;
  }

  function passByReference(&$a) {
    $a++;
  }

  # default parameters
  function addToTen($a, $ten = 10) {
    return $a + $ten;
  }

  # vararg parameters
  function printStuff(...$stuff) {
    foreach ($stuff as $thing) {
      echo "$thing <br>\n";
    }
  }

  # specifying the datatype
  function double(int $num) {
    return $num * 2;
  }

  # specifying the return type
  function double(int $num) : int {
    return $num * 2;
  }

  # lambda functions
  $lambda = function($a) { return $a / 2; };









  $o = output();
  echo $o;
  echo "<br>\n";

  $sum = addMe(40, 35);
  echo $sum;
  echo "<br>\n";

  $test1 = 10;
  $test2 = 10;
  echo "Before pass by value: $test1 <br>";
  passByValue($test1);
  echo "After pass by value: $test1 <br>";
  echo "Before pass by reference: $test2 <br>";
  passByReference($test2);
  echo "After pass by reference: $test2 <br>";

  printStuff("this", "is", "sparta");

  # using lambdas
  $result = $lambda(5);
  echo $result . "<br>\n";

  # passing lambdas as arguments
  $numbers = [4, 33, 2];
  $result = array_map($lambda, $numbers);
  print_r($result);
  $result = array_map(function($a) { return $a / 2; }, $numbers);
  print_r($result);
  echo "<br>\n";

  # closures
  # The function uses variables defined outside the function body,
  # If the variable is changed before the function is used the result will be
  # the same. The variable binds to the function at the point of function
  # definition.
  $factor = 4;
  $lambda = function($a) use($factor) {
    return $a / $factor;
  };
  echo "Result 1: {$lambda(33)}<br>\n";
  $factor = 8;
  echo "Result 2: {$lambda(33)}<br>\n";

?>
