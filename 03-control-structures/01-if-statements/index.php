<?php

// If statement
/* if (condition) {
    // code to be executed if condition is true
} */

$age = 36;

/* if ($age >= 21) {
    echo "You are old enough to drink in the USA";
} */
// If-Else

/* if ($age >= 21) {
    echo "You are old enough to drink in the USA";
} else {
    echo "You are NOT old enough to drink in the USA";
} */

// Nested if statement

/* if ($age >= 21) {
    echo "You are old enough to drink in the USA";
} else {
    if ($age >= 18) {
        echo "You are old enough to vote in the USA";
    } else {
        echo "You are NOT old enough to drink or vote in the USA";
    }
} */

// If-Else-If
if ($age >= 21) {
    echo "You are old enough to drink in the USA";
} else if ($age >= 18) {
    echo "You are old enough to vote in the USA";
} else {
    echo "You are NOT old enough to drink or vote in the USA";
}
