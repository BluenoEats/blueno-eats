function log_out() {
    document.getElementById("alert").style.display = "block";
    document.getElementById("response").innerHTML = "You have successfully logged out! ";
    setTimeout(function() {
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