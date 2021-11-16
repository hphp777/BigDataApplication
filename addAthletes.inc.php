<!-- Done by Haengbok Chung !-->
<?php

    include_once 'dbh.inc.php';

    $name1 = $_GET['name1'];
    $age1 = $_GET['age1'];
    $sex1 = $_GET['sex1'];
    $height1 = $_GET['height1'];
    $weight1 = $_GET['weight1'];
    $team1 = $_GET['team1'];

    $name2 = $_GET['name2'];
    $age2 = $_GET['age2'];
    $sex2 = $_GET['sex2'];
    $height2 = $_GET['height2'];
    $weight2 = $_GET['weight2'];
    $team2 = $_GET['team2'];

    mysqli_begin_transaction($conn);
   
    $success = true;
    $transaction_sql1 = "INSERT INTO athletes(name,age,sex,height,weight,team) 
    VALUES(?, ?, ?, ?, ?,?);";

        
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $transaction_sql1);

    mysqli_stmt_bind_param($stmt, "sisiis", $name1, $age1, $sex1, $height1, $weight1, $team1);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_affected_rows ($stmt);
    if($resultCheck == 0) $success = false;

    mysqli_stmt_bind_param($stmt, "sisiis", $name2, $age2, $sex2, $height2, $weight2, $team2);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_affected_rows ($stmt);
    if($resultCheck == 0) $success = false;

    mysqli_stmt_close($stmt);

    if(!$success) {
        mysqli_rollback($conn);       
        header("Location: Athletes.php?adds=failure");
    } else {
        mysqli_commit($conn);
        header("Location: Athletes.php?adds=success");
    }

    
?>