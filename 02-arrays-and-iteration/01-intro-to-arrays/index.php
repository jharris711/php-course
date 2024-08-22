<?php

$names = array('Alice', 'Bob', 'Charlie', 'David', 'Eve');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

print_r($names);

echo '<br/>';
echo $names[1];
echo '<br/>';
echo $numbers[3];


//$numbers[6] = 100;
$numbers[] = 100;
$numbers[] = 101;

unset($numbers[2]);
inspect($numbers);
