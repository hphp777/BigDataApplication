<?php
     include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Prism</title>
     <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<?php
     include_once 'nav.php';
?>

<?php

     $sql = "SELECT AVG(age) AS age_avg FROM athletes GROUP BY sex HAVING Count(*) > 1;";
     $result = mysqli_query($conn, $sql);
     $rowF = mysqli_fetch_assoc($result);
     $rowM = mysqli_fetch_assoc($result);
     $avg_age_F =  $rowF['age_avg'];
     $avg_age_M =  $rowM['age_avg'];

     $sql = "SELECT AVG(NULLIF(height, 0)) AS avg_h FROM athletes GROUP BY sex HAVING Count(*) > 1;";
     $result = mysqli_query($conn, $sql);
     $rowF = mysqli_fetch_assoc($result);
     $rowM = mysqli_fetch_assoc($result);
     $avg_h_F =  $rowF['avg_h'];
     $avg_h_M =  $rowM['avg_h'];

     $sql = "SELECT AVG(NULLIF(weight, 0)) AS avg_w FROM athletes GROUP BY sex HAVING Count(*) > 1;";
     $result = mysqli_query($conn, $sql);
     $rowF = mysqli_fetch_assoc($result);
     $rowM = mysqli_fetch_assoc($result);
     $avg_w_F =  $rowF['avg_w'];
     $avg_w_M =  $rowM['avg_w'];

    echo "<h2>Athletes Analysis</h2>";

     echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

     echo "<thead class=\"thead-dark\">";
     echo "<th scope=\"col\">Sex</th>";
     echo "<th scope=\"col\">Average Age</th>";
     echo "<th scope=\"col\">Average Height</th>";
     echo "<th scope=\"col\">Average Weight</th>";
     echo "</thead>";

     echo "<tr border = \"1\">" . 
               "<td> Female </td>" . 
               "<td>" . $avg_age_F . "</td>" . 
               "<td>" . $avg_h_F . "</td>". 
               "<td>" . $avg_w_F . "</td>". 
            "</tr>";
     echo "<tr border = \"1\">" . 
            "<td> Male </td>" .
            "<td>" . $avg_age_M . "</td>" . 
            "<td>" . $avg_h_M . "</td>". 
            "<td>" . $avg_w_M . "</td>". 
         "</tr>";

     echo "</table>"
     
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>

