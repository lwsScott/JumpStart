/**
 * This method makes section4 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make d3 through d6 text fields visible if Yes checked, hidden otherwise
    if (document.getElementById('d1a').checked)
    {
        document.getElementById('d2hi').style.display = "block";
        document.getElementById('d2hi').style.visibility = "visible";

    } else {
        document.getElementById('d2hi').style.display = "none";
        document.getElementById('d2hi').style.visibility = "hidden";
    }

    if (document.getElementById('d1b').checked) {
        document.getElementById('d2hi').style.display = "none";
        document.getElementById('d2hi').style.visibility = "hidden";
    }


    // make d8 through d16 visible if Yes checked, hidden otherwise
    if (document.getElementById('d7a').checked)
    {
        document.getElementById('d7hi').style.visibility = "hidden";
        document.getElementById('d7hi').style.display = "none";
    }

    if (document.getElementById('d7b').checked) {
        document.getElementById('d7hi').style.display = "block";
        document.getElementById('d7hi').style.visibility = "visible";
    }


    // make d22 through d24 if Yes checked, hidden otherwise
    if (document.getElementById('d21a').checked)
    {
        document.getElementById('d21hi').style.display = "block";
        document.getElementById('d21hi').style.visibility = "visible";
    } else {
        document.getElementById('d21hi').style.display = "none";
        document.getElementById('d21hi').style.visibility = "hidden";
    }

    if (document.getElementById('d21b').checked) {
        document.getElementById('d21hi').style.display = "none";
        document.getElementById('d21hi').style.visibility = "hidden";
    }


    // make d27 visible if NO checked, hidden otherwise
    if (document.getElementById('d26b').checked)
    {
        document.getElementById('d26hi').style.visibility = "visible";
        document.getElementById('d26hi').style.display = "block";
    }

    if (document.getElementById('d26a').checked)
    {
        document.getElementById('d26hi').style.visibility = "hidden";
        document.getElementById('d26hi').style.display = "none";
    }



}

