<?php

echo "Welcome";
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the best file on the planet.Please dont argue with me on this one.");
// fwrite($fptr, "This is another content.\n");
// fclose($fptr);

// Appending to a file in php
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "This is being appended to the text.\n");
fclose($fptr);
?>