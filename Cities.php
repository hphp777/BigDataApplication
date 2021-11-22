<!-- Done by Jungwon Eom -->
<?php
     include_once 'dbh.inc.php';
?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<!-- 데이터베이스에 가서 데이터를 찾아서 보여주기 -->
<?php
     $sql = "SELECT * FROM cities;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
 
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">City</th>";
          echo "<th scope=\"col\">Country</th>";
          echo "</thead>";
          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['Name'] . "</td>" . 
               "<td>" . $row['Countries_ID'] . "</td>". 
               "</tr>";
          }
          echo "</table>";
     }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</div>
</main>
</body>
</html>