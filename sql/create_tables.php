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

// creating Tables
// create table Registration
$sql = "CREATE TABLE Registration (
    id INTEGER(6) PRIMARY KEY NOT NULL,
    event_id INTEGER(6) NOT NULL,
    user_id INTEGER(6) NOT NULL,
    team_id INTEGER(6) NOT NULL,
    date DateTime NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table Registration: " . $conn->error;
}

//create table Season
$sql = "CREATE TABLE Season (
    id INTEGER(6) PRIMARY KEY NOT NULL,
    name VARCHAR(30) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table Season created successfully";
} else {
    echo "Error creating table season: " . $conn->error;
}
 
// create table Result
$sql = "CREATE TABLE Result (
    id INTEGER(6) PRIMARY KEY NOT NULL,
    event_id INTEGER(6) NOT NULL,
    user_id INTEGER(6) NOT NULL,
    team_id INTEGER(6) NOT NULL,
    medals_id INTEGER(1) NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table Registration: " . $conn->error;
}

#Create Region table
$sql = "CREATE TABLE Region(
	NOC CHAR(3) NOT NULL,
	Region VARCHAR(60) NOT NULL,
	Notes VARCHAR(30),
	PRIMARY KEY(NOC)
	#(add later)FOREIGN KEY(ID) REFERENCES User(ID) ON DELETE NO ACTION 
);"

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table Registration: " . $conn->error;
}

#Create Countries table
$sql = "CREATE TABLE Countries(
	#ID INT NOT NULL,
	Name VARCHAR(60) NOT NULL,
	SortName CHAR(3) NOT NULL,
	PRIMARY KEY(SortName)
);"

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table Registration: " . $conn->error;
}

#Create Cities table
$sql = "CREATE TABLE Cities(
	Name VARCHAR(60) NOT NULL,
	Countries_ID CHAR(3) NOT NULL,
	PRIMARY KEY(Name),
	FOREIGN KEY(Countries_ID) REFERENCES Countries(SortName) ON DELETE NO ACTION 
);"

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table Registration: " . $conn->error;
}

$conn->close();
?>
