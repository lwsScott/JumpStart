/*
 * Lewis Scott
 * 6/6/20
 * filename https://lscott.greenriverdev.com/355/JumpStart/js/clientSideValidation.js
 * client side validation and show hidden elements
 */
// check the submitted form
// if valid, call function
// prevent submission of the form
let checkForm = function(e) {
    //let form = e.target;
    // prevent form from submitting and "refreshing" page
    e.preventDefault();
};


document.getElementById("section1").onsubmit = validate;

function validate()
{
    alert("Validating");

    // Create a flag variable
    let valid = true;

    // Make all errors hidden
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++)
    {
        errors[i].style.visibility = "hidden";
    }

    return valid;
}

// E-mail format buttons visible when mailing list checked
 let formatHidden = document.getElementsByClassName("formatHidden");

     for (let i=0; i<formatHidden.length; i++)
     {
         formatHidden[i].style.visibility = "hidden";
     }

document.addEventListener('input', function(event)
{
    if (event.target.id !=="a1a") return;
    if (event.target.checked)
    {
        for (let i=0; i<formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "visible";
        }
    }
    else
    {
        for (let i=0; i<formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "hidden";
        }
    }
});


});





