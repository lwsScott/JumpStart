/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make g2 through g6 visible if Yes checked, hidden otherwise
    if (document.getElementById('g1a').checked)
    {
        document.getElementById('g1hi').style.display = "block";
        document.getElementById('g1hi').style.visibility = "visible";

    } else {
        document.getElementById('g1hi').style.display = "none";
        document.getElementById('g1hi').style.visibility = "hidden";
    }

    if (document.getElementById('g1b').checked) {
        document.getElementById('g1hi').style.display = "none";
        document.getElementById('g1hi').style.visibility = "hidden";
    }


    // make g8 through g12  visible if Yes checked, hidden otherwise
    if (document.getElementById('g7a').checked)
    {
        document.getElementById('g7hi').style.visibility = "block";
        document.getElementById('g7hi').style.display = "visible";
    }
    else {
        document.getElementById('g7hi').style.display = "none";
        document.getElementById('g7hi').style.visibility = "hidden";
    }


    if (document.getElementById('g7b').checked) {
        document.getElementById('g7hi').style.display = "none";
        document.getElementById('g7hi').style.visibility = "hidden";
    }


}

