<?php 


echo " <h3>Looping with Increment using a Function and for loop<h3> ";


function loopingWithFor($start_as, $end_as, $step){
    for($i = $start_as; $i <= $end_as; $i = $i + $step){
        echo $i . "\n";
    }
}

loopingWithFor(2, 20, 2) . "<br>";
// function(initial, end, step);



echo "<h3>Looping with Increment using a Function and while loop </h3>";


function loopingWithWhile($start_as, $end_as, $step){
    $i = $start_as;
    while($i <= $end_as){
        echo $i . "\n";
        $i += $step;
    }
}

loopingWithWhile(2, 20, 2) . "<br>";
// function(initial, end, step);




echo "<h3>Looping with Increment using a Function and do while loop<h3>";



function loopingWithDoWhile($start_as, $end_as, $step){
        $i = $start_as;
        do{
           echo $i . "\n";
           $i = $i + $step;
        }while($i <= $end_as);
}

loopingWithDoWhile(2, 20, 2) . "<br>";
// function(initial, end, step);