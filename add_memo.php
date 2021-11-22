<!-- Done by Jeongwon Eom -->
<?php
     include_once 'dbh.inc.php';
     if(isset($_POST['submit'])){
         $title=$_POST['title'];
         $content=$_POST['content'];
         $date = date("Y-m-d H:i:s");

         $sql="insert into memo(subject, memo, regdate) values ('$title','$content','$date')";
         $result = mysqli_query($conn, $sql);
         if($result){
             //echo "success";
             header('location: display_memo.php');
         }else{
             die(mysqli_error($conn));
         }
     }
?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<form method="POST">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title">
    <br>
  </div>
  <div class="form-group">
    <label>Content</label>
    <input type="text" class="form-control" name="content" placeholder="Type something....">
    <br>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>
