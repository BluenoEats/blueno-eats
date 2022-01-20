const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");


db = {
    "user1":"abcd",
    "user2":"55555",
    "user3":"1234",
    "user4":"kjbkjvcalb",
    "user5":"hqdihhjc",
    "user6":"hehehehehheehe",
}


loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (db[username] === password) {
        // do something to log in
        alert("You have successfully logged in.");
        location.reload();
    } else {
        loginErrorMsg.style.opacity = 1;
        setTimeout(function(){
        location.reload();
        },3000);


    }
})