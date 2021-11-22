    <!-- Done by Haengbok Chung & Jeongwon Eom -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><b>&emsp;&emsp;Olympics</b></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">

            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Athletes.php">Athletes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Medals_with advanced function.php">Medals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Regions.php">Countries</a>
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
              <a class="nav-link" href="Analysis.php">Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rankA.php">Rank(Athletes)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rankNOC.php">Rank(NOC)</a>
            </li>
              <a class="nav-link" href="display_memo.php">My Page</a>
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
