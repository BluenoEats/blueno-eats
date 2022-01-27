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
      
      <?php if (!isset($_SESSION['user_id'])) { ?>

      <form class="user-form sign-log" id="sign-up-form" onsubmit="return false">
         <label for="signup_username">Username </label>
         <p class="signup-error-msg" id="signup-error-msg-user"> Username is invalid.</p> 
         <input input type="text" id="signup_username" minlength="3" maxlength="12" required>
         <p class="signup-reminder"> Username must contain at least four characters.</p>

         <label for="signup_email">Email </label>
         <p class="signup-error-msg" id="signup-error-msg-email"> Email is invalid</p> 
         <input type="text" id="signup_email" required>

         <label for="signup_password">Password</label>
         <p class="signup-error-msg" id="signup-error-msg-pass"> Please choose a more complex password.</p> 
         <input type="password" id="signup_password" minlength="8" required>
         <p class="signup-reminder"> Passwords must contain at least eight characters, including at least 1 letter and 1 number.</p>

         <label for="comfirm password">Confirm password</label>
         <p class="signup-error-msg" id="signup-error-msg-rep-pass"> The passwords do not match. </p> 
         <input type="password" id="signup_password_repeat" required>

         <input type="submit" value="Sign Up" id="signup-form-submit" onclick="sign_up()">
      </form>


      <script src="scripts/signup.js" type="text/javascript"></script>

      <?php } else { ?>
         <!-- TODO: style this header -->
         <h1>You are already logged in!</h1>
      <?php } ?>
   </body>
</html>
