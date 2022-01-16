const signupForm = document.getElementById("signup-form");
const signupButton = document.getElementById("signup-form-submit");


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


signupButton.addEventListener("click", (e) => {
    e.preventDefault();
    const email = signupForm.email.value;
    const username = signupForm.username.value;
    const password = signupForm.password.value;

    const repeat = signupForm.repeat-password.value;
    if (!validateEmail(email)) {
        // signupForm.email.style.background = "red";
        alert("1")
    }
    else if (db1.includes(username) || db2.includes(email)) {
        alert("2");
    } else if (!validateUsername(username)) {
        alert("3")
    } else if (!validatePassword(password)) {
        alert("4");
    } else if (password !== repeat) {
        alert("5");
    } else {
    //    log in!
    }
})
