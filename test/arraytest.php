<?php
# array definition
$answers = ["never", "sometimes", "often"];
$values = [42, 66, 3.5, 55, 7];
$values2 = [42, 66, 3.5, 55, 7, "never", "sometimes", "often"];

# pre php5 array definition
$answers2 = array("never", "sometimes", "often");

# array insertion
$answers[] = "three times a week";
$answers[] = "twice daily";


# printing arrays
echo $answers[0];
echo "<br>";
echo $answers[1];
echo "<br>";
print_r($answers);
echo "<br>";
echo var_dump($answers);
echo "<br>";
echo "<br>";


# iterating over arrays
foreach ($answers as $answer) {
  echo "$answer <br>";
}
echo $answer;   # returns the latest value even outside the code block
echo "<br>";

# array length
echo count($answers);
echo "<br>";
?>
