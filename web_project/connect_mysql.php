<?php
$servername = "localhost";
$username = "al";
$password = "pass123";
$dbname = "UserLoginID";
$x = "1JohnWick31";
$y = "111";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO members (email, password)
VALUES ('$x', '$y')";

($conn->query($sql) === TRUE)

?>
