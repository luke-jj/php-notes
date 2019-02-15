<?php
  $i = 5;
  if ($i > 4) {
    echo "$i is bigger than 4.";
  } elseif ($i == 4) {
    echo "$i is equal to 4";
  } else {
    echo "$i is smaller than 4.";
  }

  echo "<br>";

  # spaceship operator
  echo 1 <=> 5;
  echo "<br>";
  echo "abc" <=> "xyz";
  echo "<br>";

  # switch statements
  $fruit = "apple";
  switch ($fruit) {
    case "banana":
    echo "it's a banana!";
    break;
    case "apple":
    echo "it's an apple!";
    break;
    case "carrot":
    echo "it's a carrot!";
    break;
    default:
    echo "Its definitely not a fruit!";
  }
  echo "<br>";

  # while statements
  $i = 0;
  while ($i < 6) {
    echo "{$i}. Hi<br>";
    $i++;
  }

  # do-while statements
  $i = 0;
  do {
    echo "{$i}. Hi there<br>";
    $i++;
  } while ($i < 3);

  # for statements
  for ($i = 0; $i < 2; $i++) {
    echo "{$i}. Why hello there<br>";
  }

  echo "<table>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<tr>\n";
    for ($j = 1; $j <= 10; $j++) {
      $zahl = $i * $j;
      echo "\t<td>{$zahl}</td>\n";
    }
  }
  echo "</table>";

  # goto
  goto a;
  echo "This will not get printed!";
  a:
  echo "Jump to Me!";

  # alternate syntax
  $i = 5;
  if ($i < 4):
    echo "$i is greater than 4<br>\n";
  endif;

  $j = 1;
  while ($j < 6):
    echo "$j: hey!<br>\n";
    $j++;
  endwhile;
?>
