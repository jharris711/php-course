<?php

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo 'The square of 5 is ' . $result; // The square of 5 is 25


// Closures
// Closures are anonymous functions that can access variables from the parent scope.
function createCounter() {
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

echo '<br />';
echo $counter(); // 1
echo '<br />';
echo $counter(); // 1
echo '<br />';
echo $counter(); // 1
echo '<br />';
echo $counter(); // 1
echo '<br />';
echo $counter(); // 1
echo '<br />';
echo $counter(); // 1