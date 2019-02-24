<?php

$text = "this is a string";
$text2 = $text . " with another string";
echo $text2;
echo var_dump($text2);

$int = 42;
$oct = 012;
$hex = 0xFF;
echo var_dump($hex);

$float = 1.5;
$a = 1.2e3;
$b = 7e-2;
echo var_dump($a);

$boolean = true;
$boolean2 = false;
echo $boolean . var_dump($boolean);

# type casting
$string = "22";
$zahl = (int) $string;
echo var_dump($zahl);
?>
