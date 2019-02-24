<?php
include 'list.php';

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

# extract just the value
foreach ($list as $item) {
    echo '<tr>';

    foreach($item as $element) {
        echo "<td>$element<td>\n";
    }
    echo '</tr>';
}
echo '</table>';


# extract key and value
foreach ($list as $key => $item) {
    echo $key . " " . $item['title'] . "\n";
}
?>

