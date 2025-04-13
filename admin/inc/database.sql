<?php
$hname = 'localhost';     // Server name
$uname = 'root';          // Username
$pass = '';          // Password
$db = 'hbwebsite'; // Database name

// Create connection
$con = mysqli_connect($hname, $uname, $pass, $db);

// Check connection
if (!$con) {
    die("Cannot connect to database " . mysqli_connect_error());
}
echo "Connected successfully";
?>