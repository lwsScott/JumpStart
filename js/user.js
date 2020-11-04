document.getElementById("af").onsubmit = validate;

function validate() {
    let valid = true;
    let errors = document.getElementsByClassName("errJ");
    // make all err span lane hidden
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }


    // validation password
    let password = document.getElementById("password").value;
    if (password === "") {
        let errFirst = document.getElementById("errPassword");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //confirm password
    let confirm = document.getElementById("confirm").value;
    if (password !== confirm) {
        let errFirst = document.getElementById("errConfirm");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
