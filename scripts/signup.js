const signupForm = document.getElementById("signup-form");

const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;
const usernameRegex = /^[A-Za-z][A-Za-z0-9_]{4,29}$/;

//Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,29}$/;


async function SHA256(message) {
  const msgUint8 = new TextEncoder().encode(message);                           // encode as (utf-8) Uint8Array
  const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);           // hash the message
  const hashArray = Array.from(new Uint8Array(hashBuffer));                     // convert buffer to byte array
  const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join(''); // convert bytes to hex string
  return hashHex;
}

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
       // alert("Username is invalid.");
        document.getElementById("signup-error-msg-user").style.display = "inline";
    } else if (!emailRegex.test(email)) {
        //alert("Email is invalid");
        document.getElementById("signup-error-msg-email").style.display = "inline";
    } else if (!passwordRegex.test(password)) {
        //alert("The password should be eight characters minimum and contain at least one number and one special character.");
        document.getElementById("signup-error-msg-pass").style.display = "inline";
    } else if (password !== repeat) {
        document.getElementById("signup-error-msg-rep-pass").style.display = "inline";
        //alert("The passwords do not match.");
    } else {
        //alert("np");
        // submitbtn.disabled = false;
        document.getElementById("response").innerHTML = "creating an account...";
        SHA256(password).then(encrypted => send_to_server(username, email, encrypted));
    }
}

function send_to_server(username, email, encrypted_password) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("response").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "functions/add_account.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("username="+username+"&email="+email+"&password="+encrypted_password);
}