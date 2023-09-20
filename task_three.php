<?php 

$first = 0;
$second = 1;

echo "First 10 Fibonacci numbers up to 100 is:\n";

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $first + $second;
    $first = $second;
    $second = $fibonacci;
    echo $fibonacci ."\n";


    if ($fibonacci > 100) {
        break; // Break the loop if Fibonacci number is greater than 100
    }
}

