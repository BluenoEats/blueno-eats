<div class="alert" style="display:none;" id="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <p id="response"> </p>
</div>

<div class="nav">
  <a href="index.php" class="nav-left"> Home</a>
  <a href="about.php" class="nav-left nav-hide"> About</a>
  <a href="contact.php" class="nav-left nav-hide"> Contacts</a>
  <div class="dropdown nav-left">
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
      </div>
  </div>

    <!-- <button class="log-btn nav-right" onclick="log_out()">Log out</button> -->
    <script>
      function log_out() {
        document.getElementById("alert").style.display = "block";
        document.getElementById("response").innerHTML = "You have successfully logged out! ";
        setTimeout(function () {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            window.location.reload();
          }
          };
          xhttp.open("GET", "functions/logout_func.php", true);
          xhttp.send();
        }, 3000);
      
      }
    </script>
  <?php } ?>
  <!-- TODO: Profile manage page -->
    <!-- <a href="index.php" class="nav-home nav-right">
    <img src="img/profile.png" class="nav-logo" alt="Navigation Profile">
  </a>
   -->
  <!-- TODO: add profile -->
  <!-- <a href="logout.php" class="nav-right"> Log out</a> -->
</div>