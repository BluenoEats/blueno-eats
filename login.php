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
         <input type="password" name="login-password" id="password-field" class="login-form-field" placeholder="Password">
         <a href="forgotpass">Forgot the username or password?</a>

         <input type="submit" value="Log in" onclick="log_in()">
      </form>
      
      <p id="response">response</p>
      <script src="scripts/log-in.js" type="text/javascript"></script>
   </body>
</html>
