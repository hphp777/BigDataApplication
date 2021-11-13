<?php

include_once 'dbh.inc.php';

$id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$sex = $_GET['sex'];
$height = $_GET['height'];
$weight = $_GET['weight'];


$sql = "UPDATE athletes
        SET name = '".$name."',sex = '".$sex."',age = ".$age.",height = ".$height.",weight =  ".$weight." WHERE id = ".$id.";";
mysqli_query($conn, $sql);

header("Location: Athletes.php?update=success");

?>