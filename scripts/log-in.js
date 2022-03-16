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

// function verify_with_server(email, encrypted_password) {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("response").innerHTML = this.responseText;
//     }
//     };
//     xhttp.open("POST", "functions/login_func.php", true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send("email="+email+"&password="+encrypted_password);
// }


// const loginForm = document.getElementById("login-form");
// const loginButton = document.getElementById("login-form-submit");
// const loginErrorMsg = document.getElementById("login-error-msg");


// db = {
//     "user1":"abcd",
//     "user2":"55555",
//     "user3":"1234",
//     "user4":"kjbkjvcalb",
//     "user5":"hqdihhjc",
//     "user6":"hehehehehheehe",
// }


// loginButton.addEventListener("click", (e) => {
//     e.preventDefault();
//     const username = loginForm.username.value;
//     const password = loginForm.password.value;

//     if (db[username] === password) {
//         // do something to log in
//         alert("You have successfully logged in.");
//         location.reload();
//     } else {
//         loginErrorMsg.style.opacity = 1;
//         setTimeout(function(){
//         location.reload();
//         },3000);


//     }
// })
