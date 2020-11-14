/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make f2 visible if Yes checked, hidden otherwise
    if (document.getElementById('f1b').checked)
    {
        document.getElementById('f1hi').style.display = "block";
        document.getElementById('f1hi').style.visibility = "visible";

    } else {
        document.getElementById('f1hi').style.display = "none";
        document.getElementById('f1hi').style.visibility = "hidden";
    }

    if (document.getElementById('f1a').checked) {
        document.getElementById('f1hi').style.display = "none";
        document.getElementById('f1hi').style.visibility = "hidden";
    }


    // make f9  visible if Yes checked, hidden otherwise
    if (document.getElementById('f8a').checked)
    {
        document.getElementById('f8hi').style.visibility = "block";
        document.getElementById('f8hi').style.display = "visible";
    }
    else {
        document.getElementById('f8hi').style.display = "none";
        document.getElementById('f8hi').style.visibility = "hidden";
    }


    if (document.getElementById('f8b').checked) {
        document.getElementById('f8hi').style.display = "none";
        document.getElementById('f8hi').style.visibility = "hidden";
    }

    // make f28  visible if Yes checked, hidden otherwise
    if (document.getElementById('f27a').checked)
    {
        document.getElementById('f27hi').style.visibility = "block";
        document.getElementById('f27hi').style.display = "visible";
    }
    else {
        document.getElementById('f27hi').style.display = "none";
        document.getElementById('f27hi').style.visibility = "hidden";
    }


    if (document.getElementById('f27b').checked) {
        document.getElementById('f27hi').style.display = "none";
        document.getElementById('f27hi').style.visibility = "hidden";
    }


    // make f42 through f46 if Yes checked, hidden otherwise
    if (document.getElementById('f41a').checked)
    {
        document.getElementById('f41hi').style.display = "block";
        document.getElementById('f41hi').style.visibility = "visible";
    } else {
        document.getElementById('f41hi').style.display = "none";
        document.getElementById('f41hi').style.visibility = "hidden";
    }

    if (document.getElementById('f41b').checked) {
        document.getElementById('f41hi').style.display = "none";
        document.getElementById('f41hi').style.visibility = "hidden";
    }


}

