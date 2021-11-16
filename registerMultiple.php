<!-- Done by Hangbok Chung -->


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

<form action="addAthletes.inc.php" method= "GET" >

<div class="form-group p-2">
<h3>Athlete1</h3>
<label for="name">Name</label>
<input type = "text" id = "name" name = "name1" placeholder = "name">
</div>
<br>
<div class="form-group p-2">
<label for="sex">Sex</label>
<select name="sex1" id = "sex">
      <option value="F">Female</option>
      <option value="M">Male</option>
    </select>
</div>
<br>
<div class="form-group p-2">
<label for="Age">Age</label>
<input type = "text" name = "age1" id = "Age" placeholder = "Age">
</div>
<br>
<div class="form-group p-2">
<label for="Height">Height</label>
<input type = "text" name = "height1" id = "height" placeholder = "Height">
</div>
<br>
<div class="form-group p-2">
<label for="weight">Weight</label>
<input type = "text" name = "weight1" id = "Weight" placeholder = "Weight">
</div>
<br>
<div class="form-group p-2">
<label for="team">Team</label>
<input type = "text" name = "team1" id = "team" placeholder = "team">
</div>
<br>


<h3>Athlete2</h3>
<label for="name">Name</label>
<input type = "text" id = "name" name = "name2" placeholder = "name">
</div>
<br>
<div class="form-group p-2">
<label for="sex">Sex</label>
<select name="sex2" id = "sex">
      <option value="F">Female</option>
      <option value="M">Male</option>
    </select>
</div>
<br>
<div class="form-group p-2">
<label for="Age">Age</label>
<input type = "text" name = "age2" id = "Age" placeholder = "Age">
</div>
<br>
<div class="form-group p-2">
<label for="Height">Height</label>
<input type = "text" name = "height2" id = "height" placeholder = "Height">
</div>
<br>
<div class="form-group p-2">
<label for="weight">Weight</label>
<input type = "text" name = "weight2" id = "Weight" placeholder = "Weight">
</div>
<br>
<div class="form-group p-2">
<label for="team">Team</label>
<input type = "text" name = "team2" id = "team" placeholder = "team">
</div>
<br>

<div class="form-group p-2">
<input type = submit class = "btn btn-primary" value = "submit">
</div>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>
