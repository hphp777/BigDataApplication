<!-- Done by Hangbok Chung -->
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
        <a class="nav-link" href="Seasons.php">Seasons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Sports.php">Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Games.php">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Analysis.php">Analysis1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Medals_with advanced function.php">Analysis2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rankA.php">Rank(Athletes)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rankNOC.php">Rank(NOC)</a>
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
