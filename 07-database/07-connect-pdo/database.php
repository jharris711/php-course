<?php

$host = 'localhost';
$port = '3306';
$dbname = 'blog';
$username = 'josh';
$password = 'Tacobell3?';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    // Create the PDO Instance
    $pdo = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database connected...';
} catch (PDOException $e) {
    // If there is an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
