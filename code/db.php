<?php

$servername = "localhost";
$username = "chirag";
$password = "chiragm812";
$db = "grocery";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
