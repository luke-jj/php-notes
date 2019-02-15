<?php
$a = 5;
$b = 5;

if ($a == $b) {
    echo ' values are equal ';
} elseif ($a < $b) {
    echo ' $a is less than $b ';
} else {
    echo ' values are not equal ';
}

$score = 59.5;
if ($score >= 60) {
    echo 'You completed the level!';
} elseif ($score <= 30) {
    echo 'You should practice some more!';
} else {
    echo 'Please try again';
}

if ($a <> $b) {
    echo 'values are not equal';
} else {
    echo 'values are equal';
}
?>
