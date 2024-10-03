<?php

$host = 'localhost';
$username = 'root';
$password = '';
$port = '3306';

$conn = new mysqli($host, $username, $password,  '', $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE library_reg";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
