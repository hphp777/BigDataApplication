<!-- Done by Jeongwon Eom -->
<?php
include_once 'dbh.inc.php';
if(isset($_GET['deleteid'])){
    $idx=$_GET['deleteid'];

    $sql="delete from memo where idx=$idx";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "delete successful";
        header('location:display_memo.php');
    }else{
        die(mysqli_error($con));
    }
}


?>