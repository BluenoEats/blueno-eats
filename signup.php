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
      <p>Add your details:</p>
      <form>
        Email: <input type="text" id="email" placeholder="example@domain.com">
        <br>
        <br>
        Password: <input type="text" id="password" placeholder="password">
        <br>
        <br>
        Username: <input type="text" id="username" placeholder="username">
        <br>
        <br>
      </form>
      <button onclick="myJsFunction()" style="height:20px;width:50px"></button>
      <p id="response">response</p>
      <script type="text/javascript">
       function myJsFunction(){
          var email=document.getElementById("email").value;
          var password=document.getElementById("password").value;
          var username=document.getElementById("username").value;
          var xhttp = new XMLHttpRequest();
          // assuming all fields are filled
          // xhttp.onreadystatechange = function() {
          //   if (this.readyState == 4 && this.status == 200) {
          //     document.getElementById("response").innerHTML = this.responseText;
          //   }
          // };
          // xhttp.open("GET", "add_account.php?email=&password=&username=", true)
          xhttp.open("GET", "functions/add_account.php?email="+email+"&password="+password+"&username="+username, true);
          xhttp.send();
          // document.getElementById("response").innerHTML = "functions/add_account.php?email="+email+"&password="+password+"&username="+username;
       }
      </script>
   </body>
</html>
