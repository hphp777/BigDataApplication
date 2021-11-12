<?php
$servername = "localhost";
$username = "hp";
$password = "0000";
$dbname = "ODB";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
// create table0
$sql = "CREATE TABLE Athletes (
id INTEGER(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
sex VARCHAR(30) NOT NULL,
age INTEGER(3) NOT NULL,
height INTEGER(3) NOT NULL,
weight INTEGER(3) NOT NULL
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table0 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table1
$sql = "CREATE TABLE Teams (
    id INTEGER(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    region_id INTEGER(10) NOT NULL, ##### 
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table1 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table2
$sql = "CREATE TABLE Medals (
    id INTEGER(6) PRIMARY KEY NOT NULL,
    name VARCHAR(30) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table2 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
