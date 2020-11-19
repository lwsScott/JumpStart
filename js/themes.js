/*
* Lewis Scott
* 11/17/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/themes.js
*
*/
let items = [];
let JSONitems;

// add event listener for theme list items
document.getElementById("itemList").addEventListener("click", function(e) {
    var tgt = e.target;
    if (tgt.tagName.toUpperCase() == "LI") {

        // remove the list item from the theme list
        tgt.parentNode.removeChild(tgt); // or tgt.remove();

        // remove the list item from the item array
        var string = tgt.innerHTML;
        console.log(string);
        let index = items.indexOf(string);
        if (index > -1) {
            items.splice(index, 1);
        }
        console.log(items);

        //delete items[index];
    }
});


// allow the click of a table cell to add to the theme item list
let table = $('#table').DataTable();

$('#table').on( 'click', 'td', function () {
    //alert( table.cell( this ).data() );
    let add = table.cell( this ).data();
    if(items.indexOf(add) == -1) {

        items.push(add);
    }
    $('#itemList').html("");
    for (var i=0; i<items.length; i++)
    {
        $("#itemList").append("<li>" + items[i] + "</li>");
    }
    //$("#item").val("");

    // convert that array into a JSON string - puts quotes around the array
    JSONitems = JSON.stringify(items);

    // set the value of the form to carry the array within a string
    document.getElementById('items').value = JSONitems;

} );

let table2 = $('#table2').DataTable();

$('#table2').on( 'click', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table2.cell( this ).data();
    if(items.indexOf(add) == -1) {

        items.push(add);
    }
    $('#itemList').html("");
    for (var i=0; i<items.length; i++)
    {
        $("#itemList").append("<li>" + items[i] + "</li>");
    }
    //$("#item").val("");

} );


