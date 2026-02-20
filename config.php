<?php
$host = "localhost";
$user = "root";
$password = ""; // Put your MySQL root password here if you have one
$database = "hirehub";

$conn = new mysqli($host, $user, $doshni09, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>