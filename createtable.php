<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'library_reg';
$port = '3306';

$conn = new mysqli($host, $username, $password, $dbname, $port);

$sql = "CREATE TABLE personal_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    gender VARCHAR(50),
    dateofbirth DATE,
    nic VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table personal_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
