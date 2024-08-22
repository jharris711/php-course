<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result1 = $number1 + $number2; // Int + Int
$result2 = $number1 + $number3; // Int + String
$result3 = $number3 + $number3; // String + String
$result4 = $number1 . $number2; // Int to string (concatenation)
// $result5 = $fruit + $number2; // Error, can not add string to int
$result6 = $number1 + $bool1; // True converted to 1, so 5 + 1 = 6
$result7 = $number1 + $bool2; // False converted to 0, so 5 + 0 = 5
$result8 = $number1 + $null; // Null converted to 0, so 5 + 0 = 5

var_dump($result1);
echo '<br />';
var_dump($result2);
echo '<br />';
var_dump($result3);
echo '<br />';
var_dump($result4);
echo '<br />';
var_dump($result6);
echo '<br />';
var_dump($result7);
echo '<br />';
var_dump($result8);
echo '<br />';


// Explicit Conversion
$result9 = (string) $number1; // to String
$result10 = (int) $number3; // to Int
$result11 = (bool) $number1; // to Boolean

var_dump($result9);
echo '<br />';
var_dump($result10);
echo '<br />';
var_dump($result11);
echo '<br />';