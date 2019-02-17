<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bellafare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$budget = $_POST['budget'];
$guest = $_POST['guest'];
$info = $_POST['info'];
$exist = $_POST['exist'];

$sql = "INSERT INTO contacts (f_name, l_name, email, phone, date, budget, guest, info, exist)
VALUES ('$f_name', '$l_name', '$email', '$phone', '$date', '$budget', '$guest', '$info', '$exist')";

if ($conn->query($sql) === TRUE) {
    header("refresh:0; url=contact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>