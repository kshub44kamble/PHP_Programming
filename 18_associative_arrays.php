<?php

echo "Welcome to the Associative Arrays in php <br>";

// These are called indexed arrays:
//$arr = array("this", "that", "What");
//echo $arr[0];
//echo $arr[1];
//echo $arr[2];

// Associative arrays
$favCol = array('shubham' => 'red',
    'rohan' => 'green',
    'harry' => 'Yellow'
);

foreach ($favCol as $key => $value) {
    echo "<br> Favourite color of $key is $value <br>";

}

//echo $favCol['shubham'];
//echo "<br>";
//echo $favCol['rohan'];
//echo "<br>";
//echo $favCol['harry'];
//echo "<br>";

?>