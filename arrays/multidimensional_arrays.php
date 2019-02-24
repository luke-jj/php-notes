<?php
$task1 = array(
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,
);
$task2 = array(
    'title' => 'Clean out refrigerator',
    'priority' => 3,
    'due' => '2016-07-30',
    'complete' => false,
);
var_dump($task1);
var_dump($task2);

$list = array($task1, $task2);
var_dump($list);

echo $list[0]['title'];
?>
