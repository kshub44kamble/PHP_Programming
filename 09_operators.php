<?php
/**
 * Oerators in php
 * 1. Arithmatic Opeators
 * 2. Assignment Operators
 * 3. Comparison Operators
 * 4. Logical Operators
 */

 // Arithmatic Operators
 $a = 45;
 $b = 8;

 echo "For a + b, the result is ". ($a + $b). "<br>";
 echo "For a - b, the result is ". ($a - $b). "<br>";
 echo "For a / b, the result is ". ($a / $b). "<br>";
 echo "For a % b, the result is ". ($a % $b). "<br>";
 echo "For a ** b, the result is ". ($a ** $b). "<br>";

 // Assignment Operator
 $x = $a;
 echo "For x, the value is ". $x. "<br>";

 // Comparison Operator
 $p = 7;
 $q = 78;
 echo "For p == q, the result is ";
 echo var_dump($p == $q);
 echo "<br>";
// >
// >=
// <
// <=
// <> not equal to sign

// Logical Operator
$m = true;
$n = false;
// and &&
echo "For m and n, the result is ";
 echo var_dump($m && $n);
 echo "<br>";

 // or ||
 echo "For m or n, the result is ";
 echo var_dump($m or $n);
 echo "<br>";

 // ! not sign
 echo "For !m, the result is ";
 echo var_dump(!$m);
 echo "<br>";

?>