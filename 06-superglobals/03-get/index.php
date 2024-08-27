<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

var_dump($_GET); # array(1) { ["name"]=> string(4) "John" }

echo $_GET['name']; # John
echo isset($_GET['name']) ? $_GET['name'] : 'No name provided'; # John

echo htmlspecialchars($_GET['name']); # This is a security measure to prevent XSS attacks