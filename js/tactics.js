

// allow the click of a table cell to add to the theme item list
let table = $('#table1').DataTable();

$('#table').on( 'dblclick', 'tr', function () {
    //alert( table.cell( this ).data() );
    let add = table.row( this ).data();
    console.log(add);
} );

$('#table1 tbody').on( 'dblclick', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
} );

$('#table1 tbody').on( 'dblclick', 'tr', function () {
    let add = table.row( this ).data();
    console.log(add);
    let tacticId = add[3];
    console.log(tacticId);
    document.getElementById('tacticId').value = tacticId;
    console.log(document.getElementById('tacticId').value);
} );


function appendChild1(add) {

    var ul = document.getElementById("itemList1");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
    console.log(items);
}