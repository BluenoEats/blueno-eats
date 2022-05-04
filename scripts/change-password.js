function change_pass() {
    console.log("Hello");
    const new_password = document.getElementById("new-password").value;
    const password = document.getElementById("old-password").value;
    const error_message = document.getElementById("password-error-msg-pass");
    error_message.style.display = "none";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "0") {
                window.location.reload();
            } else {
                error_message.style.display = "inline";
            }
        }
    };
    xhttp.open("POST", "functions/change_password.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("new_password=" + new_password + "&password=" + password);
}
