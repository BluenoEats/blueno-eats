function change_user() {
    const new_username = document.getElementById("change_username").value;
    const password = document.getElementById("username-password").value;
    const error_message = document.getElementById("username-error-msg-pass");
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
    xhttp.open("POST", "functions/change_username.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("new_username=" + new_username + "&password=" + password);
}