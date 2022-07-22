<?php
$host = "db";
$userName = "root";
$password = "root";
$dbName = "emprego";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Change character set to utf8
mysqli_set_charset($conn, "utf8");
