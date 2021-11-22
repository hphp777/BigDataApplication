<!-- Done by Jeongwon Eom -->
<?php
     include_once 'dbh.inc.php';
     $idx = $_GET['updateid'];
     $sql="select * from memo where idx=$idx";
     $result = mysqli_query($conn, $sql);
     $row=mysqli_fetch_assoc($result);
     $title=$row['subject'];
     $content=$row['memo'];



     if(isset($_POST['submit'])){
         $title=$_POST['title'];
         $content=$_POST['content'];
         $date = date("Y-m-d H:i:s");

         $sql="update memo set idx=$idx, subject='$title', memo='$content', regdate='$date' where idx=$idx";
         $result = mysqli_query($conn, $sql);
         if($result){
             //echo " update success";
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
    <input type="text" class="form-control" name="title" placeholder="Enter title" value=<?php echo $title;?>>
  </div>
  <div class="form-group">
    <label>Content</label>
    <input type="text" class="form-control" name="content" placeholder="Type something...." value=<?php echo $content;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>