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
      <link href="styles/signup.css" rel="stylesheet" type="text/css">
   </head>

   <body>
      <?php include D_TEMPLATE."navigation.php" ?>
      <form class="user-form sign-log" id="sign-up-form">
         <label for="signup_username">Username </label>
         <p class="signup-error-msg" id="signup-error-msg-user">error message 1</p> 
         <input input type="text" id="signup_username" placeholder="username" minlength="1" maxlength="12" required>

         <label for="signup_email">Email </label>
         <p class="signup-error-msg" id="signup-error-msg-email">error message 2</p> 
         <input type="text" id="signup_email" placeholder="Your email" required>

         <label for="signup_password">Password</label>
         <p class="signup-error-msg" id="signup-error-msg-pass">error message 3</p> 
         <input type="password" id="signup_password" placeholder="password" minlength="8" required>

         <label for="comfirm password">Confirm Password</label>
         <p class="signup-error-msg" id="signup-error-msg-rep-pass">error message 4</p> 
         <input type="password" id="signup_password_repeat" placeholder="confirm password" required>

         <input type="submit" value="Sign up" id="signup-form-submit" onclick="sign_up()">
      </form>
      <p id="response">response</p>
      <script src="scripts/signup.js" type="text/javascript"></script>
   </body>
</html>
