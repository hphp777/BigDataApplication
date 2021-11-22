<!-- Done by Jeongwon Eom -->
<?php include_once 'dbh.inc.php'; ?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<!-- 데이터베이스에 가서 데이터를 찾아서 보여주기 -->
<?php
     $sql = "SELECT * FROM region;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
          
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">NOC</th>";
          echo "<th scope=\"col\">Region</th>";
          echo "<th scope=\"col\">Notes</th>";
          echo "</thead>";
          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['NOC'] . "</td>" . 
               "<td>" . $row['Region'] . "</td>". 
               "<td>" . $row['Notes'] . "</td>". 
               "</tr>";
          }
          echo "</table>";
     }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>