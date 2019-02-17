<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bellafare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("connection failed");
// Check connection
echo "succes"

$conn->close();
?>