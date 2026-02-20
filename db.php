<?php

$host = "127.0.0.1";
$user = "root";
$password = "doshni09"; // if you set a MySQL password, put it here
$database = "hirehub";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Signup successful!";
header("Location: ../login.html");
exit();
?>