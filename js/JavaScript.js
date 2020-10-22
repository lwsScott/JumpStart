const input = document.querySelector('input');
const hidden = document.getElementsByClassName('formatHidden');

input.addEventListener('input', toggleVisibility);

function toggleVisibility(e)
{
    if (e.target.checked)
    {
        for (let i=0; i<hidden.length; i++)
        {
            hidden[i].style.visibility = "visible";
        }
    }
    else
    {
        for (let i=0; i<hidden.length; i++)
        {
            hidden[i].style.visibility = "hidden";
        }
    }
}