/*
* Lewis Scott
* 11/17/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/themes.js
*
*/

let table = $('#table').DataTable();
let items = [];

$('#table').on( 'click', 'td', function () {
    //alert( table.cell( this ).data() );
    let add = table.cell( this ).data();
    if(items.indexOf(add) == -1) {

        items.push(add);
    }
    $('#itemList').html("");
    for (var i=0; i<items.length; i++)
    {
        $("#itemList").append("<li>" + items[i] + "</li>" + "<br>");
    }
    //$("#item").val("");

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
        $("#itemList").append("<li>" + items[i] + "</li>" + "<br>");
    }
    //$("#item").val("");

} );

/*
// create an array of items to display in a list
let items = [];
let JSONitems;

$("#btnItem").on('change', function() {

    var e = document.getElementsByClassName("themes");
    var theme = e.value;

    var add = $("#item").val();

    if(items.indexOf(add) == -1) {

        items.push(add);
    }

    $('#itemList').html("");
    for (var i=0; i<items.length; i++)
    {
        $("#itemList").append("<li>" + items[i] + "</li>" + "<br>");
    }
    $("#item").val("");

    // convert that array into a JSON string - puts quotes around the array
    JSONitems = JSON.stringify(items);

    // set the value of the form to carry the array within a string
    document.getElementById('items').value = JSONitems;
    //console.log(JSONingredients);
});
*/

// we now have two strings JSONingredients = "[''ing1, "ing2"]"
// and JSONdirections "[''dir1, "dir2"]"

// combine into one array [JSONingredients, JSONdirections, name]
// name will come from the input id=recipeName
// then stringify that array "[JSONingredients, JSONdirections, name]"
// then we can post that to PHP which will store it in a DB table

// name="recipeName"
// name="ingredients"
// name="directions"
// name="description"

// this is what a post array looks like
// array(7) { ["firstName"]=> string(1) "l" ["lastName"]=> string(1) "s"
// ["email"]=> string(11) "me@mail.com" ["phone"]=> string(10) "1234567891"
// ["username"]=> string(3) "lew" ["password"]=> string(4) "pswd"
// ["confirm"]=> string(4) "pswd" }
// $products = array('eggs' => 2.19, 'bacon' => 4.35, 'bagels' => 1.89);
/*
  // post the data to the .php file
  $("#btnSubmit").on('click', function() {
	  // add the name to the array
	  let myArr = [JSONingredients, JSONdirections, $('#recipeName').val(), $('#description').val()];
	  // the post array is an associative array
	  // create our own associative array

	  let postString = JSON.stringify(myArr);
	  $.ajax({
		  url: 'submitRecipe.html',
		  type: "POST",
		  dataType: 'text',
		  data: {recipe: postString}/*,
		  success: function(result) {
		  	return result;
			  //catcher=result;
			  //console.log(result);
			  //console.log(catcher);
			  //console.log($('#searchName').val());
			  //var object = JSON.parse(result);
			  //console.log(object);
			  //$('#output').html("<p>" + object.name + ", " + object.email +
			  //					", " + object.phone + "</p>");
		  },
		  error: function(xhr, resp, text) {
			  console.log(xhr, resp, text);
		  }
	  });


	  //$.post('submitRecipe', {recipe: postString});
	  //var xhr = new XMLHttpRequest();
	  //xhr.open("POST", 'submitRecipe');
	  //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	  //xhr.send((({recipe: postString})
	  //));
  // listen for form submit
//document.getElementById("ingForm").addEventListener("click", addIngredient, false);
*/