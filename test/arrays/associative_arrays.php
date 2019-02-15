<?php
# associative array
$iceCream = array('Alena' => 'Black Cherry',
    'Treasure' => 'Chocolate',
    'Dave' => 'Cookies and Cream',
    'Rialla' => 'Strawberry');
$iceCream['Peter'] = 'Stracciatella';

var_dump($iceCream);
echo $iceCream['Alena'];

# array keys can be either `int` or `string`
# if another type is used the key will be cast to an int
$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
);
var_dump($keys);
?>
