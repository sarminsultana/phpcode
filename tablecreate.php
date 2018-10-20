<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'attendance';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE student (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
phone INT(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP,
semester VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>