<?php

session_start();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'No session data found';
}
