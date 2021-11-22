<!-- Done by Hangbok Chung -->

<?php include_once 'dbh.inc.php'; ?>

<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/container.inc.php'); ?>    

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] = "emptyfields"){
                            echo "<p> Fill in all fields!</p>";
                        }
                        else if ($_GET['error'] = "invaliduidmail") {
                            echo "<p> invalid mail!</p>";
                        }
                    }
                ?>
                <form action="signup.inc.php" method="post">
                    <div class="form-group p-2">
                    <input type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group p-2">
                    <input type="text" name="mail" placeholder="E-mail">
                    </div>
                    <div class="form-group p-2">
                    <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group p-2">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    </div>
                    <button type="submit" name="signup-submit" class="btn btn-success">Signup</button>
                </form>
        </div>

    </main>
</body>