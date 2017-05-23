<?php
$servername = "localhost";
$username = "blog";
$password = "C*p1Aa1_%S";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
