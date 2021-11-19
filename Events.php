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
		$games = filter_input(INPUT_POST, "games");
		$sports = filter_input(INPUT_POST, "sports");
				
		$query = "INSERT into events (name, games_id, sport_id) VALUES (?, ?, ?)";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "sii", $name, $games_id, $sport_id);
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
		$sql = "SELECT name, games_id, sport_id FROM `events` WHERE id = ?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $name, $games, $sports);
		mysqli_stmt_fetch($stmt);
	}
	
	//update data - change new data
	$btnUpdate = filter_input(INPUT_POST, "btnUpdate");
	if($btnUpdate)
	{
		$id = filter_input(INPUT_POST, "id");
		$name = filter_input(INPUT_POST, "name");
		$games = filter_input(INPUT_POST, "games");
		$sports = filter_input(INPUT_POST, "sports");
				
		$conn = mysqli_connect("localhost", "root", "", "prismproject") or die(mysqli_error());
		$query = "UPDATE events SET name=?, games_id=?, sport_id=? WHERE id=?";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "siii", $name, $games, $sports, $id);
			mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
			mysqli_commit($conn);
			mysqli_stmt_close($stmt);
		}
		header('location:Events.php');
	}
	
	//deleteGames
	if(isset($id) && isset($cmd) && $cmd == "del")
	{
		$conn = mysqli_connect("localhost", "root", "", "prismproject") or die(mysqli_error());
		$query = "DELETE FROM events WHERE id = ?";
		mysqli_autocommit($conn, FALSE);
		
		if($stmt = mysqli_prepare($conn, $query))
		{
			mysqli_stmt_bind_param($stmt, "i", $id);
			mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
			mysqli_commit($conn);
			mysqli_stmt_close($stmt);
		}
		header('location:Events.php');
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
			Games:
			<select name="games">
				<option>-Choose Games-</option>
			<?php
			$sql = "SELECT * FROM games";
			$result3 = mysqli_query($conn, $sql);
			while($row3 = mysqli_fetch_assoc($result3))
			{
				if($row3['id'] == $games)
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
			Sports:
			<select name="sports">
				<option>-Choose Sports-</option>
			<?php
			$sql = "SELECT * FROM sports";
			$result3 = mysqli_query($conn, $sql);
			while($row3 = mysqli_fetch_assoc($result3))
			{
				if($row3['id'] == $sports)
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
	Games:
	<input type="text" placeholder="Games" name="game" />
</div>

<div>
	Sport:
	<input type="text" placeholder="Sport" name="sports" />
</div>
<input type="submit" value="Save" name="btnSave" />
</fieldset>
<?php
}
?>
</form>

<!-- 데이터베이스에 가서 데이터를 찾아서 보여주기 -->
<?php
     $sql = "SELECT events.*, games.name AS games_name, sports.name AS sports_name FROM events INNER JOIN games ON games.id = events.games_id INNER JOIN sports ON sports.id = events.sport_id";

     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0){
                    
          echo "<table class = \"table table-bordered\" border = \"1\" align = \"center\">";

          echo "<thead class=\"thead-dark\">";
          echo "<tr>";
          echo "<th scope=\"col\">Id</th>";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\">Games</th>";
          echo "<th scope=\"col\">Sport</th>";
          echo "<th scope=\"col\">Action</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while($row = mysqli_fetch_assoc($result)){
               echo "<tr border = \"1\">" . 
               "<td>" . $row['id'] . "</td>" . 
               "<td>" . $row['name'] . "</td>". 
               "<td>" . $row['games_name'] . "</td>" . 
               "<td>" . $row['sports_name'] . "</td>". 
               "<td><input type='button' value='Update' onclick='updateEvents(".$row['id'].")'/>
			   <input type='button' value='Delete' onclick='deleteEvents(".$row['id'].")'/>
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
<script type="text/javascript" src="functionevents.js"></script>
</body>
</html>