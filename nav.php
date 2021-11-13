<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Athletes.php">Athletes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Teams.php">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Medals.php">Medals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Regions.php">Region</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Countries.php">Countries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Cities.php">Cities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Seasons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Analysis.php">Analysis</a>
      </li>
      <?php
        if(isset($_SESSION['userId'])){
          echo "<a href=\"logout.inc.php\" class=\"btn btn-primary\">Logout</a>";
        }
        else{
          echo "<a href=\"index(log).php\" class=\"btn btn-primary\">Login</a>";
        }
      ?>      
    </ul>
  </div>
</nav>
