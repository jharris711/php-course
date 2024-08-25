<?php

$number = 1;

/* while ($number <= 10) {
    if ($number % 2 === 0) {
        echo $number . ' is even <br />';
    } else {
        echo $number . ' is odd <br />';
    }

    $number++;
}; */


// Break out of a loop
/* for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo $i . '<br />';
} */

// Skip and continue
/* for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }

    echo $i . '<br />';
}
 */

$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80,
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an A <br />';
    } elseif ($grade >= 80) {
        echo $name . ' has a B <br />';
    } elseif ($grade >= 70) {
        echo $name . ' has a C <br />';
    } elseif ($grade >= 60) {
        echo $name . ' has a D <br />';
    } else {
        echo $name . ' has an F <br />';
    }
}
