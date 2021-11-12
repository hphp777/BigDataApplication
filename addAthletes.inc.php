<?php
    include_once 'dbh.inc.php';

    $name = $_GET['name'];
    $age = $_GET['age'];
    $sex = $_GET['sex'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];

    $sql = "INSERT INTO athletes(name,sex,age,height,weight) 
            VALUES('$name', '$age', '$sex', '$height' '$weight');";
    $reault = mysqli_query($conn, $sql);

    header("Location: Athletes.php?add=success");
?>