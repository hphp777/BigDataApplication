<?php
     include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <title>Prism</title>
     <link rel="stylesheet" href="/css/bootstrap.css">
</head>


<body>

    <?php
         include_once 'nav.php';
    ?>

    <header>
          <div>
          <form action="login.inc.php" method="post">
               <div class="form-group p-2">
               <input type = "text" name="mailuid" placeholder="Username/E-mail..">
               </div>
               <div class="form-group p-2">
               <input type = "password" name="pwd" placeholder="Password..">
               </div>
               <div class="form-group p-2">
               <button type="submit" name = "login-submit" class = "btn btn-primary">Login</button>
               </div>    
          </form>
          <a href="signup.php" class = "ml-3">Signup</a>

          
          </div>
     </header>
