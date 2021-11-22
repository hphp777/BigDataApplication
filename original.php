<!-- Done ny Hangbok Chung -->
<?php
     session_start();
?>


<?php include_once 'dbh.inc.php'; ?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>


<?php
     $sql = "SELECT * FROM original;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){

          echo "<div class \"\">";
          echo "</div>";
          
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">ID</th>";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\"Sex</th>";
          echo "<th scope=\"col\">Age</th>";
          echo "<th scope=\"col\">Height</th>";
          echo "<th scope=\"col\">Weight</th>";
          echo "<th scope=\"col\">Team</th>";
          echo "<th scope=\"col\">NOC</th>";
          echo "<th scope=\"col\">Games</th>";
          echo "<th scope=\"col\">Year</th>";
          echo "<th scope=\"col\">Season</th>";
          echo "<th scope=\"col\">City</th>";
          echo "<th scope=\"col\">Sport</th>";
          echo "<th scope=\"col\">Event</th>";
          echo "<th scope=\"col\">Medal</th>";
          echo "</thead>";

          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['ID'] . "</td>" . 
               "<td>" . $row['Name'] . "</td>". 
               "<td>" . $row['Sex'] . "</td>". 
               "<td>" . $row['Age'] . "</td>" . 
               "<td>" . $row['Height'] . "</td>" .
               "<td>" . $row['Weight'] . "</td>".
               "<td>" . $row['Team'] . "</td>".
               "<td>" . $row['NOC'] . "</td>".
               "<td>" . $row['Games'] . "</td>".
               "<td>" . $row['Year'] . "</td>".
               "<td>" . $row['Season'] . "</td>".
               "<td>" . $row['City'] . "</td>".
               "<td>" . $row['Sport'] . "</td>".
               "<td>" . $row['Event'] . "</td>".
               "<td>" . $row['Medal'] . "</td>".
               "</tr>";
          }

          echo "</table>";
     }

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>