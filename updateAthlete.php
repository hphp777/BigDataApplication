<!-- Done by Hangbok Chung -->
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<?php
    
    $id = $_GET['id'];
    echo 'Id Number:  '. $id;
?>
<form action="updateAthletes.inc.php" method= "GET" >
<div class="form-group p-2">
<label for="name">Name</label>
<input type = "text" id = "name" name = "name" placeholder = "name">
</div>
<br>
<div class="form-group p-2">
<label for="sex">Sex</label>
<select name="sex" id = "sex">
      <option value="F">Female</option>
      <option value="M">Male</option>
    </select>
</div>
<br>
<div class="form-group p-2">
<label for="Age">Age</label>
<input type = "text" name = "age" id = "Age" placeholder = "Age">
</div>
<br>
<div class="form-group p-2">
<label for="Height">Height</label>
<input type = "text" name = "height" id = "height" placeholder = "Height">
</div>
<br>
<div class="form-group p-2">
<label for="Weight">Weight</label>
<input type = "text" name = "Weight" id = "Weight" placeholder = "Weight">
</div>
<br>
<div class="form-group p-2">
<?php 
    $id = $_GET['id'];
    echo "<input type=\"hidden\" name=\"id\" value= ".$id.">";
?>

<input type = submit class = "btn btn-primary" value = "submit">
</div>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>