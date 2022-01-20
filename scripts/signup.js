const signupForm = document.getElementById("signup-form");

const validateEmail = (e) => {
    return String(e)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
};

// redo this
const validateUsername = (u) => {
    return String(u).match(
        "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
    );

};

//check again
//Minimum eight characters, at least one letter, one number and one special character:
const validatePassword = (u) => {
    return String(u).match(
        "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
    );
};

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
    // const submitbtn = document.getElementById('signup-form-submit');

    if (!validateEmail(email)) {
        alert("Email is invalid.");
        // submitbtn.disabled = true;
    // } else if (!validateUsername(username)){
    //     alert("Username is invalid.");
    //     // submitbtn.disabled = true;
    // } else if (!validatePassword(password)) {
    //     // submitbtn.disabled = true;
    //     alert("The password should be eight characters minimum and contain at least one number and one special character.");
    } else if (password !== repeat) {
        // submitbtn.disabled = true;
        alert("The passwords do not match.");
    } else {
        alert("np");
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
