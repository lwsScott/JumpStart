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
/*
    // Create a flag variable
    let valid = true;

    // Make all errors hidden
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++)
    {
        errors[i].style.visibility = "hidden";
    }


    // Check first name
    let recipeName = document.getElementById("name").value;
    if (recipeName == "")
    {
        let errFirst = document.getElementById("errFName");
        errFirst.style.visibility = "visible";
        valid = false;
    }
    // Check last name
    let last = document.getElementById("lastName").value;
    if (last == "")
    {
        let errLast = document.getElementById("errLName");
        errLast.style.visibility = "visible";
        valid = false;
    }
    // Check How we Met
    let met = document.getElementById("met").value;
    if (met == "")
    {
        let errMet = document.getElementById("errMet");
        errMet.style.visibility = "visible";
        valid = false;
    }
    // Check email
    const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    // If filled out or Mailing List checked
    // must be valid
    let email = document.getElementById("Email").value;
    let mailList = document.getElementById("mailList").checked;
    let countAts = 0;
    let countDots = 0;

    if (email != "" || mailList)
    {
        //let errEmail = document.getElementById("errEmail");
        //errEmail.style.visibility = "visible";
        //valid = false;

        for (let i = 0; i < email.length; i++)
        {
            if (email.charAt(i) == '@') {
                countAts++;
            }
            if (email.charAt(i) == '.') {
                countDots++;
            }
        }

        if (countAts != 1 || countDots < 1)
        {
            let errEmail = document.getElementById("errEmail");
            errEmail.style.visibility = "visible";
            valid = false;
        }
    }
    // Checked LinkedIn address
    // valid URL
    let linkedIn = document.getElementById("linkedIn").value;
    if (linkedIn != "")
    {
    if (!is_url(linkedIn))
        {
            let errLinkedIn = document.getElementById("errLinkedIn");
            errLinkedIn.style.visibility = "visible";
            valid = false;
        }
    }
*/
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

// Other textbox visible only with "Other" is checked
let metOther = document.getElementsByClassName("otherHidden");

    for (let i=0; i<metOther.length; i++)
    {
        metOther[i].style.visibility = "hidden";
    }


document.addEventListener('input', function(event)
{
    if (event.target.id !=="met") return;
    if (event.target.value == "Other (please specify)")
    {
        for (let i=0; i<metOther.length; i++)
        {
            metOther[i].style.visibility = "visible";
        }
    }
    else
    {
        for (let i=0; i<metOther.length; i++)
        {
            metOther[i].style.visibility = "hidden";
        }
    }
});





