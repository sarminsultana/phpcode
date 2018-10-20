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

$sql = "INSERT INTO student (id, name, phone, email, reg_date, semester)
VALUES ('1', 'sarmin', '0123', 'sarmin@gmail.com', '01.03.18', 'summer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
