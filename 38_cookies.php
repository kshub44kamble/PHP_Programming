<?php

echo "Welcome to the world of cookis<br>";

// Cookies | Sessions

// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/");
echo "The cookie is set<br>";
?>