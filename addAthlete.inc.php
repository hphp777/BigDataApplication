<?php
    # Done by Haengbok Chung
    include_once 'dbh.inc.php';

    $name = $_GET['name'];
    $age = $_GET['age'];
    $sex = $_GET['sex'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];
    $team = $_GET['team'];

    $sql = "INSERT INTO athletes(name,sex,age,height,weight,team) 
            VALUES('$name', '$sex','$age', '$height', '$weight','$team');";
    $reault = mysqli_query($conn, $sql);

    header("Location: Athletes.php?add=success");
?>