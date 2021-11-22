<!-- Done ny Hangbok Chung -->
<?php include_once 'dbh.inc.php'; ?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>


    <header>
          <div>
               
          <form action="login.inc.php" method="post">
               <h1>Log in</h1>
               <div class="form-group p-2">  
               <input type = "text" name="mailuid" placeholder="Username/E-mail..">
               </div>
               <div class="form-group p-2">
               <input type = "password" name="pwd" placeholder="Password..">
               </div>
               <div class="form-group p-2">
               <button type="submit" name = "login-submit" class = "btn btn-success">Login</button>
               </div>    
          </form>
          <a href="signup.php" class = "ml-3" style="color:#483d8b ">Signup</a>

          
          </div>
     </header>
