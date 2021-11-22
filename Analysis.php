<!-- Done by Haengbok Chung !-->
<?php
     include_once 'dbh.inc.php';
?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<?php

    echo "<h2>Athletes Analysis</h2>";

     echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

     echo "<thead class=\"thead-dark\">";
     echo "<th scope=\"col\">Sex</th>";
     echo "<th scope=\"col\">Team</th>";
     echo "<th scope=\"col\">Average Age</th>";
     echo "<th scope=\"col\">Average Weight</th>";
     echo "<th scope=\"col\">Average Height</th>";
     echo "</thead>";

     $sql1 = "SELECT AVG(age) AS age_avg FROM athletes GROUP BY sex, team HAVING Count(*) > 1;";
     $result1 = mysqli_query($conn, $sql1);
     $sql2 = "SELECT AVG(NULLIF(weight, 0)) AS avg_w FROM athletes GROUP BY sex, team HAVING Count(*) > 1;";
     $result2 = mysqli_query($conn, $sql2);
     $sql3 = "SELECT AVG(NULLIF(height, 0)) AS avg_h FROM athletes GROUP BY sex, team HAVING Count(*) > 1;";
     $result3 = mysqli_query($conn, $sql3);
     $sql4 = "SELECT sex, team FROM athletes GROUP BY sex, team HAVING Count(*) > 1;";
     $result4 = mysqli_query($conn, $sql4);
    
     while($row1 = mysqli_fetch_assoc($result1)){

          $row2 = mysqli_fetch_assoc($result2);
          $row3 = mysqli_fetch_assoc($result3);
          $row4 = mysqli_fetch_assoc($result4);
          
          $sex = $row4['sex'];
          $team = $row4['team'];
          $avg_w = $row2['avg_w'];
          $avg_h = $row3['avg_h'];
          $avg_age =  $row1['age_avg'];

          echo "<tr border = \"1\">" . 
          "<td>" . $sex . "</td>" . 
          "<td>" . $team . "</td>" . 
          "<td>" . $avg_age . "</td>" . 
          "<td>" . $avg_w . "</td>" . 
          "<td>" . $avg_h . "</td>" . 
          "</tr>";

     }
     
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>

