function sign_up() {
    const dish = document.getElementById('dish').value;
    const rating = document.getElementById('rating').value;
    const password = document.getElementById('signup_password').value;
    const repeat = document.getElementById('signup_password_repeat').value;

    document.getElementById("signup-error-msg-user").style.display = "none";
    document.getElementById("signup-error-msg-email").style.display = "none";
    document.getElementById("signup-error-msg-pass").style.display = "none";
    document.getElementById("signup-error-msg-rep-pass").style.display = "none";

    if (!usernameRegex.test(username)) {
        document.getElementById("signup-error-msg-user").style.display = "inline";
    } else if (!emailRegex.test(email)) {
        document.getElementById("signup-error-msg-email").style.display = "inline";
    } else if (!passwordRegex.test(password)) {
        document.getElementById("signup-error-msg-pass").style.display = "inline";
    } else if (password !== repeat) {
        document.getElementById("signup-error-msg-rep-pass").style.display = "inline";
    } else {
        document.getElementById("alert").style.display = "block";

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
            if (this.responseText === "Your account has been successfully created.") {
                setTimeout(function () {
                    window.location.replace("login.php");
                }, 3000);
            }
          }
        };
        xhttp.open("POST", "functions/add_account.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&email="+email+"&password="+password);
    }
}