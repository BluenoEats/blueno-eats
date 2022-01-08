<div class="nav">
  <!-- TODO: add logo -->
  <a href="index.php" class="nav-home nav-left">
    <img src="img/placeholding.png" class="nav-logo" alt="Navigation Logo">
  </a>
  <a href="about.php" class="nav-left nav-hide"> About</a></li>
  <a href="contact.php" class="nav-left nav-hide"> Contacts</a></li>
  <div class="dropdown" class="nav-left">
    <button class="dropbtn">Dining Halls
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php
      $query = "SELECT id, official_name FROM ".DINING_HALL_DB." WHERE id != 0";
      $result = mysqli_query($dbc, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="dining.php?hall='.$row['id'].'">'.$row['official_name'].'</a>'."\n";
      }
      ?>
    </div>
  </div>

  <a href="log in link" class="nav-right"> Log in</a></li>
  <a href="sign up link" class="nav-right"> Sign up</a></li>
  <!-- TODO: Profile manage page -->
</div>
