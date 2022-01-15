<div class="nav">
  <!-- TODO: add logo -->
  <a href="index.php" class="nav-home nav-left">
    <img src="img/placeholding.png" class="nav-logo" alt="Navigation Logo">
  </a>
  <a href="about.php" class="nav-left nav-hide"> About</a>
  <a href="contact.php" class="nav-left nav-hide"> Contacts</a>
  <div class="dropdown" class="nav-left">
    <button class="dropbtn">Dining Halls
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php
      $query = "SELECT id, official_name FROM ".DINING_HALL_DB;
      $result = mysqli_query($dbc, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="dining.php?hall='.$row['id'].'">'.$row['official_name'].'</a>'."\n";
      }
      ?>
    </div>
  </div>

  <a href="login.php" class="nav-right"> Log in</a>
  <a href="signup.php" class="nav-right"> Sign up</a>
  <!-- TODO: Profile manage page -->
</div>
