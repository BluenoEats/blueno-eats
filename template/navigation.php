<div class="alert" style="display:none;" id="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <p id="response"> </p>
</div>

<div class="nav" id="myNavbar">
  <a href="index.php" class="nav-left"> Home</a>
  <a href="about.php" class="nav-left nav-hide"> About</a>
  <a href="contact.php" class="nav-left nav-hide"> Contacts</a>
  <div class="dropdown nav-left">
    <button class="dropbtn">
      Dining Halls
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php
      $query = "SELECT id, official_name FROM " . DINING_HALL_DB;
      $result = mysqli_query($dbc, $query);
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <a href="dining.php?hall=<?php echo $row['id']; ?>"><?php echo $row['official_name']; ?></a>
      <?php } ?>
    </div>
  </div>
  <?php if (!isset($_SESSION['user_id'])) { ?>
    <a href="login.php" class="nav-right"> Log in</a>
    <a href="signup.php" class="nav-right"> Sign up</a>
  <?php } else { ?>
    <div class="dropdown nav-right">
      <button class="dropbtn">Settings
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content setting">
        <a href="account.php">Manage Account</a>
        <a onclick="log_out()">Log out</a>
        <script src="scripts/log-out.js" type="text/javascript"></script>
      </div>
    </div>
  <?php } ?>

  <a href="javascript:void(0);" class="menu" onclick="menu()">&#9776;</a>
  <script src="scripts/navigation_bar.js" type="text/javascript"></script>
</div>