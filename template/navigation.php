<div class="nav">
  <a href="index.php" class="nav-left"> Home</a>
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
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <a href="dining.php?hall=<?php echo $row['id']; ?>"><?php echo $row['official_name']; ?></a>
      <?php } ?>
    </div>
  </div>
  <?php if (!isset($_SESSION['user_id'])) { ?>
    <a href="signup.php" class="nav-right"> Sign up</a>
    <a href="login.php" class="nav-right"> Log in</a>
  <?php } else { ?>
    <a href="logout.php" class="nav-right"> Log out</a>
  <?php } ?>
  <!-- TODO: Profile manage page -->
    <!-- <a href="index.php" class="nav-home nav-right">
    <img src="img/profile.png" class="nav-logo" alt="Navigation Profile">
  </a>
   -->
  <!-- TODO: add profile -->
  <!-- <a href="logout.php" class="nav-right"> Log out</a> -->
</div>
