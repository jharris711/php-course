<?php

define('APP_NAME', 'my_app');
define('APP_VERSION', '1.0.0');

/* echo APP_NAME;
echo APP_VERSION; */

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

/* echo DB_NAME, DB_HOST; */


function run() {
    echo '<div>';
    echo APP_NAME;
    echo '<br />';
    echo APP_VERSION;
    echo '<br />';
    echo DB_NAME;
    echo '<br />';
    echo DB_HOST;
    echo '</div>';
}

run();
