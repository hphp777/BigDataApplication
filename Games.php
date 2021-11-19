<!-- Done by Suhaeni Cici  -->
<?php
    include_once 'dbh.inc.php';
?>
<?php
    include_once 'nav.php';
?>
<?php
	//insert data
	$btnPressed = filter_input(INPUT_POST, "btnSave");
	if($btnPressed)
	{
		$name = filter_input(INPUT_POST, "name");
		$year = filter_input(INPUT_POST, "year");
		$season = filter_input(INPUT_POST, "season");
		$city = filter_input(INPUT_POST, "city");
		
		$query = "INSERT into games (name, year, Season_id, city) VALUES (?, ?, ?, ?)";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "siis", $name, $year, $season, $city);
			mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
			mysqli_commit($conn);
			mysqli_stmt_close($stmt);
		}
	}
	
	//update data - get old data
	$id = filter_input(INPUT_GET, "id");
	$cmd = filter_input(INPUT_GET, "cmd");
	if(isset($id) && isset($cmd) && $cmd == "upd")
	{
		$sql = "SELECT name, year, Season_id, city FROM `games` WHERE id = ?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $name, $year, $season, $city);
		mysqli_stmt_fetch($stmt);
	}
	
	//update data - change new data
	$btnUpdate = filter_input(INPUT_POST, "btnUpdate");
	if($btnUpdate)
	{
		$id = filter_input(INPUT_POST, "id");
		$name = filter_input(INPUT_POST, "name");
		$year = filter_input(INPUT_POST, "year");
		$season = filter_input(INPUT_POST, "season");
		$city = filter_input(INPUT_POST, "city");
		
		$conn = mysqli_connect("localhost", "root", "", "prismproject") or die(mysqli_error());
		$query = "UPDATE games SET name=?, year=?, Season_id=?, city=? WHERE id=?";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "siisi", $name, $year, $season, $city, $id);
			mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
			mysqli_commit($conn);
			mysqli_stmt_close($stmt);
		}
		header('location:Games.php');
	}
	
	//deleteGames
	if(isset($id) && isset($cmd) && $cmd == "del")
	{
		$conn = mysqli_connect("localhost", "root", "", "prismproject") or die(mysqli_error());
		$query = "DELETE FROM games WHERE id = ?";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "i", $id);
			mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
			mysqli_commit($conn);
			mysqli_stmt_close($stmt);
		}
		header('location:Games.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Prism</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	 
</head>
<body>
<form method="post" action="">
<?php
if(isset($id) && isset($cmd) && $cmd == "upd")
{
	//update data
	if($cmd == "upd")
	{
		$conn = mysqli_connect("localhost", "root", "", "prismproject") or die(mysqli_error());
		?>
		<fieldset>
		<legend>Update</legend>
		<div>
			Name:
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" />
		</div>
		<div>
			Year:
			<input type="text" placeholder="Year" name="year" value="<?php echo $year; ?>" />
		</div>
		<div>
			Season:
			<select name="season">
				<option>-Choose Season-</option>
			<?php
			$sql = "SELECT * FROM season";
			$result3 = mysqli_query($conn, $sql);
			while($row3 = mysqli_fetch_assoc($result3))
			{
				if($row3['id'] == $season)
				{	
					echo "<option value='".$row3['id']."' selected>".$row3['name']."</option>";
				}
				else 
				{
					echo "<option value='".$row3['id']."'>".$row3['name']."</option>";
				}
			}
			?>
			</select>
		</div>
		<div>
			City:
			<input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" />
		</div>
		<input type="submit" value="Update" name="btnUpdate" />
		</fieldset>
		<?php
	}
}
else
{
	//insert data
?>
<fieldset>
<legend>Insert</legend>
<div>
	Name:
	<input type="text" placeholder="Name" name="name" />
</div>
<div>
	Year:
	<input type="text" placeholder="Year" name="year" />
</div>
<div>
	Season:
	<select name="season">
		<option>-Choose Season-</option>
	<?php
	$sql = "SELECT * FROM `season` ";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_assoc($result2)){
		echo "<option value='".$row['id']."'>".$row2['name']."</option>";
	}
	?>
	</select>
</div>
<div>
	City:
	<input type="text" placeholder="City" name="city" />
</div>
<input type="submit" value="Save" name="btnSave" />
</fieldset>
<?php
}
?>
</form>


<!-- 데이터베이스에 가서 데이터를 찾아서 보여주기 -->
<?php
     $sql = "SELECT games.*, season.name AS season_name FROM `games` INNER JOIN `season` ON `season`.id = `games`.Season_id";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
          
          
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<tr>";
          echo "<th scope=\"col\">Id</th>";
          echo "<th scope=\"col\">Year</th>";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\">Season</th>";
          echo "<th scope=\"col\">City</th>";
          echo "<th scope=\"col\">Action</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['id'] . "</td>" . 
               "<td>" . $row['year'] . "</td>". 
               "<td>" . $row['name'] . "</td>" . 
               "<td>" . $row['season_name'] . "</td>". 
               "<td>" . $row['city'] . "</td>". 
               "<td><input type='button' value='Update' onclick='updateGames(".$row['id'].")'/>
			   <input type='button' value='Delete' onclick='deleteGames(".$row['id'].")'/>
			   </td>". 
               "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
       echo "</table>";
     }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
     $(document).ready(function () {
    $('.table').DataTable();
} );
</script>
<script type="text/javascript" src="functiongames.js"></script>
</body>
</html>