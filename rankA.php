<!-- Done by Jungwon Eom -->
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

     $sql = "select Athelete, NOC, Gold, rank() over (order by Gold desc) as Rank
     from GoldMedals_Athelete;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
          
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\">NOC</th>";
          echo "<th scope=\"col\">Number of Gold Medals</th>";
          echo "<th scope=\"col\">Ranking</th>";
          echo "</thead>";
          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['Athelete'] . "</td>" . 
               "<td>" . $row['NOC'] . "</td>". 
               "<td>" . $row['Gold'] . "</td>". 
               "<td>" . $row['Rank'] . "</td>". 
               "</tr>";
          }
          echo "</table>";
     }


     
     
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>