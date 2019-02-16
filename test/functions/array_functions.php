<?php

$names = array(
    'Mike' => 'Frog',
    'Chris' => 'Teacher',
    'Hampton' => 'Teacher',
);

# access the keys instead of the values of an array
foreach (array_keys($names) as $name) {
    echo "$name: {$names[$name]}\n";
}

function print_info($value, $key) {
    echo "$key is a $value.\n";
}

array_walk($names, 'print_info');
?>
