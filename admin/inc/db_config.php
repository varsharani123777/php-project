<?php
$host = "localhost";     // Server name
$user = "root";          // Username
$password = "varsha123@@";          // Password
$dbname = "hbwebsite"; // Database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
