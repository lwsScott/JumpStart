

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
        let add = table.row( this ).data();
        console.log(add);
        let tacticId = add[3];
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
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        let add = table.row( this ).data();
        console.log(add);
        let tacticId2 = add[3];
        console.log(tacticId);
        document.getElementById('tacticId2').value = tacticId2;
    }
} );

$('#table3 tbody').on( 'dblclick', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        let add = table.row( this ).data();
        console.log(add);
        let tacticId3 = add[3];
        console.log(tacticId);
        document.getElementById('tacticId3').value = tacticId3;
    }
} );
