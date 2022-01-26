const signupForm = document.getElementById("signup-form");

const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;
const usernameRegex = /^[A-Za-z][A-Za-z0-9_]{3,29}$/;

// Minimum eight characters, at least one letter and one number
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,29}$/;


// async function SHA256(message) {
//   const msgUint8 = new TextEncoder().encode(message);                           // encode as (utf-8) Uint8Array
//   const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);           // hash the message
//   const hashArray = Array.from(new Uint8Array(hashBuffer));                     // convert buffer to byte array
//   const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join(''); // convert bytes to hex string
//   return hashHex;
// }

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
        // SHA256(password).then(encrypted => send_to_server(username, email, encrypted));

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

// function send_to_server(username, email, encrypted_password) {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("response").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("POST", "functions/add_account.php", true);
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send("username="+username+"&email="+email+"&password="+encrypted_password);
// }