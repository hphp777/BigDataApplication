<?php

$dbServername = "localhost";
$dbUsername = "ooo";
$dbPassword = "0000";
$dbName = "csv_db 7";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>