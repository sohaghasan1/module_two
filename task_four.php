<?php 

function fibonacci($number){
    $first_number = 0;
    $second_number = 1;

    for($i = 0; $i <= $number; $i++ ){
        $fibonacchi = $first_number + $second_number;
        $first_number = $second_number;
        $second_number = $fibonacchi;
        echo $fibonacchi . "\n";
    }
}
fibonacci(15);