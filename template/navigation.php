<div class="alert" style="display:none;" id="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <p id="response"> </p>
</div>

<div class="nav" id="myNavbar">
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
        }, 2000);
      
      }
    </script>
  <?php } ?>

  <a href="javascript:void(0);" class="menu" onclick="menu()">&#9776;</a>
  <script>
    function menu() {
      var x = document.getElementById("myNavbar");
      if (x.className === "nav") {
        x.className += " responsive";
      } else {
        x.className = "nav";
      }
    }

    if (window.innerWidth < 480) {
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropbtn");
      var i;
      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
    } else {
      var dropdown = document.getElementsByClassName("dropbtn");
      var i;
      for (i = 0; i < dropdown.length; i++) {
        if (dropdown[i].classList.contains('active')){
          dropdown[i].classList.toggle('active');
        }
      }
    }
    </script>
  <!-- TODO: Profile manage page -->
    <!-- <a href="index.php" class="nav-home nav-right">
    <img src="img/profile.png" class="nav-logo" alt="Navigation Profile">
  </a>
   -->
  <!-- TODO: add profile -->
  <!-- <a href="logout.php" class="nav-right"> Log out</a> -->
</div>