

// allow the click of a table cell to add to the theme item list
let table = $('#table1').DataTable();
let table2 = $('#table2').DataTable();
let table3 = $('#table3').DataTable();


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
        let add = table.row( this ).data();
        console.log(add);
        let tacticId = add[4];
        console.log(tacticId);
        document.getElementById('tacticId').value = tacticId;
        console.log(document.getElementById('tacticId').value);
    }
} );

$('#table2 tbody').on( 'dblclick', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        table2.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        let add = table2.row( this ).data();
        console.log(add);
        let tacticId2 = add[4];
        console.log(tacticId);
        document.getElementById('tacticId2').value = tacticId2;
    }
} );

$('#table3 tbody').on( 'dblclick', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        table3.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        let add = table3.row( this ).data();
        console.log(add);
        let tacticId3 = add[4];
        console.log(tacticId);
        document.getElementById('tacticId3').value = tacticId3;
    }
} );
