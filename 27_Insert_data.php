<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshub";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful <br>";
}

// Variables to be inserted into tables.
$name = "Viktrant";
$destination = "Russia";

// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record was inserted successfully!";
}else{
   echo "The table was not created successfully! because of this error ---> ". mysqli_error($conn);
}
?>