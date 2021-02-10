<?php

echo "Welcome to tutorial on functions <br>";

function processMarks($markArr){
    $sum = 0;
    foreach ($markArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rohanDas = [34, 55, 67, 87, 98, 99];
$sumMarks = processMarks($rohanDas);
echo "Total marks scored by rohan out of 600 is $sumMarks";

?>