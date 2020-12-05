/*
* Lewis Scott
* 11/17/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/themes.js
*
*/
// if not valid prevent default and do not post data
let checkForm = function(e) {
    //let form = e.target;

    // Theme 1 additions
    let itemList = document.getElementById("itemList1").getElementsByTagName("li");
    console.log(itemList);
    for (var i = 0; i< itemList.length; i++) {
        let add = itemList[i].innerText;
        console.log(add);
        if (items.indexOf(add) == -1) {
            items.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems = JSON.stringify(items);
    console.log(JSONitems);

    // set the value of the form to carry the array within a string
    document.getElementById('items1').value = JSONitems;

    // Theme 2 additions
    let itemList2 = document.getElementById("itemList2").getElementsByTagName("li");
    for (var i = 0; i< itemList2.length; i++) {
        let add = itemList2[i].innerText;
        console.log(add);
        if (items2.indexOf(add) == -1) {
            items2.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems2 = JSON.stringify(items2);
    // set the value of the form to carry the array within a string
    document.getElementById('items2').value = JSONitems2;

    // Theme 3 additions
    let itemList3 = document.getElementById("itemList3").getElementsByTagName("li");
    for (var i = 0; i< itemList3.length; i++) {
        let add = itemList3[i].innerText;
        console.log(add);
        if (items3.indexOf(add) == -1) {
            items3.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems3 = JSON.stringify(items3);
    // set the value of the form to carry the array within a string
    document.getElementById('items3').value = JSONitems3;
    //e.preventDefault();

};
// on submit checkForm
document.getElementById("themes").addEventListener("submit", checkForm, false);
let items = [];
let JSONitems;

let items2 = [];
let JSONitems2;

let items3 = [];
let JSONitems3;

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

function appendChild2(add) {

    var ul = document.getElementById("itemList2");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
    console.log(items);
}

function appendChild3(add) {

    var ul = document.getElementById("itemList3");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
    console.log(items);
}


// add event listener for theme list items
document.getElementById("itemList1").addEventListener("dblclick", function(e) {
    var tgt = e.target;
    if (tgt.tagName.toUpperCase() == "LI") {

        // remove the list item from the theme list
        tgt.parentNode.removeChild(tgt); // or tgt.remove();

        // remove the list item from the item array
        //var string = tgt.innerHTML;
        var string = tgt.innerText;

        console.log(string);
        let index = items.indexOf(string);
        console.log(index);
        if (index > -1) {
            items.splice(index, 1);
        }
        console.log(items);

        // convert that array into a JSON string - puts quotes around the array
        //JSONitems = JSON.stringify(items);

        // set the value of the form to carry the array within a string
        //document.getElementById('items1').value = JSONitems;

        //delete items[index];
    }
});


// add event listener for theme list items
document.getElementById("itemList2").addEventListener("dblclick", function(e) {
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

// add event listener for theme list items
document.getElementById("itemList3").addEventListener("dblclick", function(e) {
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

function clearNbsp($str)
{
    $entities = str_replace('&nbsp;', ' ', htmlentities($str));
    return html_entity_decode($entities);
}

// allow the click of a table cell to add to the theme item list
let table = $('#table').DataTable();

$('#table').on( 'dblclick', 'td', function () {
    //alert( table.cell( this ).data() );
    let add = table.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');
    console.log(add);

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme2);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme3);
    if (theme3) {
        appendChild3(add);
    }

} );

let table2 = $('#table2').DataTable();

$('#table2').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table2.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }

} );

let table3 = $('#table3').DataTable();

$('#table3').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table3.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    if (theme3) {
        appendChild3(add);
    }


} );

let table4 = $('#table4').DataTable();

$('#table4').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table4.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }


} );

let table5 = $('#table5').DataTable();

$('#table5').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table5.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }


} );

let table6 = $('#table6').DataTable();

$('#table6').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table6.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }


} );

let table7 = $('#table7').DataTable();

$('#table7').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table7.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }

} );

let table8 = $('#table8').DataTable();

$('#table8').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table8.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }


} );

let table9 = $('#table9').DataTable();

$('#table9').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table9.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }

} );

let table10 = $('#table10').DataTable();

$('#table10').on( 'dblclick', 'td', function () {
    //alert( table2.cell( this ).data() );
    let add = table10.cell( this ).data();
    add = add.replaceAll('&nbsp;', ' ');

    let theme1 = document.getElementById("theme1").checked;
    console.log(theme1);
    if (theme1) {
        appendChild1(add);
    }

    let theme2 = document.getElementById("theme2").checked;
    console.log(theme1);
    if (theme2) {
        appendChild2(add);
    }

    let theme3 = document.getElementById("theme3").checked;
    console.log(theme1);
    if (theme3) {
        appendChild3(add);
    }

} );
