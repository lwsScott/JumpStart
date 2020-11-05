/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make purpose statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a1a').checked)
    {
        document.getElementById('a1y').style.display = "block";
        document.getElementById('a1y').style.visibility = "visible";

    } else {
        document.getElementById('a1y').style.display = "none";
        document.getElementById('a1y').style.visibility = "hidden";
    }

    if (document.getElementById('a1b').checked) {
        document.getElementById('a1y').style.display = "none";
        document.getElementById('a1y').style.visibility = "hidden";
    }


    // make purpose living it statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a5a').checked)
    {
        document.getElementById('a5n').style.visibility = "hidden";
        document.getElementById('a5n').style.display = "none";
    }

    if (document.getElementById('a5b').checked) {
        document.getElementById('a5n').style.display = "block";
        document.getElementById('a5n').style.visibility = "visible";
    }


    // make mission statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a7a').checked)
    {
        document.getElementById('a7y').style.display = "block";
        document.getElementById('a7y').style.visibility = "visible";
    } else {
        document.getElementById('a7y').style.display = "none";
        document.getElementById('a7y').style.visibility = "hidden";
    }

    if (document.getElementById('a7b').checked) {
        document.getElementById('a7y').style.display = "none";
        document.getElementById('a7y').style.visibility = "hidden";
    }


    // make mission living it statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a11b').checked)
    {
        document.getElementById('a11n').style.visibility = "visible";
        document.getElementById('a11n').style.display = "block";
    }

    if (document.getElementById('a11a').checked)
    {
        document.getElementById('a11n').style.visibility = "hidden";
        document.getElementById('a11n').style.display = "none";
    }



    // make vision statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a13a').checked) {

        document.getElementById('a13y').style.display = "block";
        document.getElementById('a13y').style.visibility = "visible";
     } else {
        document.getElementById('a13y').style.display = "none";
        document.getElementById('a13y').style.visibility = "hidden";
    }

    if (document.getElementById('a13b').checked) {
        document.getElementById('a13y').style.display = "none";
        document.getElementById('a13y').style.visibility = "hidden";
    }



    // make vision living it statement visible if Yes checked, hidden otherwise
    if (document.getElementById('a17b').checked)
    {
        document.getElementById('a17n').style.visibility = "visible";
        document.getElementById('a17n').style.display = "block";
    }

    if (document.getElementById('a17a').checked)
    {
        document.getElementById('a17n').style.visibility = "hidden";
        document.getElementById('a17n').style.display = "none";
    }

}

