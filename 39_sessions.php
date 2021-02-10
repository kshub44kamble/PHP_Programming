<?php
// What is a session?
// Used to manage information across different pages.

// Verify the user login info
session_start();
$_SESSION['username'] = "Shubham";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";


?>