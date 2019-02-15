<?php
$currentYear = date('Y');
$year = $currentYear - 100;

while ($year <= $currentYear) {
    echo $year . "<br>\n";
    $year++;
}

do {
    echo $year . "<br>\n";
    $year++;
} while ($year <= $currentYear);
?>
