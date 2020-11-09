/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility()
{
    // make a text field  visible if Yes checked, hidden otherwise
    if (document.getElementById('c1a').checked) {
        document.getElementById('c1hiy').style.display = "block";
        document.getElementById('c1hiy').style.visibility = "visible";
        document.getElementById('c1hin').style.display = "none";
        document.getElementById('c1hin').style.visibility = "hidden";
    }

    if (document.getElementById('c1b').checked) {
        document.getElementById('c1hiy').style.display = "none";
        document.getElementById('c1hiy').style.visibility = "hidden";
        document.getElementById('c1hin').style.display =  "block";
        document.getElementById('c1hin').style.visibility = "visible";
    }


    // make question and text box visible if No checked, hidden otherwise
    if (document.getElementById('c2a').checked)
    {
        document.getElementById('c2hi').style.visibility = "hidden";
        document.getElementById('c2hi').style.display = "none";
    }

    if (document.getElementById('c2b').checked) {
        document.getElementById('c2hi').style.display = "block";
        document.getElementById('c2hi').style.visibility = "visible";
    }


    // make text box visible if Yes checked, hidden otherwise
    if (document.getElementById('c3a').checked)
    {
        document.getElementById('c3hi').style.display = "block";
        document.getElementById('c3hi').style.visibility = "visible";
    }
    if (document.getElementById('c3b').checked) {
        document.getElementById('c3hi').style.display = "hidden"
        document.getElementById('c3hi').style.visibility = "none";
    }

    // make text box visible if Yes checked, hidden otherwise
    if (document.getElementById('c4a').checked)
    {
        document.getElementById('c4hi').style.display = "hidden";
        document.getElementById('c4hi').style.visibility = "none";
    }
    if (document.getElementById('c4b').checked) {
        document.getElementById('c4hi').style.display = "block";
        document.getElementById('c4hi').style.visibility = "visible";
    }

    // make text box visible if No checked, hidden otherwise
    if (document.getElementById('c6a').checked)
    {
        document.getElementById('c6hi').style.display = "hidden";
        document.getElementById('c6hi').style.visibility = "none";
    }
    if (document.getElementById('c4b').checked) {
        document.getElementById('c6hi').style.display = "block";
        document.getElementById('c6hi').style.visibility = "visible";
    }

    // make text box visible if No checked, hidden otherwise
    if (document.getElementById('c7a').checked)
    {
        document.getElementById('c7hi').style.display = "hidden";
        document.getElementById('c7hi').style.visibility = "none";
    }
    if (document.getElementById('c7b').checked) {
        document.getElementById('c7hi').style.display = "block";
        document.getElementById('c7hi').style.visibility = "visible";
    }

    // make text box visible if No checked, hidden otherwise
    if (document.getElementById('c8a').checked)
    {
        document.getElementById('c8hi').style.display = "hidden";
        document.getElementById('c8hi').style.visibility = "none";
    }
    if (document.getElementById('c8b').checked) {
        document.getElementById('c8hi').style.display = "block";
        document.getElementById('c8hi').style.visibility = "visible";
    }

    // make text box visible if No checked, hidden otherwise
    if (document.getElementById('c9a').checked)
    {
        document.getElementById('c9hi').style.display = "hidden";
        document.getElementById('c9hi').style.visibility = "none";
    }
    if (document.getElementById('c9b').checked) {
        document.getElementById('c9hi').style.display = "block";
        document.getElementById('c9hi').style.visibility = "visible";
    }

}

