/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    if (document.getElementById('a1a').checked)
    {
        document.getElementById('a1y').style.visibility = "visible";
    }

    if (document.getElementById('a5b').checked)
    {
        document.getElementById('a5n').style.visibility = "visible";
    }

    if (document.getElementById('a7a').checked)
    {
        document.getElementById('a7y').style.visibility = "visible";
    }

    if (document.getElementById('a11b').checked)
    {
        document.getElementById('a11n').style.visibility = "visible";
    }

    if (document.getElementById('a13a').checked)
    {
        document.getElementById('a13y').style.visibility = "visible";
    }

    if (document.getElementById('a17b').checked)
    {
        document.getElementById('a17n').style.visibility = "visible";
    }

}

