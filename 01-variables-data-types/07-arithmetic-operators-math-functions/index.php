<?php
  /*
  | Arithmetic Operators
  | Operator | Description    |
  | -------- | -------------- |
  | `+`      | Addition       |
  | `-`      | Subtraction    |
  | `*`      | Multiplication |
  | `/`      | Division       |
  | `%`      | Modulus        |
  */

  $output = null;

  $num1 = 20;
  $num2 = 10;

  // Basic Math
  $output = "$num1 + $num2 = " . ($num1 + $num2) . '<br />';
  $output = "$num1 - $num2 = " . ($num1 - $num2) . '<br />';
  $output = "$num1 * $num2 = " . ($num1 * $num2) . '<br />';
  $output = "$num1 / $num2 = " . ($num1 / $num2) . '<br />';
  $output = "$num1 % $num2 = " . ($num1 % $num2) . '<br />';

  // Assignment Operators
  $num3 = 10;
  // $num3 = $num3 + 20;
  $num3 += 20; // Same as above; Works with other operators as well;

  $output = $num3;

  // Built-in PHP Functions
  $output = rand();
  $output  = getrandmax();
  $output = rand(1, 10);

  $output = round(4.7);
  $output = floor(4.7);
  $output = ceil(4.2);

  $output = sqrt(64);

  $output = pi();
  
  $output = abs(-4.7);

  $output = max([1,25,3,4]);
  $output = min([17,25,36,4]);

  $output = number_format(1234567.891234, 2, '.', ',');
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
       <p class="text-xl">
        <?= $output ?>
       </p>
    </div>
  </div>
</body>

</html>