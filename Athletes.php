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

<?php
     $sql = "SELECT * FROM athletes;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
          echo "<div class \"\">";
          echo " <a href=\"register.php\" class=\"btn btn-primary\">Register</a>";
          echo "</div>";
          
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<th scope=\"col\">id</th>";
          echo "<th scope=\"col\">name</th>";
          echo "<th scope=\"col\"sex</th>";
          echo "<th scope=\"col\">age</th>";
          echo "<th scope=\"col\">height</th>";
          echo "<th scope=\"col\">weight</th>";
          echo "<th scope=\"col\">delete</th>";
          echo "<th scope=\"col\">update</th>";
          echo "</thead>";
          if (isset($_POST[ 'delete_id' ])){
               $delete_id = $_POST[ 'delete_id' ];
               if ( isset( $delete_id ) ) {
                 $delete = "DELETE FROM athletes WHERE id = $delete_id;";
                 mysqli_query( $conn, $delete );
                 echo '<p style="color: red;">Athlete ' . $delete_id . ' is deleted.</p>';
               }
          }
          
          while($row = mysqli_fetch_assoc($result)){
               $jb_delete = '
                <form action="Athletes.php" method="POST">
                <input type="hidden" name="delete_id" value="' . $row[ 'id' ] . '">
                <input type="submit" value="Delete">
                </form>
                ';
                $update = "<a href=updateAthlete.php?id=".$row['id']." class = \"btn btn-primary\">Update</a>";
               echo "<tr border = \"1\">" . 
               "<td>" . $row['id'] . "</td>" . 
               "<td>" . $row['name'] . "</td>". 
               "<td>" . $row['sex'] . "</td>". 
               "<td>" . $row['age'] . "</td>" . 
               "<td>" . $row['height'] . "</td>" .
               "<td>" . $row['weight'] . "</td>".
               "<td>" . $jb_delete . "</td>".
               "<td>" . $update . "</td>".
               "</tr>";
          }
          echo "</table>";
     }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>

