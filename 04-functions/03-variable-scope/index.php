<?php

// Global scope
$name = 'Alice';

echo $name;

function sayHello() {
    // Local scope
    $name = 'Bob';

    echo $name;
}
