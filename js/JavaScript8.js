/**
 * This method makes section1 questions visible based on answers to other questions
 */
function toggleVisibility() {

    // make g2 through g6 visible if Yes checked, hidden otherwise
    if (document.getElementById('h3a').checked) {
        document.getElementById('h3hi').style.display = "block";
        document.getElementById('h3hi').style.visibility = "visible";

    } else {
        document.getElementById('h3hi').style.display = "none";
        document.getElementById('h3hi').style.visibility = "hidden";
    }

    if (document.getElementById('h3b').checked) {
        document.getElementById('h3hi').style.display = "none";
        document.getElementById('h3hi').style.visibility = "hidden";
    }


}