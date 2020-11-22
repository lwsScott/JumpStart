/*
* Lewis Scott
* 11/17/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/themes.js
*
*/
let items = [];
let JSONitems;

// add event listener for theme list items
document.getElementById("itemList").addEventListener("dblclick", function(e) {
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

$('#table').on( 'dblclick', 'td', function () {
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

$('#table2').on( 'dblclick', 'td', function () {
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

let table3 = $('#table3').DataTable();

$('#table3').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table3.cell( this ).data();
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

let table4 = $('#table4').DataTable();

$('#table4').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table4.cell( this ).data();
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

let table5 = $('#table5').DataTable();

$('#table5').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table5.cell( this ).data();
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

let table6 = $('#table6').DataTable();

$('#table6').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table6.cell( this ).data();
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

let table7 = $('#table7').DataTable();

$('#table7').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table7.cell( this ).data();
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

let table8 = $('#table8').DataTable();

$('#table8').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table8.cell( this ).data();
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

let table9 = $('#table9').DataTable();

$('#table9').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table9.cell( this ).data();
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

let table10 = $('#table10').DataTable();

$('#table10').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table10.cell( this ).data();
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
