/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make USP visible if Yes checked, hidden otherwise
    if (document.getElementById('b1a').checked)
    {
        document.getElementById('b1y').style.display = "block";
        document.getElementById('b1y').style.visibility = "visible";

    } else {
        document.getElementById('b1y').style.display = "none";
        document.getElementById('b1y').style.visibility = "hidden";
    }

    if (document.getElementById('b1b').checked) {
        document.getElementById('b1y').style.display = "none";
        document.getElementById('b1y').style.visibility = "hidden";
    }


    // make "what allows you to do so?" visible if Yes checked
    if (document.getElementById('b9a').checked)
    {
        document.getElementById('b10y').style.visibility = "block";
        document.getElementById('b10y').style.display = "visible";
    }
      // if No checked, then show the following questions
    if (document.getElementById('b9b').checked) {
        document.getElementById('b11n').style.display = "block";
        document.getElementById('b11n').style.visibility = "visible";
        document.getElementById('b12n').style.display = "block";
        document.getElementById('b12n').style.visibility = "visible";
        document.getElementById('b13n').style.display = "block";
        document.getElementById('b13n').style.visibility = "visible";

    }


    // make  written values of the org questions visible if Yes checked, hidden otherwise
    if (document.getElementById('b14a').checked)
    {
        document.getElementById('b15y').style.display = "block";
        document.getElementById('b15y').style.visibility = "visible";
    }
    if (document.getElementById('b14b').checked)
    {
        document.getElementById('b15y').style.display = "none";
        document.getElementById('b15y').style.visibility = "hidden";
    }




}

