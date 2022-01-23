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
      <form class="user-form sign-log" onsubmit="return false">
         <label for="login-email">Email: </label>
         <input type="text" id="login-email" name="login-email" placeholder="Your email" required>

         <label for="login-password">Password</label>
         <input type="password" name="login-password" id="login-password" placeholder="Password">
         <a href="forgotpass">Forgot your password?</a>

         <input type="submit" value="Log in" onclick="log_in()">
      </form>
      <?php } else { ?>
         <!-- TODO: style this header -->
         <h1>You are already logged in!</h1>
      <?php } ?>

      <!-- TODO: style the response -->
      <p id="response"></p>
      <script src="scripts/log-in.js" type="text/javascript"></script>
   </body>
</html>
