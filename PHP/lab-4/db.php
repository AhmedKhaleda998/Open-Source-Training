<?php
$hostname = "localhost";
$username = "root";
$password = "1234";
$database = "user_management";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
