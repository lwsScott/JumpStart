/*
* Lewis Scott
* 11/17/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/themes.js
*
*/
// if not valid prevent default and do not post data
let checkForm = function(e) {
    //let form = e.target;

    // Strategy 1 additions
    let itemList = document.getElementById("strategyList1").getElementsByTagName("li");
    console.log(itemList);
    for (var i = 0; i< itemList.length; i++) {
        let add = itemList[i].innerText;
        console.log(add);
        if (strategyItems1.indexOf(add) == -1) {
            strategyItems1.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems = JSON.stringify(strategyItems1);
    console.log(JSONitems);

    // set the value of the form to carry the array within a string
    document.getElementById('items1').value = JSONitems;

    // Strategy 2 additions
    let itemList2 = document.getElementById("strategyList2").getElementsByTagName("li");
    for (var i = 0; i< itemList2.length; i++) {
        let add = itemList2[i].innerText;
        console.log(add);
        if (strategyItems2.indexOf(add) == -1) {
            strategyItems2.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems2 = JSON.stringify(strategyItems2);
    // set the value of the form to carry the array within a string
    document.getElementById('items2').value = JSONitems2;

    // Strategy 3 additions
    let itemList3 = document.getElementById("strategyList3").getElementsByTagName("li");
    for (var i = 0; i< itemList3.length; i++) {
        let add = itemList3[i].innerText;
        console.log(add);
        if (strategyItems3.indexOf(add) == -1) {
            strategyItems3.push(add);
        }
    }
    // convert that array into a JSON string - puts quotes around the array
    JSONitems3 = JSON.stringify(strategyItems3);
    // set the value of the form to carry the array within a string
    document.getElementById('items3').value = JSONitems3;
    //e.preventDefault();

};
// on submit checkForm
document.getElementById("strategies").addEventListener("submit", checkForm, false);
let strategyItems1 = [];
let JSONitems;

let strategyItems2 = [];
let JSONitems2;

let strategyItems3 = [];
let JSONitems3;

function appendChild1(add) {

    var ul = document.getElementById("strategyList1");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
}

function appendChild2(add) {

    var ul = document.getElementById("strategyList2");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
    console.log(items);
}

function appendChild3(add) {

    var ul = document.getElementById("strategyList3");

    // add the list item to the theme list
    console.log(add);
    var node = document.createElement("LI");   // Create a <li> node
    var textnode = document.createTextNode(add);        // Create a text node
    node.appendChild(textnode);                         // Append the text to <li>

    ul.appendChild(node); //
    console.log(items);
}


// add event listener for strategy list items
document.getElementById("itemList1").addEventListener("dblclick", function(e) {
    var tgt = e.target;
    if (tgt.tagName.toUpperCase() == "LI") {

        // remove the list item from the theme list
        //tgt.parentNode.removeChild(tgt); // or tgt.remove();
        console.log(tgt);
        var add = tgt.innerText;

        console.log(add);
        let index = strategyItems1.indexOf(add);
        console.log(index);
        if (strategyItems1.indexOf(add) == -1) {
            strategyItems1.push(add);
        }
        console.log(strategyItems1);
        let strategy1 = document.getElementById("strategy1").checked;
        let strategy2 = document.getElementById("strategy2").checked;
        let strategy3 = document.getElementById("strategy3").checked;
        if (strategy1) {
            appendChild1(add);
        }
        if (strategy2) {
            appendChild2(add);
        }
        if (strategy3) {
            appendChild3(add);
        }

    }
});


// add event listener for theme list items
document.getElementById("itemList2").addEventListener("dblclick", function(e) {
    var tgt = e.target;
    if (tgt.tagName.toUpperCase() == "LI") {

        // remove the list item from the theme list
        //tgt.parentNode.removeChild(tgt); // or tgt.remove();

        var add = tgt.innerText;

        console.log(add);
        let index = strategyItems2.indexOf(add);
        console.log(index);
        if (strategyItems2.indexOf(add) == -1) {
            strategyItems2.push(add);
        }
        console.log(strategyItems2);
        let strategy1 = document.getElementById("strategy1").checked;
        let strategy2 = document.getElementById("strategy2").checked;
        let strategy3 = document.getElementById("strategy3").checked;
        if (strategy1) {
            appendChild1(add);
        }
        if (strategy2) {
            appendChild2(add);
        }
        if (strategy3) {
            appendChild3(add);
        }
    }
});

// add event listener for theme list items
document.getElementById("itemList3").addEventListener("dblclick", function(e) {
    var tgt = e.target;
    if (tgt.tagName.toUpperCase() == "LI") {

        var add = tgt.innerText;

        console.log(add);
        let index = strategyItems3.indexOf(add);
        console.log(index);
        if (strategyItems3.indexOf(add) == -1) {
            strategyItems3.push(add);
        }
        console.log(strategyItems3);
        let strategy1 = document.getElementById("strategy1").checked;
        let strategy2 = document.getElementById("strategy2").checked;
        let strategy3 = document.getElementById("strategy3").checked;
        if (strategy1) {
            appendChild1(add);
        }
        if (strategy2) {
            appendChild2(add);
        }
        if (strategy3) {
            appendChild3(add);
        }

    }
});


