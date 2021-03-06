const signupForm = document.getElementById("signup-form");

const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;
const usernameRegex = /^[A-Za-z][A-Za-z0-9_]{3,29}$/;
// Minimum eight characters, at least one letter and one number
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,29}$/;

function sign_up() {
    const email = document.getElementById('signup_email').value;
    const username = document.getElementById('signup_username').value;
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
            if (this.responseText == 0) {
                document.getElementById("response").innerHTML = "Your account has been successfully created.";
                setTimeout(function () {
                    document.getElementById("response").innerHTML = "redirecting...";
                    window.location.replace("login.php");
                }, 2000);
            } else if (this.responseText == 1) {
                document.getElementById("response").innerHTML = "Email $email has already been used.";
            } else if (this.responseText == 2) {
                document.getElementById("response").innerHTML = "A problem occurs while creating your account. Please try again later.";
            }
          }
        };
        xhttp.open("POST", "functions/add_account.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&email="+email+"&password="+password);
    }
}