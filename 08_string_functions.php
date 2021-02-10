<?php

$name = "Shubham is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "m");
echo "<br>";
echo str_replace("Shubham", "Harry", $name);
echo "<br>";
echo str_repeat($name, 10);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a right trim   ");
echo "<br>";
echo ltrim("   this is a left trim   ");
echo "</pre>";
echo "<br>";

?>