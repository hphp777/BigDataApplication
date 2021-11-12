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

     $sql = "SELECT AVG(age) AS age_avg FROM athletes;";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $avg_age =  $row['age_avg'];

     $sql = "SELECT AVG(NULLIF(height, 0)) AS avg_h FROM athletes;";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $avg_h =  $row['avg_h'];

     $sql = "SELECT AVG(NULLIF(weight, 0)) AS avg_w FROM athletes;";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $avg_w =  $row['avg_w'];

    echo "<h2>Athletes Analysis</h2>";

     echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

     echo "<thead class=\"thead-dark\">";
     echo "<th scope=\"col\">Average Age</th>";
     echo "<th scope=\"col\">Average Height</th>";
     echo "<th scope=\"col\"Average Weight</th>";
     echo "</thead>";

     echo "<tr border = \"1\">" . 
               "<td>" . $avg_age . "</td>" . 
               "<td>" . $avg_h . "</td>". 
               "<td>" . $avg_w . "</td>". 
            "</tr>";

     echo "</table>"
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>

