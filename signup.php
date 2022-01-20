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
      <form class="user-form sign-log" id="sign-up-form" autocomplete="off">
         <label for="signup_username">Username: </label>
         <input input type="text" id="signup_username" placeholder="username" minlength="1" maxlength="12" required>

         <label for="signup_email">Email: </label>
         <input type="text" id="signup_email" placeholder="Your email" required>

         <label for="signup_password">Password</label>
         <input type="password" id="signup_password" placeholder="password" minlength="8" required>

         <label for="comfirm password">Confirm Password</label>
         <input type="password" id="signup_password_repeat" placeholder="confirm password" required>

         <input type="submit" value="Sign up" id="signup-form-submit" onclick="signup()">
      </form>
      <script src="scripts/signup.js" type="text/javascript"></script>
   </body>
</html>
