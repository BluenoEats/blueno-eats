const signupForm = document.getElementById("signup-form");

let db1 = ["user1","user2","user3","user4"];
let db2 = ["user1@gmail.com","user2@gmail.com","user3@gmail.com","user4@gmail.com"];

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

function signup() {
    // get element does not work
    const email = document.getElementById('signup_email').value;
    const username = document.getElementById('signup_username').value;
    const password = document.getElementById('signup_password').value;
    const repeat = document.getElementById('signup_password_repeat').value;
    const submitbtn = document.getElementById('signup-form-submit');
    if ((!validateEmail(email)) || db2.includes(email)) {
        alert("Email is invalid or already taken.");
        submitbtn.disabled = true;
    } else if (db1.includes(username)) {
        alert("Username is not avaliable. Please choose another.");
        submitbtn.disabled = true;
    } else if (!validateUsername(username)){
        alert("Username is invalid.");
        submitbtn.disabled = true;
    } else if (!validatePassword(password)) {
        submitbtn.disabled = true;
        alert("The password should be eight characters minimum and contain at least one number and one special character.");
    } else if (password !== repeat) {
        submitbtn.disabled = true;
        alert("The passwords do not match.");
    } else {
        alert("np");
        submitbtn.disabled = false;
        var xhttp = new XMLHttpRequest();
        // assuming all fields are filled
        // xhttp.onreadystatechange = function() {
        //   if (this.readyState == 4 && this.status == 200) {
        //     document.getElementById("response").innerHTML = this.responseText;
        //   }
        // };
        // xhttp.open("GET", "add_account.php?email=&password=&username=", true)
        xhttp.open("GET", "functions/add_account.php?email="+email+"&password="+password+"&username="+username, true);
        xhttp.send();
        // document.getElementById("response").innerHTML = "functions/add_account.php?email="+email+"&password="+password+"&username="+username;
    }
}

