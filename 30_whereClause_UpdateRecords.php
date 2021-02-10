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

$sql = "SELECT * FROM `phptrip` WHERE `dest`='Pune'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the databse.
$num = mysqli_num_rows($result);
echo $num . " records found in the database <br>";
$no = 1;
if($num > 0){
    // We can fetch in a better way using while loop
    while($row = mysqli_fetch_assoc($result)){
    echo $no . " Hello ". $row['name']. " Welcome to ". $row['dest'];
    echo "<br>";
    $no = $no + 1;
    }
}

// Usage of WHERE Clause to update Data 
$sql = "UPDATE `phptrip` SET `name` = 'MohanUpdated' WHERE `sno` = 8";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo " Number of affected rows: $aff";
echo "<br>";
if($result){
    echo "We updated the record successfully!";
}else{
    echo "We could not updated record successfully!";
}
?>