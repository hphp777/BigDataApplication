<!-- Done by Jeongwon Eom -->
<?php include_once 'dbh.inc.php'; ?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>


<?php
     $sql = "select Year, NOC, Team, count(*) as Medals from original group by Year, NOC;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
          echo "<table class = \"table  table-bordered\" border = \"1\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">Year</th>";
          echo "<th scope=\"col\">NOC</th>";
          echo "<th scope=\"col\">Country</th>";
          echo "<th scope=\"col\">Medals</th>";
          echo "</thead>";

          while($row = mysqli_fetch_assoc($result)){
            echo "<tr border = \"1\">" . 
            "<td>" . $row['Year'] . "</td>" . 
            "<td>" . $row['NOC'] . "</td>". 
            "<td>" . $row['Team'] . "</td>".
            "<td>" . $row['Medals'] . "</td>". 
            "</tr>";
       }
       echo "</table>";
     }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>