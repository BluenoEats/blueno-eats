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
         <label for="email">Email: </label>
         <input type="text" id="email" name="email" placeholder="Your email" required>

         <label for="password">Password</label>
         <input type="password" id="password" name="password" placeholder="Password" required>

         <input type="submit" value="Log in" onclick="myJsFunction()">
      </form>

      <button onclick="log_in()" style="height:20px;width:50px"></button>
      <p id="response">response</p>
      <script type="text/javascript">
      async function SHA256(message) {
        const msgUint8 = new TextEncoder().encode(message);                           // encode as (utf-8) Uint8Array
        const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);           // hash the message
        const hashArray = Array.from(new Uint8Array(hashBuffer));                     // convert buffer to byte array
        const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join(''); // convert bytes to hex string
        return hashHex;
      }

      function log_in() {
        const email = document.getElementById("email").value;
        const raw_password = document.getElementById("password").value;
        SHA256(raw_password).then(encrypted => verify_with_server(email, encrypted));
      }

      function verify_with_server(email, encrypted_password) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
          }
        };
        xhttp.open("POST", "functions/login.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("email="+email+"&password="+encrypted_password);
      }
      </script>
   </body>
</html>
