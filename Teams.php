<!-- Done by Hangbok Chung -->
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

<!-- 데이터베이스에 가서 데이터를 찾아서 보여주기 -->
<?php
     $sql = "SELECT * FROM teams;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){

          echo "<table class = \"table  table-bordered mt-0\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">id</th>";
          echo "<th scope=\"col\">name</th>";
          echo "<th scope=\"col\">region_id</th>";
          echo "</thead>";

          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\" align = center>". 
               "<td border = 1>" . $row['id'] . "</td>". 
               "<td>" . $row['name'] . "</td>" . 
               "<td>" . $row['region_id'] . "</td>". "<br>" . 
               "</tr>";
          }
          echo "</tables>";
     }

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>