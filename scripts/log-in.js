async function SHA256(message) {
    const msgUint8 = new TextEncoder().encode(message);                           // encode as (utf-8) Uint8Array
    const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);           // hash the message
    const hashArray = Array.from(new Uint8Array(hashBuffer));                     // convert buffer to byte array
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join(''); // convert bytes to hex string
    return hashHex;
}

function log_in() {
    const email = document.getElementById("login-email").value;
    const raw_password = document.getElementById("login-password").value;
    SHA256(raw_password).then(encrypted => verify_with_server(email, encrypted));
}

function verify_with_server(email, encrypted_password) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("response").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "functions/login_func.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email+"&password="+encrypted_password);
}


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
