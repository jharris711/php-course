<?php

class MathUtility {
    public static $pi = 3.14159;
}

echo '<div>';
/* $mathUtility = new MathUtility();
echo $mathUtility->pi . '<br>'; */
// Fatal error: Uncaught Error: Cannot access property MathUtility::$pi
// because it is a static property
// Have to use :: to access static properties because they belong to the class, not the instance
echo MathUtility::$pi . '<br>';

echo '</div>';
