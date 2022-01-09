<!DOCTYPE html>
<html>
   <body>
      <head>
         <title>HTML Forms</title>
      </head>
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
   </body>
</html>
