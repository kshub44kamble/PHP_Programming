<?php

echo "foreach loops in php <br>";

$arr = array("bananas", "apples", "orange", "pineaple");

//for($i = 0; $i < count($arr); $i++){
//    echo $arr[$i];
//    echo "<br>";
//}

// Better way to do this - foreach loops
foreach ($arr as $value) {
    echo "$value <br>";
}

?>