<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);// 

//Reding a file line by line
// while($a=fgets($fptr)){
//     echo $a;
// }

/*
// echo fgetc($fptr);
//Rreading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    //break;
}
*/

// Write a program which reads the content of file until . has
// been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "f"){
        break;
    }
}
//echo "End of the file has been reached.";
fclose($fptr);
?>