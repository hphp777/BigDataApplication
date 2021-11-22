<!-- Done by Jeongwon Eom -->
<?php include_once 'dbh.inc.php';?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  
  <tbody>
      <?php
      $sql="select * from memo";
      $result= mysqli_query($conn, $sql);
      if($result){
         while($row=mysqli_fetch_assoc($result)){
             $idx=$row['idx'];
             $title=$row['subject'];
             $content=$row['memo'];
             $date=$row['regdate'];
             echo '    <tr>
             <th scope="row">'.$idx. '</th>
             <td>'.$title .'</td>
             <td>'.$content.'</td>
             <td>'.$date.'</td>
             <td>
             <button class="btn btn-danger"><a href="delete_memo.php?deleteid='.$idx.'" class="text-light" onclick="return confirm(\'Do you want to delete it?\')">Delete</a></button>
             <button class="btn btn-primary"><a href="update_memo.php?updateid='.$idx.'" class="text-light">Update</a></button>         
             </td>
           </tr>';

         }
    }else{
        die(mysqli_error($conn));
    }
      ?>

  </tbody>
</table>

<button class="btn btn-primary my-5"><a href="add_memo.php" class="text-light">Add Memo</a></button>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>