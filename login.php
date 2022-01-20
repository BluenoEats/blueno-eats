<?php include "config/setup.php"; ?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title> Blueno Eats Website </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="styles/main.css" rel="stylesheet" type="text/css">
      <link href="styles/navigation.css" rel="stylesheet" type="text/css">
      <link href="styles/info.css" rel="stylesheet" type="text/css">
      <link href="styles/form.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <?php include D_TEMPLATE."navigation.php" ?>
      <form class="user-form sign-log">
         <label for="login-email">Email: </label>
         <input type="text" id="login-email" name="login-email" placeholder="Your email" required>

         <label for="login-password">Password</label>
         <input type="password" id="login-password" placeholder="password" required>
         <a href="forgotpass">Forgot the username or password?</a>

         <input type="submit" value="Log in" id="login-form-submit" onclick="login()">

      </form>
      <script src="scripts/login-in.js" type="text/javascript"></script>
      <!--<button onclick="myJsFunction()" style="height:20px;width:50px"></button>
      <p id="response"></p>
      <script type="text/javascript">

       function myJsFunction(){
          var email=document.getElementById("email").value;
          var password=document.getElementById("password").value;
          var username=document.getElementById("username").value;
          var xhttp = new XMLHttpRequest();
          // assuming all fields are filled
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("response").innerHTML = this.responseText;
            }
          };
          // xhttp.open("GET", "add_account.php?email=&password=&username=", true)
          xhttp.open("GET", "add_account.php?email="+email+"&password="+password+"&username="+username, true);
          xhttp.send();
          // document.getElementById("response").innerHTML = "add_account.php?email="+email+"&password="+password+"&username="+username;
       }
      </script>
            -->
   </body>
</html>
