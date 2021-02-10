<?php
$name = "Shubham";
$income = 200.8;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

// String - Sequence of characters
$name = "Shubham";
$friend = "Rohan";
echo "$name's friend is $friend";

// Integer - non dewcimal number
$income = 200;
$debts = -6556;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - DEcimal point number
$income = 200.8;
$debts = -45.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;

// Boolean - can be either true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
// Object - Instance of class
// Employee is a class ---> shubham is a object


// Array - Used to store multiple value
$friends = array("rohan", "harry", "Skillf", "Larry");
echo ($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

// NULL
$name = NULL;
echo var_dump($name);
?>