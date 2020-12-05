/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make e2 visible if Yes checked, hidden otherwise
    if (document.getElementById('e1a').checked)
    {
        document.getElementById('e1hi').style.display = "block";
        document.getElementById('e1hi').style.visibility = "visible";

    } else {
        document.getElementById('e1hi').style.display = "none";
        document.getElementById('e1hi').style.visibility = "hidden";
    }

    if (document.getElementById('e1b').checked) {
        document.getElementById('e1hi').style.display = "none";
        document.getElementById('e1hi').style.visibility = "hidden";
    }


    // make e4 through e8 visible if Yes checked, hidden otherwise
    if (document.getElementById('e3a').checked)
    {
        document.getElementById('e3hi').style.display = "block";
        document.getElementById('e3hi').style.visibility = "visible";

    }
    else {
        document.getElementById('e3hi').style.display = "none";
        document.getElementById('e3hi').style.visibility = "hidden";
    }


    if (document.getElementById('e3b').checked) {
        document.getElementById('e3hi').style.display = "none";
        document.getElementById('e3hi').style.visibility = "hidden";
    }


    // make text box visible if Yes checked, hidden otherwise
    if (document.getElementById('e10a').checked)
    {
        document.getElementById('e10hi').style.display = "block";
        document.getElementById('e10hi').style.visibility = "visible";
    } else {
        document.getElementById('e10hi').style.display = "none";
        document.getElementById('e10hi').style.visibility = "hidden";
    }

    if (document.getElementById('e10b').checked) {
        document.getElementById('e10hi').style.display = "none";
        document.getElementById('e10hi').style.visibility = "hidden";
    }
    // make e20 question visible if Yes checked, hidden otherwise
    if (document.getElementById('e19a').checked)
    {
        document.getElementById('e19hi').style.display = "block";
        document.getElementById('e19hi').style.visibility = "visible";
    } else {
        document.getElementById('e19hi').style.display = "none";
        document.getElementById('e19hi').style.visibility = "hidden";
    }

    if (document.getElementById('e19b').checked) {
        document.getElementById('e19hi').style.display = "none";
        document.getElementById('e19hi').style.visibility = "hidden";
    }

    // make e40 visible if Yes checked, hidden otherwise
    if (document.getElementById('e39a').checked)
    {
        document.getElementById('e39hi').style.display = "block";
        document.getElementById('e39hi').style.visibility = "visible";
    } else {
        document.getElementById('e39hi').style.display = "none";
        document.getElementById('e39hi').style.visibility = "hidden";
    }

    if (document.getElementById('e39b').checked) {
        document.getElementById('e39hi').style.display = "none";
        document.getElementById('e39hi').style.visibility = "hidden";
    }

    // make e48 visible if Yes checked, hidden otherwise
    if (document.getElementById('e47a').checked)
    {
        document.getElementById('e47hi').style.display = "block";
        document.getElementById('e47hi').style.visibility = "visible";
    } else {
        document.getElementById('e47hi').style.display = "none";
        document.getElementById('e47hi').style.visibility = "hidden";
    }

    if (document.getElementById('e47b').checked) {
        document.getElementById('e47hi').style.display = "none";
        document.getElementById('e47hi').style.visibility = "hidden";
    }


}

