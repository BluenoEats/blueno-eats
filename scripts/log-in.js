const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;

function log_in(prev_page) {
    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;
    document.getElementById("login-error-msg-email").style.display = "none";
    // SHA256(raw_password).then(encrypted => verify_with_server(email, encrypted));
    if (!emailRegex.test(email)) {
        document.getElementById("login-error-msg-email").style.display = "inline";
    } else {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("alert").style.display = "block";
                if (this.responseText == "1") {
                    document.getElementById("response").innerHTML = "Incorrect email or password. Please try again.";
                } else {
                    let redirect_to = this.responseText;
                    document.getElementById("response").innerHTML = "You have successfully logged in! ";
                    setTimeout(function () {
                        window.location.replace(redirect_to);
                    }, 2000);
                }
            }
        };
        xhttp.open("POST", "functions/login_func.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("email=" + email + "&password=" + password);
    }
}