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

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo " Number of affected rows: $aff";
echo "<br>";

if($result){
    echo "Deleted successfully!";
}else{
    $err = mysqli_error($conn);
    echo "Not deleted! due to this error --> $err";
}
?>