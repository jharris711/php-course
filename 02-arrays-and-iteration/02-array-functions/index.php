<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user1', 'user2', 'user3'];

$output = count($ids);
sort($ids); // Sort in ascending order
rsort($ids); // Sort in descending order
array_push($ids, 100); // Add to the end
array_pop($ids); // Remove the last element
array_shift($ids); // Remove the first element
array_unshift($ids, 5); // Add to the beginning
$ids2 = array_slice($ids, 2, 3); // Extract a slice of the array
// var_dump($ids2);
// array_splice($ids, 1, 1, 'New ID'); // Replace an element
$output = 'Sum of ids: ' . array_sum($ids);
$output = 'User 2 is at index: ' . array_search('user2', $users);
$output = 'User 3 exists: ' . in_array('user3', $users);

// Turn string into an array
$tags = 'apple, orange, banana';
$tagsArray = explode(',', $tags);
// var_dump($tagsArray);

// Turn array into a string
$output = implode('.', $tagsArray);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
            <pre><?php print_r($ids); ?></pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
            <pre><?php print_r($users); ?></pre>
            </p>
        </div>
    </div>
</body>

</html>